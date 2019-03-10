<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\LinkMerchant;
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

        $variantsForProduct = $product->variants()->get();
        $merchantsForProduct = $product->merchants()->get();
        $linksForProduct = $product->links()->get();

 
        
        
    
   

    
    

        /* dd($linksForProduct, $merchantsForProduct); */
      

        return view('singleProduct')->with([
            'variantsForProduct' => $variantsForProduct,
            'merchantsForProduct' => $merchantsForProduct,
            'linksForProduct' => $linksForProduct,
            'product' => $product,
        ]);
    }
}


