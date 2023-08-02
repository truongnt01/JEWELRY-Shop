@extends('Admin.Layout.index')
@section('title','Coupon')
@section('content')
<main>

    @if (session('message'))
        <div>
            <h1 class="text-primary"> {{ session('message') }}</h1>  
        </div>
    @endif
    <h1>Coupon list</h1>
    <a href="{{ route('coupons.create') }}" class="btn btn-primary">Create</a>
    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Value</th>
                    <th>Expery Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->value }}</td>
                    <td>{{ $item->expery_data }}</td>
                    <td>
                        <a href="{{ route('coupons.edit',$item->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('coupons.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
</main>
   
@endsection