<?php

namespace App\Http\Controllers\Controller;


use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegistrationController extends Controller
{
    //

    public function loginShow()
    {
        return view('auth.login');
    }


    public function UserRegistrationShow()
    {
        return view('auth.registration');
    }

    public function store(RegistrationRequest $request)
    {
        Admin::create([

            'name' => $request->userName,
            'email' => $request->Email,
            'password' => Hash::make($request->inputPassword),
            'group' => $request->group
        ]);

        return redirect()->route('loginshow')->with('success', 'Account created successfully.');
    }


    public function login(LoginRequest $request)
    {
        if (auth()->guard('admin')->attempt(
            [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]
        )) {
            return redirect()->route('home');
        } else {
            return redirect()->route('admin.login')->with('loginFailedMsg', 'wrong username or password');
        }
    }
}
