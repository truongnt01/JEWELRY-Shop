@extends('Admin.Layout.index')
@section('tilte','Show Product')
@section('content')
    <main>
        <h1>Show Product</h1>

       
            
                
                <div class="input-group input-group-static mb-4">
                    <label for="">Name : {{ $product->name }} </label>
                </div>

                <div class="row">
                    <div class="input-group-static col-5c mb-4">
                        <label for="">Image</label>
                       
                    </div>
                    <div class="col-5">
                        <img src="{{ $product->images ? asset('upload/'.$product->images->first()->url) : 'upload/default.jpg' }}" id="show-image" alt="" style="width: 200px;">
                    </div>
                </div>
               
                
                <div class="input-group input-group-static mb-4">
                    <label for="">Price : {{ $product->price }}</label>
                    
                </div>

                <div class="input-group input-group-static mb-4">
                    <label for="">Sale : {{ $product->sale }}</label>
                    
                </div>
                
                <div class="input-group input-group-static mb-4">
                    <label for="">Description</label>
                        <div class="row w-100 h-100">
                            {!! $product->description !!}
                        </div>                   
                </div>

                <div class="input-group input-group-static mb4">
                    <label name="group" class="ms-0" >Category</label>
                    @foreach ($product->categories as $item)
                        <p>{{ $item->name }}</p>
                    @endforeach
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
