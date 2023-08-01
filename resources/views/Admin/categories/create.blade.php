@extends('Admin.Layout.index')
@section('tilte','Create Category')
@section('content')
    <main>
        <h1>Create Category</h1>

        <div>
            <form action="{{ route('categories.store') }}" method="Post" enctype="multipart/form-data">
                @csrf


                <div class="input-group input-group-static mb-4">
                    <label for="">Name</label>
                    <input type="text" value="{{ old('name') }}" name="name" class="form-control">

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
              
                <div class="input-group input-group-static mb4">
                    <label name="group" class="ms-0" >Parent Category</label>
                    <select name="parent_id" class="form-control">
                        <option value="">Select Parent Category</option>
                        @foreach ($data as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach  
                    </select>
                </div>
              
                <button type="submit" class="btn btn-submit btn-primary" name="submit">Save</button>
            </form>
        </div>
    </main>
@endsection