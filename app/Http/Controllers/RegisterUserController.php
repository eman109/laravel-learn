<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(){
        //validate
        $attributes= request()->validate([
            'first-name'=>['required'],
            'last-name'=>['required'],
            'email'=>['required', 'email'], //email_confirmation -> if confirmed
            'password'=>['required', Password::min(6), 'confirmed'] //password confirmation
        ]);

        //create the user
        $user=User::create($attributes);

        //login
        Auth::login($user);

        //redirect
        return redirect('/jobs');
    }
}
