<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    /**
     * Authenticate the user of the application.
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(auth()->attempt($credentials)) {
            return view('admin.index');
        } else {
            return redirect('admin-login')->with('error', 'Invalid username or password');
        }    
    }

    /**
     * Log the user out of the application.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('admin-login');
    }
}
