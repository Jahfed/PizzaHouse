<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate(
            [
                'name' => 'required|max:200|min:2',
                'username' => 'required|max:200|min:3|unique:users,username',
                'email' => 'required|email|max:200|unique:users,email',
                'password' => 'required|max:200|min:7'
            ]
        );

        $user = User::create($attributes);


        //log the user in
        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created!');
    }
}
