@extends('Admin.Layout.index')
@section('title','Users')
@section('content')
<main>

    @if (session('message'))
        <div>
         <h1 class="text-primary"> {{ session('message') }}</h1>  
        </div>
    @endif
    <h1>User list</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Create</a>
    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><img src="{{ $item->images->count() > 0 ? asset('upload/users/'.$item->images->first()->url)  : 'upload/users/default.jpg' }}"  width="200px" height="200px"  alt=""></td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>
                        <a href="{{ route('users.edit',$item->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('users.destroy', $item->id) }}" method="POST"
                            id="form-delete({{ $item->id }})">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit" data-id="{{ $item->id }}">Delete</button>   
                        </form>
                      
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</main>
   
@endsection