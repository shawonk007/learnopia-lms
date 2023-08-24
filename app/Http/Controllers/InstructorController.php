<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Http\Requests\StoreInstructorRequest;
use App\Http\Requests\UpdateInstructorRequest;
use App\Models\User;

class InstructorController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::where([
            ['role_id', 7],
            ['status', 1]
        ])->get(['firstname', 'lastname', 'created_at', 'id']);
        return view('admin.instructor.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users = User::where([
            ['role_id', 7],
            ['status', 1]
        ])->get(['firstname', 'lastname', 'id']);
        return view('admin.instructor.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInstructorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instructor $instructor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInstructorRequest $request, Instructor $instructor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructor $instructor)
    {
        //
    }
}
