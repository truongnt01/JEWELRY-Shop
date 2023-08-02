@extends('Admin.Layout.index')
@section('tilte','Edit Category'.$data->name)
@section('content')
<main>
    <h1>Edit Coupon</h1>

    <div>
        <form action="{{ route('coupons.update', $data->id) }}" method="Post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="input-group input-group-static mb-4">
                <label for="">Name</label>
                <input type="text" value="{{ old('name') ?? $data->name }}" name="name" class="form-control" style="text-transform: uppercase;">

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group input-group-static mb-4">
                <label for="">Value</label>
                <input type="number" value="{{ old('value') ?? $data->value }}" name="value" class="form-control">

                @error('value')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>                

            <div class="input-group input-group-static mb4">
                <label name="type" class="ms-0">Type</label>
                <select name="type" class="form-control">
                    <option>Select Type</option>
                    <option value="money" {{ (old('type') ?? $data->type) == 'money' ? 'selected' : ''}}>Money</option>  
                </select>
                @error('type')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
          
            <div class="input-group input-group-static mb-4">
                <label>Expery date</label>
                <input type="date" value="{{ old('expery_data') ?? $data->expery_data }}" name="expery_data"
                class="form-control">

                @error('expery_data')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
          
            <button type="submit" class="btn btn-submit btn-primary" name="submit">Save</button>
        </form>
    </div>
</main>
@endsection