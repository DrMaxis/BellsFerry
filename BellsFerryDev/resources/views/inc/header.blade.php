{{-- Begin Header--}}
<header>
        <div class="container-fluid header-top-area">
            <div class="row">
                {{-- Logo --}}
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-5 full-col pl-0">
                    <div class="logo">
                        <a href="index.html"><img src="img/logo/logo.png" alt="brand-image"></a>
                    </div>
                </div>
                {{-- Logo End --}} 
                {{-- Mobile Menu Start --}}
                <div class="mobile-menu visible-sm visible-xs">
                    <nav style="display: block;">
                        <ul class="primary-menu-list text-center">
                            <li><a href="{{route('homepage')}}">home</a></li>
                            <li><a href="{{route('all-products')}}">Products</a></li>
                            <li class="static-menu"><a href={{-- {{ route('products', ['category' => $category->slug])}} --}}>Indoor</a></li>
                            <li class="static-menu"><a href={{-- {{ route('products', ['category' => $category->slug])}} --}}>Outdoor</a></li>
                            <li><a href="{{route('about-us')}}">about us</a></li>
                            <li><a href="{{route('contact-us')}}">contact</a></li>
    
                        </ul>
                    </nav>
                </div>
                {{-- Mobile Menu End --}}
            </div>
        </div>
    </header>

    
    <div class="primary-menu">
            <nav>
                <ul class="primary-menu-list text-center">
                        <li><a href="{{route('homepage')}}">home</a></li>
                        <li><a href="{{route('all-products')}}">Products</a></li>
                        <li class="static-menu"><a href={{-- {{ route('products', ['category' => $category->slug])}} --}}>Indoor</a></li>
                        <li class="static-menu"><a href={{-- {{ route('products', ['category' => $category->slug])}} --}}>Outdoor</a></li>
                        <li><a href="{{route('about-us')}}">about us</a></li>
                        <li><a href="{{route('contact-us')}}">contact</a></li>

                </ul>
            </nav>
        </div>

       {{-- Header Area End  --}}