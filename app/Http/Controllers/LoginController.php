<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginPost(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->role == 'Admin'){
                return redirect()->intended('/admin');
            }elseif(Auth::user()->role == 'Operator'){
                return redirect()->intended('/operator');
            }
            
        } 

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
      }
}
