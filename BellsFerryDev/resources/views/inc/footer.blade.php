{{-- Footer Start --}}
<footer>
    {{-- Footer Middle Start --}}
    <div class="footer-middle">
        <div class="container">
            <div class="container-footer">
                <div class="row">
                    {{-- Single Footer Start --}}
                    <div class="single-footer col-md-11 col-sm-11 text-center">
                        <div class="footer-logo">
                            <a href="#"><img class="img" src="{{asset('assets/imgs/logos/logo.png')}}" alt="logo-img"></a>
                        </div>
                        <div class="footer-content">
                            <p>About JJ International, Inc</p>
                            <h5 class="contact-info mtb-10">contact info:</h5>
                            <ul class="footer-list first-content">
                                <li><i class="pe-7s-map-marker"></i>Address will be here</li>
                                <li><i class="pe-7s-mail"></i>your-email@example.com</li>
                                <li><i class="pe-7s-call"></i>+00 123 45678</li>
                            </ul>
                        </div>
                    </div>

                </div>
                {{-- Row End --}}
            </div>
            {{-- Container Footer End --}}
        </div>
        {{-- Container End --}}
    </div>
    {{-- Footer Middle End --}} {{-- Footer Bottom Start --}}
    <div class="footer-bottom">
        <div class="container">
            <div class="container-footer ptb-30">
                <div class="row">
                    <div class="col-sm-7">
                        <p class="text-left copyright-text">Copyright © <a target="_blank" href="#">JJ
                                    International</a> All Rights Reserved.</p>
                    </div>
                    <div class="col-sm-5">
                        <div class="socila-footer">
                                {{menu('foot-social', 'partials.menus.foot-social')}}
                            
                        </div>
                    </div>
                </div>
                {{-- Row End --}}
            </div>
            {{-- Container Footer End --}}
        </div>
        {{-- Container End --}}
    </div>
    {{-- Footer Bottom End --}}
</footer>
{{-- Footer End --}} {{-- Quick View Content Start --}}
<div class="modal modal-box fade" id="myModal" role="dialog">
    {{-- Modal Dialog Box Start --}}
    <div class="modal-dialog max-width">
        {{-- Modal content Start --}}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            {{-- Modal Body Start --}}
            <div class="modal-body">
                <div class="quiick-view-details">
                    {{-- Product Thumbnail Start --}}
                    <div class="main-product-thumbnail">
                        <div class="container">
                            <div class="row">
                                {{-- Main Thumbnail Image Start --}}
                                <div class="col-md-5 col-sm-6">
                                    {{-- Thumbnail Large Image start --}}
                                    <div class="tab-content">
                                        <div id="thumb1" class="tab-pane fade in active">
                                            <img src="img/new-products/1_1.jpg" alt="product-thumbnail" />
                                        </div>
                                        <div id="thumb2" class="tab-pane fade">
                                            <img src="img/new-products/1_2.jpg" alt="product-thumbnail" />
                                        </div>
                                        <div id="thumb3" class="tab-pane fade">
                                            <img src="img/new-products/2_1.jpg" alt="product-thumbnail" />
                                        </div>
                                        <div id="thumb4" class="tab-pane fade">
                                            <img src="img/new-products/2_2.jpg" alt="product-thumbnail" />
                                        </div>
                                        <div id="thumb5" class="tab-pane fade">
                                            <img src="img/new-products/3_1.jpg" alt="product-thumbnail" />
                                        </div>
                                        <div id="thumb6" class="tab-pane fade">
                                            <img src="img/new-products/3_2.jpg" alt="product-thumbnail" />
                                        </div>
                                    </div>
                                    {{-- Thumbnail Large Image End --}} {{-- Thumbnail Image End --}}
                                    <div class="product-thumbnail mt-15 mb-20">
                                        <div class="thumb-menu owl-carousel">
                                            <div class="active">
                                                <a data-toggle="tab" href="#thumb1"> <img src="img/new-products/1_1.jpg"
                                                                alt="product-thumbnail"></a>
                                            </div>
                                            <div>
                                                <a data-toggle="tab" href="#thumb2"> <img src="img/new-products/1_2.jpg"
                                                                alt="product-thumbnail"></a>
                                            </div>
                                            <div>
                                                <a data-toggle="tab" href="#thumb3"> <img src="img/new-products/2_1.jpg"
                                                                alt="product-thumbnail"></a>
                                            </div>
                                            <div>
                                                <a data-toggle="tab" href="#thumb4"> <img src="img/new-products/2_2.jpg"
                                                                alt="product-thumbnail"></a>
                                            </div>
                                            <div>
                                                <a data-toggle="tab" href="#thumb5"> <img src="img/new-products/3_1.jpg"
                                                                alt="product-thumbnail"></a>
                                            </div>
                                            <div>
                                                <a data-toggle="tab" href="#thumb6"> <img src="img/new-products/3_2.jpg"
                                                                alt="product-thumbnail"></a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Thumbnail image end --}}
                                </div>
                                {{-- Main Thumbnail Image End --}} {{-- Thumbnail Description Start --}}
                                <div class="col-md-7 col-sm-6">
                                    <div class="thubnail-desc fix">
                                        <h2 class="product-header">Sheepskin Pillow2</h2>
                                        {{-- Product Rating Start --}}
                                        <div class="rating-summary fix mtb-25">
                                            <div class="rating f-left mr-10">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="rating-feedback f-left">
                                                <a href="#">0 reviews</a> /
                                                <a href="#">Write a review</a>
                                            </div>
                                        </div>
                                        {{-- Product Rating End --}} {{-- Product Price Start --}}
                                        <div class="pro-price mb-15">
                                            <ul class="pro-price-list">
                                                <li class="price">$241.99</li>
                                                <li class="tax">Ex Tax: $199.99</li>
                                            </ul>
                                        </div>
                                        {{-- Product Price End --}} {{-- Product Price Description Start --}}
                                        <div class="product-price-desc mb-10">
                                            <ul class="pro-desc-list">
                                                <li>Product Code: <span>SAMI</span></li>
                                                <li>Reward Points: <span>1000</span></li>
                                                <li>Availability: <span>in Stock</span></li>
                                            </ul>
                                        </div>
                                        {{-- Product Price Description End --}} {{-- Product Box Quantity Start --}}
                                        <div class="box-quantity mb-30">
                                            <div class="quantity-item">
                                                <label>Qty: </label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="0">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Product Box Quantity End --}} {{-- Product Button Actions Start --}}
                                        <div class="product-button-actions">
                                            <button class="add-to-cart">add to cart</button>
                                            <button data-toggle="tooltip" title="Add to Wishlist" class="same-btn mr-15"><i
                                                            class="pe-7s-like"></i></button>
                                            <button data-toggle="tooltip" title="Compare this Product" class="same-btn"><i
                                                            class="pe-7s-repeat"></i></button>
                                        </div>
                                        {{-- Product Button Actions End --}}
                                    </div>
                                </div>
                                {{-- Thumbnail Description End --}}
                            </div>
                            {{-- Row End --}}
                        </div>
                        {{-- Container End --}}
                    </div>
                    {{-- Product Thumbnail End --}}
                </div>
                {{-- Quick View Details End --}}
            </div>
            {{-- Modal Body End --}}
        </div>
        {{-- Modal Content End --}}
    </div>
    {{-- Modal Dialog Box End --}}
</div>
{{-- Quick View Content End --}}