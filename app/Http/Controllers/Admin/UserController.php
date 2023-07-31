<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $user;
    protected $role;


    public function __construct(User $user, Role $role)
    {
        $this->user = $user;

        $this->role = $role;
    }

    public function index()
    {
        $users = $this->user::latest('id')->paginate(5);
        return view('Admin.users.index', ['users'=> $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = $this->role->all()->groupBy('group');
        return view('Admin.users.create', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        $dataCreate = $request->all();
        $dataCreate['password'] = Hash::make($request->password);
        $dataCreate['image'] = $this->user->saveImage($request);

        $user = $this->user->create($dataCreate);
        $user->images()->create(['url' => $dataCreate['image']]);
        $user->roles()->attach($dataCreate['role_ids']);
        return to_route('users.index')->with('message', 'Create Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $roles = $this->role->all()->groupBy('group');
        $user = $this->user->findOrFail($id)->load('roles');
        return view('Admin.users.edit',['user' => $user, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = $this->user->findOrFail($id)->load('roles');
        $dataUpdate = $request->except('password');
        if($request->password){
            $dataUpdate['password']= Hash::make($request->password);
        }
        $currentImage = $user->images ? $user->images->first()->url : ''; 
        $dataUpdate['image'] = $this->user->updateImage($request, $currentImage);

        $user->update($dataUpdate);
        $user->images()->delete();
        $user->images()->create(['url' => $dataUpdate['image']]);
        $user->roles()->sync($dataUpdate['role_ids'] ?? []);
        return to_route('users.index')->with('message', 'Create Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $user = $this->user->findOrFail($id)->load('roles');
        $user->images()->delete();
        $imageName = $user->images->count() > 0 ? $user->images->first()->url : ''; 
        $this->user->deleteImage($imageName);
        $user->delete();

        return to_route('users.index')->with('message', 'Deleted Success');
    }
}
