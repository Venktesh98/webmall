@extends('layouts.front')
@section('content')
        <div class="product-details ptb-100 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-7 col-12">
                        <div class="product-details-img-content">
                            <div class="product-details-tab mr-70">
                                <div class="product-details-large tab-content">
                                    <div class="tab-pane active show fade" id="pro-details1" role="tabpanel">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="{{asset('storage/'.$product->cover_img)}}">
                                                <img src="{{asset('storage/'.$product->cover_img)}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    {{-- <div class="tab-pane fade" id="pro-details2" role="tabpanel">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="/assets/img/product-details/bl2.jpg">
                                                <img src="/assets/img/product-details/l2.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro-details3" role="tabpanel">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="assets/img/product-details/bl3.jpg">
                                                <img src="assets/img/product-details/l3.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro-details4" role="tabpanel">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="assets/img/product-details/bl4.jpg">
                                                <img src="assets/img/product-details/l4.jpg" alt="">
                                            </a>
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <div class="product-details-small nav mt-12" role=tablist>
                                    <a class="active mr-12" href="#pro-details1" data-toggle="tab" role="tab" aria-selected="true">
                                        <img src="assets/img/product-details/s1.jpg" alt="">
                                    </a>
                                    <a class="mr-12" href="#pro-details2" data-toggle="tab" role="tab" aria-selected="true">
                                        <img src="assets/img/product-details/s2.jpg" alt="">
                                    </a>
                                    <a class="mr-12" href="#pro-details3" data-toggle="tab" role="tab" aria-selected="true">
                                        <img src="assets/img/product-details/s3.jpg" alt="">
                                    </a>
                                    <a class="mr-12" href="#pro-details4" data-toggle="tab" role="tab" aria-selected="true">
                                        <img src="assets/img/product-details/s4.jpg" alt="">
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 col-12">
                        <div class="product-details-content">
                            <h3>{{$product->name}}</h3>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star red-star"></i>
                                    <i class="pe-7s-star red-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div>
                            </div>
                            <div class="details-price">
                                <span>${{$product->price}}</span>
                            </div>
                            <p>{{$product->description}}</p>
                            <div class="quickview-plus-minus">
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="{{ route('cart.add',$product->id) }}">add to cart</a>
                                </div>
                            </div>
                            <div class="product-details-cati-tag mt-35">
                                <ul>
                                    <li class="categories-title">Categories :</li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">electronics</a></li>
                                    <li><a href="#">toys</a></li>
                                    <li><a href="#">food</a></li>
                                    <li><a href="#">jewellery</a></li>
                                </ul>
                            </div>
                            <div class="product-details-cati-tag mtb-10">
                                <ul>
                                    <li class="categories-title">Tags :</li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">electronics</a></li>
                                    <li><a href="#">toys</a></li>
                                    <li><a href="#">food</a></li>
                                    <li><a href="#">jewellery</a></li>
                                </ul>
                            </div>
                            <div class="product-share">
                                <ul>
                                    <li class="categories-title">Share :</li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icofont icofont-social-flikr"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- @include('products.related_products')
        @include('products.reviews') --}}
@endsection

