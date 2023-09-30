<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    /**
     * Show the application dashboard.

     */
    public function back()
    {
        return view('back.dashboard');
    }

    public function front()
    {
        return view('front.form');
    }
}
