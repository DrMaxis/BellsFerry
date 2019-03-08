<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    


    public function index() {

        $productsOnSale = Product::where('featured', '=', 1)->get();
        $newProducts = Product::where('new', '=', 1)->get();
        return view('homepage')->with([
            'newProducts' => $newProducts,
            'productsOnSale' => $productsOnSale,
        ]);

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
