<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\Admin\AdminAuthenticatedSessionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
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
Route::prefix('courses')->group(function() {
  Route::get('/', [SiteController::class, 'courses'])->name('site.courses');
  Route::get('/{slug}', [SiteController::class, 'display'])->name('course.display');
  // Route::get('/{slug}/purchase', [SiteController::class, 'enrollment'])->name('enrollment');
});
Route::get('/checkout', [SiteController::class, 'enrollment'])->name('enrollment');
Route::get('/team', [SiteController::class, 'team'])->name('site.team');
Route::get('/team/{uname}', [SiteController::class, 'instructor'])->name('team.instructor');
Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');
Route::get('/disclaimer', [SiteController::class, 'disclaimer'])->name('site.disclaimer');
Route::get('/privacy-policy', [SiteController::class, 'privacy'])->name('site.privacy');
Route::get('/terms-and-conditions', [SiteController::class, 'terms'])->name('site.terms');
Route::get('/faq', [SiteController::class, 'faq'])->name('site.faq');
Route::get('/sitemap', [SiteController::class, 'sitemap'])->name('site.sitemap');
Route::post('/session', [SiteController::class, 'processPayment'])->name('session');
Route::get('/success', [SiteController::class, 'success'])->name('success');

// Route::middleware('admin')->prefix('app')->group(function () {
Route::prefix('app')->group(function () {
// Route::prefix('admin')->group(function () {
  Route::get('/', [AdminAuthenticatedSessionController::class, 'index'])->name('admin.dashboard');
  Route::get('/{username}', [AdminAuthenticatedSessionController::class, 'show'])->name('show.profile');
  Route::get('/{username}/edit', [AdminAuthenticatedSessionController::class, 'edit'])->name('edit.profile');
  Route::resource('courses', CourseController::class);
  Route::resource('lessons', LessonController::class);
  Route::resource('category', CategoryController::class);
  Route::resource('topics', TopicController::class);
  Route::resource('enrollments', EnrollmentController::class);
  Route::resource('payments', PaymentController::class);
  Route::resource('users', UserController::class);
  Route::resource('instructor', InstructorController::class);
  Route::resource('student', StudentController::class);
  Route::resource('roles', RoleController::class);
  // Route::prefix('profile')->group(function() {
    // Route::get('/profile', [AdminController::class, 'edit'])->name('edit.profile');
  // });
});

// Route::middleware('admin')->prefix('admin')->group(function () {
// // Route::prefix('admin')->group(function () {
//   Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
//   Route::prefix('courses')->group(function() {
//     Route::get('/', [CourseController::class, 'index'])->name('admin.courses.index');
//     Route::get('/create', [CourseController::class, 'create'])->name('admin.courses.create');
//     Route::post('/', [CourseController::class, 'store'])->name('admin.courses.store');
//     Route::get('/{id}/edit', [CourseController::class, 'edit'])->name('admin.courses.edit');
//     Route::put('/{id}', [CourseController::class, 'update'])->name('admin.courses.update');
//     Route::delete('/{id}', [CourseController::class, 'destroy'])->name('admin.courses.destroy');
//   });
//   Route::prefix('lessons')->group(function() {
//     Route::get('/', [LessonController::class, 'index'])->name('admin.lessons.index');
//     Route::get('/create', [LessonController::class, 'create'])->name('admin.lessons.create');
//     Route::post('/', [LessonController::class, 'store'])->name('admin.lessons.store');
//     Route::get('/{id}/edit', [LessonController::class, 'edit'])->name('admin.lessons.edit');
//     Route::put('/{id}', [LessonController::class, 'update'])->name('admin.lessons.update');
//     Route::delete('/{id}', [LessonController::class, 'destroy'])->name('admin.lessons.destroy');
//   });
//   Route::prefix('category')->group(function() {
//     Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
//     Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
//     Route::post('/', [CategoryController::class, 'store'])->name('admin.category.store');
//     Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
//     Route::put('/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
//     Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
//   });
//   Route::prefix('topics')->group(function() {
//     Route::get('/', [TopicController::class, 'index'])->name('admin.topics.index');
//     Route::get('/create', [TopicController::class, 'create'])->name('admin.topics.create');
//     Route::post('/', [TopicController::class, 'store'])->name('admin.topics.store');
//     Route::get('/{id}/edit', [TopicController::class, 'edit'])->name('admin.topics.edit');
//     Route::put('/{id}', [TopicController::class, 'update'])->name('admin.topics.update');
//     Route::delete('/{id}', [TopicController::class, 'destroy'])->name('admin.topics.destroy');
//   });
//   Route::prefix('users')->group(function() {
//     Route::get('/', [UserController::class, 'index'])->name('admin.users.index');
//     Route::get('/create', [UserController::class, 'create'])->name('admin.users.create');
//     Route::post('/', [UserController::class, 'store'])->name('admin.users.store');
//     Route::get('/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
//     Route::put('/{id}', [UserController::class, 'update'])->name('admin.users.update');
//     Route::delete('/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
//   });
// });

// Route::middleware('instructor')->prefix('instructor')->group(function () {
// // Route::prefix('admin')->group(function () {
//   Route::get('/', [AdminController::class, 'index'])->name('instructor.dashboard');
//   Route::prefix('courses')->group(function() {
//     Route::get('/', [CourseController::class, 'index'])->name('instructor.courses.index');
//     Route::get('/create', [CourseController::class, 'create'])->name('instructor.courses.create');
//     Route::post('/', [CourseController::class, 'store'])->name('instructor.courses.store');
//     Route::get('/{id}/edit', [CourseController::class, 'edit'])->name('instructor.courses.edit');
//     Route::put('/{id}', [CourseController::class, 'update'])->name('instructor.courses.update');
//     Route::delete('/{id}', [CourseController::class, 'destroy'])->name('instructor.courses.destroy');
//   });
//   Route::prefix('lessons')->group(function() {
//     Route::get('/', [LessonController::class, 'index'])->name('instructor.lessons.index');
//     Route::get('/create', [LessonController::class, 'create'])->name('instructor.lessons.create');
//     Route::post('/', [LessonController::class, 'store'])->name('instructor.lessons.store');
//     Route::get('/{id}/edit', [LessonController::class, 'edit'])->name('instructor.lessons.edit');
//     Route::put('/{id}', [LessonController::class, 'update'])->name('instructor.lessons.update');
//     Route::delete('/{id}', [LessonController::class, 'destroy'])->name('instructor.lessons.destroy');
//   });
// });

// Route::middleware('student')->prefix('student')->group(function () {
// // Route::prefix('admin')->group(function () {
//   Route::get('/', [AdminController::class, 'index'])->name('student.dashboard');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
