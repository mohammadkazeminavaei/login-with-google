<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class socialAuthController extends Controller
{
    public function google() 
    {
        return view('auth.logingoogle');
    }

    public function linkedin() 
    {
        return view('auth.loginlinkedin');
    }

    public function github() 
    {
        return view('auth.logingithub');
    }

    public function twitter() 
    {
        return view('auth.logintwitter');
    }
}
