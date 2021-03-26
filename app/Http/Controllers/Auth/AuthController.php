<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\support\Facades\Auth;
use Illuminate\Http\Request;

use App\User;

class AuthController extends Controller
{
    public function login(){
        return view('home');
    }


    public function createsuperuser(){
        User::create([
            'firstname' => 'admin',
            'lastname' => '1',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('12345678')
        ]
        );

        return redirect('/');
    }

    public function loginsubmit(Request $request){

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('admin')->with('success','login successfull');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken(); 

        return redirect('/');
    }

}
