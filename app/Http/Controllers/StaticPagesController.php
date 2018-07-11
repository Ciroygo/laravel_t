<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    public function home(){
        return view('statics_pages/home');
    }

    public function help(){
        return view('statics_pages/help');
    }

    public function about(){
        return view('statics_pages/about');
    }
}
