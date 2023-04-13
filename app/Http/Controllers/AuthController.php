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

        return redirect("welcome")->withSuccess("You have registered successfully.");
    }

    public function investor_dashboard()
    {
        return view('auth/investor_dashboard');
    }
}
