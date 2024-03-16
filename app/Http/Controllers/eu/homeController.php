<?php

namespace App\Http\Controllers\eu;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;


class homeController extends Controller
{
    //
    public function index()
    {
        return view('eu.home');
    }
}
