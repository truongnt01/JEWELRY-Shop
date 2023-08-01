@extends('Admin.Layout.index')
@section('tilte','Create Product')
@section('content')
    <main>
        <h1>Create Product</h1>

        <div>
            <form action="{{ route('products.store') }}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="input-group input-group-static mb-4">
                    <label for="">Name</label>
                    <input type="text" value="{{ old('name') }}" name="name" class="form-control">

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row">
                    <div class="input-group-static col-5c mb-4">
                        <label for="">Image</label>
                        <input type="file" accept="image/*" name="image" id="image-input" class="form-control">
                        
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-5">
                        <img src="" id="show-image" alt="" style="width: 200px;">
                    </div>
                </div>
               
                
                <div class="input-group input-group-static mb-4">
                    <label for="">Price</label>
                    <input type="text" value="{{ old('price') }}" name="price" class="form-control">

                    @error('price')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group input-group-static mb-4">
                    <label for="">Sale</label>
                    <input type="text" value="{{ old('sale') }}" name="sale" class="form-control">

                    @error('sale')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="input-group input-group-static mb-4">
                    <label for="">Description</label>
                    <br>
                    <textarea name="description" class="form-control">
                        {{ old('description') }}
                    </textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group input-group-static mb4">
                    <label name="group" class="ms-0" >Category</label>
                    <select name="category_ids[]" class="form-control" multiple>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>

                    @error('category_ids')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
               
                <button type="submit" class="btn btn-submit btn-primary" name="submit">Save</button>
            </form>
        </div>
    </main>
@endsection


@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script>
        $(() => {
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#show-image').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#image-input").change(function() {
                readURL(this);
            });
        });
    </script>
@endsection
