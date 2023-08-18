<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Profile;
use App\Models\Role;
use App\Models\Social;
use Illuminate\Http\Response;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
        $roles = Role::orderBy('created_at', 'ASC')->pluck('title', 'id');
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request) {
        //
        $user = User::create($request->all());
        if ($user) {
            $profile = new Profile($request->all());
            $user->profile()->save($profile);

            $social = new Social($request->all());
            $user->social()->save($social);
        }
        return back()->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user) {
        //
        $roles = Role::all();
        return view('admin.users.edit', compact(['user', 'roles']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, $id) {
        //
        $user = User::findOrFail($id);
        $user->update($request->all());

        $profile = $user->profile ?: new Profile();
        $profile->fill($request->all());
        $user->profile()->save($profile);

        $social = $user->social ?: new Social();
        $social->fill($request->all());
        $user->social()->save($social);

        return back()->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user) {
        //
    }
}
