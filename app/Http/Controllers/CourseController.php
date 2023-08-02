<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CourseController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
        return view('admin.course.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course) {
        //
    }
}
