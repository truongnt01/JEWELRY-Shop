@extends('Admin.Layout.index')
@section('tilte','Edit Category'.$data->name)
@section('content')
<main>
    <h1>Edit Category</h1>

    <div>
        <form action="{{ route('categories.update', $data->id) }}" method="Post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="input-group input-group-static mb-4">
                <label for="">Name</label>
                <input type="text" value="{{ old('name') ?? $data->name }}" name="name" class="form-control">

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
          
            @if ($data->children->count() < 1)
                <div class="input-group input-group-static mb4">
                    <label name="group" class="ms-0" >Parent Category</label>
                    <select name="parent_id" class="form-control">
                        <option value="">Select Parent Category</option>
                        @foreach ($parentCategories as $item)
                            <option value="{{ $item->id }}" 
                                {{ (old('parent_id') ?? $data->parent_id) == $item->id ? 'selected' : ''}}>{{ $item->name }}
                            </option>
                        @endforeach  
                    </select>
                </div>
            @endif
            
          
            <button type="submit" class="btn btn-submit btn-primary" name="submit">Save</button>
        </form>
    </div>
</main>
@endsection