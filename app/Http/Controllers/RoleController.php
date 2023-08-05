<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;

class RoleController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request) {

        Role::create($request->validated());
        return redirect()->route('roles.create')->with('success', 'Role created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role) {
        //
        return view('admin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, $id) {

        $role = Role::findOrFail($id);
        $role->update($request->all());
        return redirect()->route('roles.edit', ['role' => $role])->with('success', 'Role created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role) {
        if($role->delete()){
            return redirect()->route('roles.index')->with('success', 'Role deleted successfully');
        }
        return redirect()->route('roles.index');
    }
}
