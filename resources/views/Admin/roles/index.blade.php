@extends('Admin.Layout.index')
@section('title','Roles')
@section('content')
<main>

    @if (session('message'))
        <div>
         <h1 class="text-primary"> {{ session('message') }}</h1>  
        </div>
    @endif
    <h1>Role list</h1>
    <a href="{{ route('roles.create') }}" class="btn btn-primary">Create</a>
    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>DisplayName</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->display_name }}</td>
                    <td>
                        <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
        {{ $roles->links() }}
    </div>
</main>
   
@endsection