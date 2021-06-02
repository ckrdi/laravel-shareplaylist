<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // validate user
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        // log user in
        if (Auth::attempt($credentials, $request->remember)) {
            // generate session
            $request->session()->regenerate();
            // redirect
            return redirect()->route('dashboard');
        }
        
        // redirect if user login failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
