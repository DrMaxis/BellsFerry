<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    

    public function landing() {
        return view('pages.landing');
        
    }
}
