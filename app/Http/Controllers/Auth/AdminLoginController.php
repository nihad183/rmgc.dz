<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.admin-login'); // صفحة تسجيل الدخول
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            if (!Auth::user()->is_admin) {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Vous n’avez pas la permission d’accéder au dashboard.',
                ]);
            }

            $request->session()->regenerate();
            return redirect()->intended('/rmgc-secret-dashboard/news');
        }

        return back()->withErrors([
            'email' => 'Les informations de connexion sont invalides.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/rmgc-secret-dashboard/login');
    }
}
