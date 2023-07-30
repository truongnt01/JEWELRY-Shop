@extends('Admin.Layout.index')
@section('tilte','Create Roles')
@section('content')
    <main>
        <h1>Create Role</h1>

        <div>
            <form action="{{ route('roles.store') }}" method="Post" enctype="multipart/form-data">
                @csrf


                <div class="input-group input-group-static mb-4">
                    <label for="">Name</label>
                    <input type="text" value="{{ old('name') }}" name="name" class="form-control">

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group input-group-static mb-4">
                    <label for="">Display Name</label>
                    <input type="text" value="{{ old('display_name') }}" name="display_name" class="form-control">

                    @error('display_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group input-group-static mb4">
                    <label name="group" class="ms-0" >Group</label>
                   
                    <select name="group" class="form-control">
                        <option value="system">System</option>
                        <option value="User">User</option>
                    </select>

                    @error('group')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <div class="input-group input-group-static mb-4">
                    <label for="">Permission</label>
                    <div class="row">
                        @foreach ($permissions as $groupName => $permissions)
                        <div class="col-5">
                            <h4>{{ $groupName }}</h4>
                            
                            <div>
                                @foreach ($permissions as $item)
                                <div class="form-check">
                                    <input class="form-check-input" name="permission_ids[]" type="checkbox" value="{{ $item->id }}" >
                                    <label class="custom-control-label" for="customCheck1 ">{{ $item->display_name }}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-submit btn-primary" name="submit">Save</button>
            </form>
        </div>
    </main>
@endsection