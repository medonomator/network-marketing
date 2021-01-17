<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(auth()->attempt($credentials)) {
            return view('admin.index');
        } else {
            return redirect('login')->with('error', 'Invalid username or password');
        }    
    }
}
