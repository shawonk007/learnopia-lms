<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->prefix('admin')->group(function () {
  Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
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
