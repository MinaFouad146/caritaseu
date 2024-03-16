<?php

namespace App\Http\Controllers\eu;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class loginRegisterController extends Controller
{
    //
    public function loginShow()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth()->guard('admin')->attempt(
            [
                'email' => request('email'),
                'password' => request('password')
            ]
        )) {
            return redirect()->route('eu.homeShow');
        } else {
            return redirect()->route('eu.loginshow')->with('loginFailedMsg', 'wrong username or password');
        }
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect()->route('eu.loginshow');
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
}
