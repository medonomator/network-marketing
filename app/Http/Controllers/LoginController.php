<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use Auth;

class LoginController extends Controller
{
    /**
     * Authenticate the user of the application.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adminAuthenticate(Request $request)
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect('admin-login');
    }

    /**
     * Client register
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function clientRegister(Request $request)
    {
        $cleint = Client::where('email', $request->email)->first();

        if($cleint) {
            return 'Such client уже есть';
        }

        $client = Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        Auth::guard('web')->login($client);

        return redirect('/');
    }
}
