<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;

class AuthController extends Controller
{
    public function index_registration()
    {
        return view('auth/register');
    }

    public function index_login()
    {
        return view('auth/login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|string',
        ]);

        User::create([
            'role_id' => $request->role_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('dashboard');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) 
        {
            return redirect()
            ->intended('dashboard')
            ->withSuccess('Signed in');
        }
        return redirect()
        ->back()
        ->with('msg', 'Invalid credentials.');
    }

    public function investor_dashboard()
    {
        return view('auth/investor_dashboard');
    }
}
