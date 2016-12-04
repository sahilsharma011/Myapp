<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function home()
    {
        $people = ['Vinit', 'Bodhwani'];
        return view('welcome', compact('people'));

    }

    public function about(){
        return 'About';
    }

}
