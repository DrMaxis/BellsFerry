<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    


    public function index() {

        return view('homepage');

    }

    public function aboutUs() {

        return view('aboutus');

    }
    public function contactUs() {

        return view('contactus');

    }


    public function productInfo() {

        return view('productinfo');

    }


}
