<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * HomeController
 */
class HomeController extends Controller{

    public function __construct()
    {
        $this->middleware(['auth', 'twofactor' ,'verified']);
    }
    public function getHome(){
        #return the view resource/home.blade.php
        return view('home');
    }
}


