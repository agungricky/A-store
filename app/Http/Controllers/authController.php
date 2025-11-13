<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showLoginForm()
    {
        return view('auth.login'); // nanti form HTML kamu taruh di sini
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $role = Auth::user()->role;

            // Kalau request datang dari fetch (AJAX), jangan redirect
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'role' => $role,
                ]);
            }

            // Kalau bukan AJAX (misal form biasa), tetap redirect
            if ($role == 'admin') {
                return redirect()->intended(route('admin.index'));
            } elseif ($role == 'user') {
                return redirect()->intended(route('customer.index'));
            }
        }

        if ($request->expectsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'Email atau password salah.',
            ], 401);
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
