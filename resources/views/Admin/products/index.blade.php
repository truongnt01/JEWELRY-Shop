@extends('Admin.Layout.index')
@section('title','Product')
@section('content')
<main>
    @if (session('message'))
        <div>
            <h1 class="text-primary"> {{ session('message') }}</h1>  
        </div>
    @endif
    <h1>Product list</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Create</a>
    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Sale</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><img src="{{ $item->images->count() > 0 ? asset('upload/'.$item->images->first()->url)  : 'upload/default.jpg' }}" width="200px" height="200px" alt=""></td>
                    <td>{{ $item->name }}</td>
                    <td>${{ $item->price }}</td>
                    <td>{{ $item->sale }}</td>
                    <td>
                        <a href="{{ route('products.edit',$item->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('products.show',$item->id) }}" class="btn btn-info">Show</a>
                        <form action="{{ route('products.destroy', $item->id) }}" method="POST"
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
        {{ $products->links() }}
    </div>
</main>
   
@endsection