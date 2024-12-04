<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (!Auth::check() || !Auth::user()->name)  
            return redirect('/home');

        
        return view('home');
    }
}