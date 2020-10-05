<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function categories() {
        return view('categories');
    }

    public function links(){
        return view('links');
    }

    public function events() {
        return view('events');
    }

    public function contact() {
        return view('contact');
    }    
}
