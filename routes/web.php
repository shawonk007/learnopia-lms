<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class, 'home'])->name('site.home');
Route::get('/about', [SiteController::class, 'about'])->name('site.about');
Route::get('/courses', [SiteController::class, 'courses'])->name('site.courses');
Route::get('/courses/{slug}', [SiteController::class, 'display'])->name('course.display');
Route::get('/team', [SiteController::class, 'team'])->name('site.team');
Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');
Route::get('/disclaimer', [SiteController::class, 'disclaimer'])->name('site.disclaimer');
Route::get('/privacy-policy', [SiteController::class, 'privacy'])->name('site.privacy');
Route::get('/terms-and-conditions', [SiteController::class, 'terms'])->name('site.terms');
Route::get('/faq', [SiteController::class, 'faq'])->name('site.faq');
Route::get('/sitemap', [SiteController::class, 'sitemap'])->name('site.sitemap');

Route::middleware('super_admin')->prefix('super')->group(function () {
// Route::prefix('admin')->group(function () {
  Route::get('/', [AdminController::class, 'index'])->name('super.dashboard');
  Route::resource('courses', CourseController::class);
  Route::resource('lessons', LessonController::class);
  Route::resource('category', CategoryController::class);
  Route::resource('topics', TopicController::class);
  Route::resource('users', UserController::class);
  Route::resource('roles', RoleController::class);
});

Route::middleware('admin')->prefix('admin')->group(function () {
// Route::prefix('admin')->group(function () {
  Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
  // Route::resource('courses', CourseController::class);
  Route::resource('lessons', LessonController::class);
  Route::resource('category', CategoryController::class);
  Route::prefix('users')->group(function() {
    Route::get('/', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/', [UserController::class, 'store'])->name('admin.users.store');
    Route::put('/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
  });  
  Route::resource('roles', RoleController::class);
});

Route::middleware('instructor')->prefix('instructor')->group(function () {
// Route::prefix('admin')->group(function () {
  Route::get('/', [AdminController::class, 'index'])->name('instructor.dashboard');
  // Route::resource('courses', CourseController::class);
  Route::resource('lessons', LessonController::class);
});

Route::middleware('student')->prefix('student')->group(function () {
// Route::prefix('admin')->group(function () {
  Route::get('/', [AdminController::class, 'index'])->name('student.dashboard');
});

Route::middleware('guest')->prefix('auth')->group(function () {
  Route::get('/', function () {
    return view('auth.login2');
  });
  Route::get('/login', function () {
    return view('auth.login2');
  });
  Route::get('/register', function () {
    return view('auth.register2');
  });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
