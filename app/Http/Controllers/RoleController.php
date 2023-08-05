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

        $role = Role::create($request->validated());

        if ($request->expectsJson()) {
            return response()->json(['data' => $role, 'success' => true, 'message' => 'Role created successfully'], 201);
        }

        return redirect()->route('roles.create');
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
    // public function update(UpdateRoleRequest $request, Role $role) {
    public function update(UpdateRoleRequest $request, $id) {
    // public function update(Request $request, $id) {
        //
        $role = Role::findOrFail($id);
        // Role::findOrFail($role);

        // $role->update($request->validated());
        $role->update($request->all());

        if ($request->expectsJson()) {
            return response()->json(['data' => $role, 'success' => true, 'message' => 'Role updated successfully'], 201);
        }

        return redirect()->route('roles.edit', ['role' => $role]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role) {
        if($role->delete()){
            return response()->json(['data' => $role, 'success' => true, 'message' => 'Role deleted successfully'], 201);
        }
        // return redirect()->route('roles.index');
    }
}
