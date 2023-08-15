<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
    public function courses() {
        $categories = Category::all();
        return view('front-end.courses', compact('categories'));
    }
    // 
    public function display() {
        return view('front-end.display');
    }
    // 
    public function team() {
        return view('front-end.team');
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
