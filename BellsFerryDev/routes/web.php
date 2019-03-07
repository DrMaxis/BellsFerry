<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here we will define the respected routes for semi-dynamic information
| 
| 
|
*/

// Home Page
Route::get('/', 'PageController@index')->name('homepage');

// About Us Page
Route::get('/about', 'PageController@aboutUs')->name('about-us');

// Contact Us Page
Route::get('/contact', 'PageController@contactUs')->name('contact-us');

// Product Information Page
Route::get('/productinformation', 'PageController@productInfo')->name('product-info');





/*
|--------------------------------------------------------------------------
| Product Routes
|--------------------------------------------------------------------------
|
| Here we will define the respected routes for all products and their actions
| 
| 
|
*/

// All Products
Route::get('/products', 'ProductsController@index')->name('all-products');

// Single Product
Route::get('/products/{product}', 'ProductsController@show')->name('single-product');

// Search for A Product
Route::get('/search', 'ProductsController@search')->name('search');




/*
|--------------------------------------------------------------------------
| Blog Routes
|--------------------------------------------------------------------------
|
| Here we will define the respected routes for all blog posts and their actions
| 
| 
|


// All Products
Route::get('/products', 'ProductsController@index')->name('all-products');

// Single Product
Route::get('/products/{product}', 'ProductsController@show')->name('single-product');

// Search for A Product
Route::get('/search', 'ProductsController@search')->name('search');
*/