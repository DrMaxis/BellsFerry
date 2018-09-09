const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */



   /**
    * 
    *  JAVASCRIPT
    * 
        @FACES 

        Bootstrap
        jQuery
        Modernizer
        Main 
        Counter 
        Carasol  
    * 
    */

   mix.js('resources/js/bootstrap.min.js', 'public/js');
   mix.js('resources/js/jquery.min.js', 'public/js');
   mix.js('resources/js/modernizer262.js', 'public/js');
   mix.js('resources/js/jj-main.js', 'public/js');
   mix.js('resources/js/counter.js', 'public/js');
   mix.js('resources/js/carousel.js', 'public/js');
   



    /** 
     * 
     *  CSS
     * 
     *   @FACES
     * 
     *   Bootstrap
     *   Carasol
     *   Animations
     *   Main
     */

    mix.sass('resources/sass/bootstrap.scss', 'public/css');
    mix.sass('resources/sass/carousel.scss', 'public/css');
    mix.sass('resources/sass/animations.scss', 'public/css');
    mix.sass('resources/sass/jj-main.scss', 'public/css');
    

     


   
