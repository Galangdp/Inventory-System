<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function toLogin(){
        return view('pages.auth.login');
    }

    public function toRegister(){
        $user = User::all();
        $data = [
            'user' => $user
        ];
        return view('pages.auth.register', $data);
    }

    public function login(Request $request) {

        $credentials = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|max:255',
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect() -> route('dashboard.index');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register(Request $request){
        $credentials = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|max:255',
        ]);

        $credentials['password'] = Hash::make($credentials['password']);

        $user = User::create($credentials);

        return redirect() -> route('auth.toRegister');
        
    }

    public function logout(Request $request){
        Auth::logout(); // Melogout pengguna

        $request->session()->invalidate();
 
        $request->session()->regenerateToken();

        return redirect()->route('auth.toLogin'); // Redirect ke halaman login
    }
}
