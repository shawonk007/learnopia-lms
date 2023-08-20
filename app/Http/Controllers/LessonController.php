<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Http\Requests\StoreLessonRequest;
use App\Http\Requests\UpdateLessonRequest;
use App\Models\Course;
use App\Models\LessonTag;
use App\Models\Topic;

class LessonController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
        $lessons = Lesson::all();
        return view('admin.lesson.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
        $courses = Course::all();
        $topics = Topic::all();
        return view('admin.lesson.create', compact('courses', 'topics'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLessonRequest $request) {
        //
        // dd($request);
        $lesson = Lesson::create($request->all());
        if ($request->topics) {
            $lesson->topic()->attach($request->topics);
            foreach ($request->topics as $topicId) {
                LessonTag::create([
                    'lesson_id' => $lesson->id,
                    'topic_id' => $topicId,
                ]);
            }
        }
        return back()->with('success', 'Lesson created successfully!');
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
        $courses = Course::all();
        $topics = Topic::all();
        return view('admin.lesson.edit', compact('lesson', 'courses', 'topics'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLessonRequest $request, Lesson $lesson) {
        //
        $lesson->update($request->all());
        return back()->with('success', 'Lesson updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson) {
        //
    }
}
