<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminAuthenticatedSessionController extends Controller {

    /**
     * Display the admin dashboard
     */

    public function index(): View {
        return view('admin.dashboard');
    }

    /**
     * Display the login view.
     */
    public function create(): View {
        return view('auth.admin.login');
    }

    /**
     * Handle an incoming authentication request.
     */

    public function store(LoginRequest $request): RedirectResponse {
        $credentials = $request->validated();

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    /**
     * Show the form for showing the specified resource.
     */

    // public function show($username) {
    //     $username = Admin::where('username', $username)->firstOrFail();
    //     return view('admin.profiles.show', compact('username'));
    // }
    public function show(Admin $admin) {
        return view('admin.profiles.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin) {
        return view('admin.profiles.edit', compact('admin'));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->session()->forget('admin_id');
        Auth::guard('admin')->logout();
        $request->session()->regenerateToken();
        return redirect('/admin');
    }
}
