<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller {
    //
    public function home() {
        return view('front-end.home');
    }
    // 
    public function about() {
        return view('front-end.about');
    }
    // 
    public function category($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('front-end.courses', compact('category'));
    }
    // 
    public function courses() {
        $categories = Category::all();
        $courses = Course::all();
        return view('front-end.courses', compact('categories', 'courses'));
    }
    //
    public function display($slug) {
        $course = Course::where('slug', $slug)->firstOrFail();
        // $lessons = Lesson::where()
        return view('front-end.display', compact('course'));
    }
    // public function category($slug) {
    //     return view('front-end.courses', compact('course'));
    // }
    // 
    public function enrollment(Request $request) {
        $courseId = $request->query('course_id');
        $course = Course::find($courseId);
        return view('front-end.enrollment', compact('course'));
    }
    // 
    public function team() {
        return view('front-end.team');
    }
    // 
    public function instructor($uname) {
        $instructor = User::where([['role_id', 7], ['username', $uname]])->firstOrFail();
        return view('front-end.instructor', compact('instructor'));
    }
    // 
    public function contact() {
        return view('front-end.contact');
    }
    // 
    public function disclaimer() {
        return view('front-end.disclaimer');
    }
    // 
    public function privacy() {
        return view('front-end.privacy');
    }
    // 
    public function terms() {
        return view('front-end.terms');
    }
    // 
    public function faq() {
        return view('front-end.faq');
    }
    // 
    public function sitemap() {
        return view('front-end.sitemap');
    }
}
