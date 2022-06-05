<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index_login()
    {
        return view('auth.login',[
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        $credintials = $request->validate([
            'email' => 'required|email:rfc',
            'password' => 'required'
        ]);

        if (Auth::attempt($credintials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Username / Password Salah !!!');
    }

    public function index_register(){
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }

    public function register(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email:rfc',
            'no_hp' => 'required|unique:users',
            'password' => 'required|min:8',
            'confirm' => 'required|same:password'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');
    }
}
