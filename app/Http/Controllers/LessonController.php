<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Http\Requests\StoreLessonRequest;
use App\Http\Requests\UpdateLessonRequest;

class LessonController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
        return view('admin.lesson.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
        return view('admin.lesson.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLessonRequest $request) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lesson $lesson) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLessonRequest $request, Lesson $lesson) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson) {
        //
    }
}
