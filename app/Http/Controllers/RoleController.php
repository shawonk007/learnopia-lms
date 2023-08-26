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

        // Role::create($request->validated());
        // return redirect()->route('roles.create')->with('success', 'Role created successfully');

        // if (!$request->validated()) {
        //   return redirect()->route('roles.create')->with('success', 'Title or Slug is not available');
        // }

        $validatedData = $request->validated();
    
        // Check if the validation passed
        if ($validatedData) {
            $created = Role::create($validatedData);
            if ($created) {
                return redirect()->route('roles.create')->with('created', 'Role created successfully');
            } else {
                return redirect()->route('roles.create')->with('error', 'Role creation failed: Unable to create role');
            }
        } else {
            return redirect()->route('roles.create')->withErrors(['error' => 'Title or Slug is not available']);
        }

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
    // public function update(UpdateRoleRequest $request, Role $role) {

        $role = Role::findOrFail($id);
        $role->update($request->validated());
        return back()->with('updated', 'Role updated successfully');
        // return redirect()->back()->with('success', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role) {
        $role->delete();
        return back()->with('success', 'Role deleted successfully');
    }
}
