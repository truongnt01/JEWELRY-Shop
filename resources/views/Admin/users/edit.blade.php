@extends('Admin.Layout.index')
@section('tilte','Edit User'.$user->name)
@section('content')
    <main>
        <h1>Create User</h1>

        <div>
            <form action="{{ route('users.update', $user->id) }}" method="Post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="input-group input-group-static mb-4">
                    <label for="">Name</label>
                    <input type="text" value="{{ old('name') ?? $user->name }}" name="name" class="form-control">

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
                        <img src="{{ $user->image ? asset('upload/users/'.$user->images->first()->url) : '' }}" id="show-image" alt="" style="width: 200px;">
                    </div>
                </div>
               
                
                <div class="input-group input-group-static mb-4">
                    <label for="">Email</label>
                    <input type="email" value="{{ old('email') ?? $user->email }}" name="email" class="form-control">

                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group input-group-static mb-4">
                    <label for="">Phone</label>
                    <input type="text" value="{{ old('phone') ?? $user->phone }}" name="phone" class="form-control">

                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="input-group input-group-static mb-4">
                    <label for="">Address</label>
                    <br>
                    <textarea name="address" class="form-control">
                        {{ old('address') ?? $user->address }}
                    </textarea>
                    @error('address')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group input-group-static mb4">
                    <label name="group" class="ms-0" >Gender</label>
                   
                    <select name="gender" class="form-control" value={{ $user->gender }}>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>

                    @error('gender')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group input-group-static mb-4">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">

                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <div class="form-group">
                    <label for="">Roles</label>
                    <div class="row">
                        @foreach ($roles as $groupName => $role)
                            <div class="col-5">
                                <h4>{{ $groupName }}</h4>

                                <div>
                                    @foreach ($role as $item)
                                        <div class="form-check">
                                            <input class="form-check-input" name="role_ids[]"  {{ $user->roles->contains('id', $item->id) ? 'checked' : '' }}    type="checkbox"
                                                value="{{ $item->id }}">
                                            <label class="custom-control-label"
                                                for="customCheck1">{{ $item->display_name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>




                <button type="submit" class="btn btn-submit btn-primary" name="submit">Update</button>
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
