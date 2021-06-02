<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        
        // validate the user
        $this->validate($request, [
            'name' => ['required', 'max:255'],
            'username' => ['required', 'max:255', 'unique:App\Models\User,username'],
            'email' => ['email', 'required', 'max:255', 'unique:App\Models\User,email'],
            'password' => ['required', 'confirmed'],
        ]);
        
        // record the user
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
        ]);
        
        // sign the user in
        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        // redirect
        return redirect()->route('dashboard');

    }

}
