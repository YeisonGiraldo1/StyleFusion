<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        if(auth()->user()->user_type == "administrator"){
            return view('home'); // Redirige a la vista 'home' para administradores
        }
        if(auth()->user()->user_type == "user"){
            return view('welcome'); // Redirige a la vista 'welcome' para usuarios regulares
        }
    }
}
