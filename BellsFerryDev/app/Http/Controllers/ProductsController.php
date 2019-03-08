<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {

       


        $categories = Category::all();
       
        if (request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            })->get();
            


        } else {
            $products = Product::inRandomOrder()->take(8)->get();
           

        }
        return view('products')->with([
            
            'products' => $products,
            'categories' => $categories,
           

        ]);
    }
    
    public function show($slug) {

        $product = Product::where('slug', $slug)->firstOrFail();

        return view('singleProduct')->with([
            
            'product' => $product,
        ]);
    }
}


