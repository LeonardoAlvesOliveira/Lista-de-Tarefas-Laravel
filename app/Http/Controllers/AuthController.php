<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function index(Request $request)
    {
        //  dd(Auth::user());
        return view('login');
    }
    public function register(Request $request)
    {
        return view('register');
    }
    public function login_action(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (Auth::attempt($validator)) {
            return redirect()->route('home');
        };
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);
        $data = $request->only('name', 'email', 'password');
        $data['password'] = Hash::make($data['password']);
        User::created($data);
        return redirect(route('login'));
    }
}
