
        
        @section('search')
@include('inc.search');
        @endsection
        
        <!-- Categories Product Start -->
        <div class="all-categories pb-100">
            <div class="container">
                <div class="row">
              
    
                   <!-- Sidebar Content Start -->
                    <div class="col-md-12">
                        <!-- Sidebar Right Top Content Start -->
                        
                        <!-- Sidebar Right Top Content Start -->
                        <!-- Best Seller Product Start -->
                        <div class="best-seller">
                            
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="tab-content categorie-list ">
                                        
                                        <!-- #list-view End -->
                                        <div id="grid-view" class="tab-pane fade in active mt-40">
                                            <div class="row"> 
                                                @foreach($products as $product)
                                                <div class="col-md-6 col-sm-6">
                                                    <!-- Single Blog Start -->
                                                    

                                                    <div class="single-blog">
                                                        <div class="blog-img">
                                                            <a href="{{route('single-product', $product->slug)}}"><img src="img/new-products/F8111-BRO NEW 2017.jpg" alt="blog-image"></a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="blog-content-upper">
                                                                <h6 class="blog-title"><a href="{{route('single-product', $product->slug)}}">{{$product->name}}</a></h6>
                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Blog End -->
                                                </div>
                                                @endforeach
                                             
                                               
                                            </div>
                                            <!-- Row End -->
                                            <div class="row mt-40 mb-70">
                                                <div class="col-sm-6">
                                                    <ul class="blog-pagination">
                                                        <li class="active"><a href="#">1</a></li>
                                                        <li><a href="#">2</a></li>
                                                        <li><a href="#">3</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                    <!-- End of .blog-pagination -->
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="pro-list-details text-right">
                                                        <p class="mr-15 mt-10">Showing 1 to 8 of 8 (1 Pages)</p>
                                                    </div>
                                                    <!-- Pro List Details End -->
                                                </div>
                                            </div>
                                            <!-- Row End -->
                                        </div>
                                        <!-- #Grid-view End -->
                                    </div>
                                    <!-- .Tab Content End -->
                                </div>
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Best Seller Product End -->
                    </div>
                    <!-- Sidebar Content End -->
                 
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Categories Product End -->