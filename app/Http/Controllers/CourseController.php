<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Category;
use App\Models\CourseDetails;
use App\Models\CourseTag;
use App\Models\Topic;
use App\Models\User;

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
        $users = User::where([
            ['role_id', 7],
            ['status', 1]
        ])->orderBy('created_at', 'ASC')->get(['firstname', 'lastname', 'id']);
        $categories = Category::orderBy('created_at', 'ASC')->get(['title', 'parent_id', 'id']);
        $topics = Topic::all();
        return view('admin.course.create', compact('categories', 'users', 'topics'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request) {
        //
        // dd($request);
        $course = Course::create($request->all());
        if ($course) {
            $details = new CourseDetails($request->all());
            $course->details()->save($details);

            if ($request->topics) {
                foreach ($request->topics as $topicId) {
                    $topic = new CourseTag(['topic_id' => $topicId]);
                    $course->topics()->save($topic);
                }
            }
        }
        return back()->with('success', 'Course created successfully');
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
