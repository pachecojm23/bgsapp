<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller {
    
    public function showHome()
    {
        return view('home');
    }
    
    public function showHomeWorks(){
        return view('homeworks/homeworks')
    }
}
