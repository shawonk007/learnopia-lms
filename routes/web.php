<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
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
Route::get('/team', [SiteController::class, 'team'])->name('site.team');
Route::get('/contact', [SiteController::class, 'contact'])->name('site.contact');
Route::get('/disclaimer', [SiteController::class, 'disclaimer'])->name('site.disclaimer');
Route::get('/privacy-policy', [SiteController::class, 'privacy'])->name('site.privacy');
Route::get('/terms-and-conditions', [SiteController::class, 'terms'])->name('site.terms');
Route::get('/faq', [SiteController::class, 'faq'])->name('site.faq');
Route::get('/sitemap', [SiteController::class, 'sitemap'])->name('site.sitemap');

Route::middleware('guest')->prefix('admin')->group(function () {
  Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
  Route::resource('courses', CourseController::class);
  Route::resource('category', CategoryController::class);
  Route::resource('users', UserController::class);
  Route::resource('roles', RoleController::class);
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
