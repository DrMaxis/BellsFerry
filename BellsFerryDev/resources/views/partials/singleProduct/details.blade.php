<!-- Product Thumbnail Description Start -->
<div class="thumnail-desc pb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="main-thumb-desc text-center list-inline">
                        <li class="active"><a data-toggle="tab" href="#detail">Details</a></li>
                        <li><a data-toggle="tab" href="#merchants">Where to Find</a></li>
                    </ul>

                    <div class="tab-content thumb-content">

                        <div id="merchants" class="tab-pane fade in pb-40">
                            <h3>Where To Get</h3>
                            <div class="table-responsive">
                                <table class="pmtable">
                                    <tbody>
                                        <tr>
                                            <th>Merchant</th>
                                            <th>Availability </th>
                                            <th>Shipping</th>
                                            <th>Price</th>
                                        </tr>
                                        <tr>
                                        <td data-th="Product Merchant">
                                            <a href="https://amazon.com" target="_blank"> 
                                                     <img class="merchant-logo" src="http://www.pngall.com/wp-content/uploads/2016/03/Amazon-Logo-Transparent-PNG.png">
                                            </a>
                                        </td>
                                            <td data-th="Product Availability">In Stock</td>
                                            <td data-th="Product Shipping">Free</td>
                                            <td data-th="Product Price">$169.99</td>
                                        </tr>
                                        <tr>
                                        <td data-th="Product Merchant">
                                            <a href="https://wayfair.com" target="_blank"> 
                                                    <img class="merchant-logo" src="http://pluspng.com/img-png/wayfair-logo-vector-png--400.png">
                                            </a>
                                        
                                        </td>
                                            <td data-th="Product Availability">Low Stock</td>
                                            <td data-th="Product Shipping">Click the logo for details</td>
                                            <td data-th="Product Price">$129.99</td>
                                        </tr>
                                        <tr>
                                            <td data-th="Product Merchant">
                                                <a href="https://qvc.com" target="_blank">
                                                    <img class="merchant-logo" src="https://qvc.scene7.com/is/image/QVC/qvc-logo-rebrand?fmt=png-alpha">
                                                </a>
                                            </td>
                                            <td class="msoldout" data-th="Product Availability">Sold Out </td>
                                            <td class="mfreeshipping" data-th="Product Shipping">Free</td>
                                            <td class="mprice" data-th="Product Price">$139.99 <span class="mpromo">with
                                                    Promo: JJSPRING </span> </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div id="detail" class="tab-pane fade in active  pb-40">
                            <h3>information</h3>
                            <div class="table-responsive">
                                <table class="pdtable">
                                    <tbody>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Product Model</th>
                                            <th>Product Desc.</th>
                                            <th>Product Dimensions</th>
                                            <th>Product Weight</th>
                                        </tr>
                                        @if(count($variantsForProduct) > 0 ) 


                                        @foreach($variantsForProduct as $variant)
                                        
                                        <tr>
                                                <td data-th="Product Name">{{$variant->name}}</td>
                                                <td data-th="Product Model">{{$variant->model}}</td>
                                                <td data-th="Product Desc.">{{$variant->model}}</td>
                                                <td data-th="Product Dimensions">{{$variant->box_length}}L x {{$variant->box_width}}W x {{$variant->box_height}}H </td>
                                                <td data-th="Product Weight">{{$variant->shipping_weight}}</td>
                                            </tr>

                                            <tr>
                                                    <td data-th="Product Name">{{$product->name}}</td>
                                                    <td data-th="Product Model">{{$product->model}}</td>
                                                    <td data-th="Product Desc.">{{$product->model}}</td>
                                                    <td data-th="Product Dimensions">{{$product->box_length}}L x {{$product->box_width}}W x {{$product->box_height}}H </td>
                                                    <td data-th="Product Weight">{{$product->shipping_weight}}</td>
                                                </tr>
                                            @endforeach
                                            @else
                                        
                                        <tr>
                                            <td data-th="Product Model">{{$product->model}}</td>
                                            <td data-th="Product Desc.">{{$product->model}}</td>
                                            <td data-th="Product Dimensions">{{$product->box_length}}L x {{$product->box_width}}W x {{$product->box_height}}H </td>
                                            <td data-th="Product Weight">{{$product->shipping_weight}}</td>
                                        </tr>
                                     @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- Product Thumbnail Tab Content Start -->




                    <!-- Product Thumbnail Tab Content End -->
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Product Thumbnail Description End -->