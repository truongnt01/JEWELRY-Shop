@extends('Admin.Layout.index')
@section('title','Categories')
@section('content')
<main>

    @if (session('message'))
        <div>
         <h1 class="text-primary"> {{ session('message') }}</h1>  
        </div>
    @endif
    <h1>Category list</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Create</a>
    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Parent_Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->parent_name }}</td>
                    <td>
                        <a href="{{ route('categories.edit',$item->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('categories.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>
</main>
   
@endsection