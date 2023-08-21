<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login2');
    }

    /**
     * Handle an incoming authentication request.
     */
    // public function store(LoginRequest $request): RedirectResponse
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return redirect()->intended(RouteServiceProvider::HOME);
    // }

    public function store(LoginRequest $request): RedirectResponse {
      $request->authenticate();
      $request->session()->regenerate();
      $user = Auth::user();
    //   dd($user->role->slug);
      if ($user->role->slug === 'super-admin') {
        return redirect()->intended(RouteServiceProvider::SUPER);
      }
      if ($user->role->slug === 'administrator') {
        return redirect()->intended(RouteServiceProvider::ADMIN);
      }
      if ($user->role->slug === 'instructor') {
        return redirect()->intended(RouteServiceProvider::INSTRUCTOR);
      }
      if ($user->role->slug === 'student') {
        return redirect()->intended(RouteServiceProvider::STUDENT);
      }
      return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
