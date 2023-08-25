<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Category;
use App\Models\CourseDetails;
use App\Models\CourseTag;
use App\Models\Profile;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CourseController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
        $courses = Course::all();
        return view('admin.course.index', compact('courses'));
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
    // public function store(StoreCourseRequest $request) {
    //     //
    //     // dd($request);
    //     $course = Course::create($request->all());
    //     if ($course) {
    //         $details = new CourseDetails($request->all());
    //         $course->details()->save($details);

    //         if ($request->topic_id) {
    //             $course->topic()->attach($request->topic_id);
    //             foreach ($request->topic_id as $topicId) {
    //                 CourseTag::create([
    //                     'course_id' => $course->id,
    //                     'topic_id' => $topicId,
    //                 ]);
    //             }
    //         }
    //     }
    //     return back()->with('success', 'Course created successfully');
    // }

    // public function store(StoreCourseRequest $request) {
    
    //     $course = Course::create($request->except('thumbnail'));
    
    //     if ($course) {
    //         $detailsData = $request->except(['thumbnail', 'topic_id']);
    
    //         $details = new CourseDetails($detailsData);
    //         $course->details()->save($details);
    
    //         if ($request->topic_id) {
    //             $course->topic()->attach($request->topic_id);
    //             foreach ($request->topic_id as $topicId) {
    //                 CourseTag::create([
    //                     'course_id' => $course->id,
    //                     'topic_id' => $topicId,
    //                 ]);
    //             }
    //         }

    //         if ($request->hasFile('thumbnail')) {
    //             $image = $request->file('thumbnail');
    //             $loc = $image->store('course');
    //             $course->details()->save();
    //             $image = Image::make(Storage::path($loc))->resize(800, null, function ($constraint) {
    //                 $constraint->aspectRatio();
    //                 $constraint->upsize();
    //             })->save(Storage::path($loc));
    //         }
    //     }
    
    //     return back()->with('success', 'Course created successfully');
    // }

    public function store(StoreCourseRequest $request) {
        $course = Course::create($request->except('thumbnail'));
    
        if ($course) {
            $detailsData = $request->except(['thumbnail', 'topic_id']);
            $details = new CourseDetails($detailsData);
            $course->details()->save($details);
    
            if ($request->topic_id) {
                $course->topic()->attach($request->topic_id);
                foreach ($request->topic_id as $topicId) {
                    CourseTag::create([
                        'course_id' => $course->id,
                        'topic_id' => $topicId,
                    ]);
                }
            }
    
            if ($request->hasFile('thumbnail')) {
                $image = $request->file('thumbnail');
                $loc = $image->store('course');
    
                // Resize and save the image
                $resizedImage = Image::make(Storage::path($loc))->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $resizedImagePath = 'course/resized_' . time() . '.jpg'; // Create a new path for the resized image
                $resizedImage->save(Storage::path($resizedImagePath));
    
                // Update the CourseDetails model with the new image path
                $course->details->thumbnail = $resizedImagePath;
                $course->details->save();
            }
        }
    
        return back()->with('success', 'Course created successfully');
    }
    
    
    private function compressImage($imagePath) {
        $image = Image::make(Storage::path($imagePath))
            ->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })
            ->save();
    
        $compressedImagePath = 'thumbnails/compressed_' . time() . '.jpg'; // New path for the compressed image
        $image->save(storage_path('app/public/') . $compressedImagePath);
    
        return $compressedImagePath;
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
        $users = User::where([
            ['role_id', 7],
            ['status', 1]
        ])->orderBy('created_at', 'ASC')->get(['firstname', 'lastname', 'id']);
        $categories = Category::orderBy('created_at', 'ASC')->get(['title', 'parent_id', 'id']);
        $topics = Topic::all();
        return view('admin.course.edit', compact('course', 'categories', 'users', 'topics'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course) {
        //
        $course->update($request->all());
        $details = $course->details ?: new CourseDetails();
        $details->fill($request->all());
        $course->details()->save($details);

        return back()->with('success', 'Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course) {
        //
    }
}
