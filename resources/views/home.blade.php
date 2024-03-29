@extends('layouts.front')
@section('content')

    {{-- <h2>Products</h2>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('default_product.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$product->name}}</h4>
                        <p class="card-text">{{$product->description}}</p>
                        <h3> $ {{ $product->price }}</h3>
                    </div>
                    <div class="card-body" align ='center'>
                        <a href="{{ route('cart.add',$product->id ) }}" class="card-link">Add to cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>  
</div>  --}}
<div class="pl-200 pr-200 overflow clearfix">
    <div class="categori-menu-slider-wrapper clearfix">
        <div class="categories-menu">
            <div class="category-heading">
                <h3> All Catrgories <i class="pe-7s-angle-down"></i></h3>
            </div>
            <div class="category-menu-list">
                <ul> 
                    @foreach ($categories as $category)     <!-- foreach start category -->
                        <li>
                            <a href="{{ route('products.index',['cid'=>$category->id]) }}">{{ $category->name }}<i class="pe-7s-angle-right"></i></a>
                            @php
                                $children = TCG\Voyager\Models\Category::where('parent_id',$category->id)->get();
                            @endphp

                            @if ($children->isNotEmpty())     <!-- check children is not empty -->
                                <div class="category-menu-dropdown">
                                    @foreach ($children as $child)   <!-- children foreach start -->
                                        <div class="category-dropdown-style category-common3">
                                            <a href="{{ route('products.index',['cid'=>$child->id]) }}">
                                                <h4 class="categories-subtitle"> {{ $child->name }}</h4>
                                            </a>
                                            @php
                                                $grandchild = TCG\Voyager\Models\Category::where('parent_id',$child->id)->get();
                                            @endphp
                                            <ul>
                                                @if ($grandchild->isNotEmpty())  <!-- check Grandchildren is not empty -->
                                                    @foreach ($grandchild as $gchild)   <!-- foreach Grandchildren start -->
                                                        <li><a href="{{ route('products.index',['cid'=>$gchild->id]) }}"> {{$gchild->name}}</a></li>
                                                    @endforeach                         <!-- endforeach Grandchildren  -->
                                                @endif
                                            </ul>
                                        </div>
                                    @endforeach                     <!-- children foreach end -->
                                </div>
                            @endif
                        </li>
                    @endforeach                               <!-- endforeach category -->
                </ul>
            </div>
        </div>
        <div class="menu-slider-wrapper">
            <div class="menu-style-3 menu-hover text-center">
                <nav>
                    <ul>
                        <li><a href="/">home</a>
                            
                        </li>
                        <li><a href="#">Details </a>
                            <ul class="single-dropdown">
                                <li><a href="about-us.html">about us</a></li>
                                <li><a href="menu-list.html">menu list</a></li>
                                <li><a href="login.html">login</a></li>
                                <li><a href="/register">register</a></li>
                                <li><a href="cart.html">cart page</a></li>
                                <li><a href="checkout.html">checkout</a></li>
                                <li><a href="wishlist.html">wishlist</a></li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </li>
                
                        <li><a href="contact.html">About us</a></li>
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="slider-area">
                <div class="slider-active owl-carousel">
                    <div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url(https://lh3.googleusercontent.com/proxy/2X262z6lwKz8rv-ljQtUmC9ccOq4_N0QbkY0vUErkz7ZqHaduezOpUhqkPwp4PptGPXVkwoXNkqJFaRulExQYNaxScjIaDtfgwpHyThmA8GDd_kIMj3JcoqyegKI_ZZ_jmoz)">
                        <div class="slider-animation slider-content-style-3 fadeinup-animated">
                            <h2 class="animated">Invention of <br>design platform</h2>
                            {{-- <h4 class="animated">Best Product With warranty </h4> --}}
                            {{-- <a class="electro-slider-btn btn-hover" href="product-details.html">buy now</a> --}}
                        </div>
                    </div>
                    <div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url(https://etimg.etb2bimg.com/photo/70545874.cms)">
                        <div class="slider-animation slider-content-style-3 fadeinup-animated">
                            <h2 class="animated">Invention of <br>design platform</h2>
                            {{-- <h4 class="animated">Best Product With warranty </h4> --}}
                            {{-- <a class="electro-slider-btn btn-hover" href="product-details.html">buy now</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="electronic-banner-area">
    <div class="custom-row-2">
        <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
            <div class="electronic-banner-wrapper">
                <img src="assets/img/banner/15.jpg" alt="">
                <div class="electro-banner-style electro-banner-position">
                    <h1>Live 4K! </h1>
                    <h2>up to 20% off</h2>
                    <h4>Amazon exclusives</h4>
                    <a href="product-details.html">Buy Now→</a>
                </div>
            </div>
        </div>
        <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
            <div class="electronic-banner-wrapper">
                <img src="assets/img/banner/16.jpg" alt="">
                <div class="electro-banner-style electro-banner-position2">
                    <h1>Xoxo ssl </h1>
                    <h2>up to 15% off</h2>
                    <h4>Amazon exclusives</h4>
                    <a href="product-details.html">Buy Now→</a>
                </div>
            </div>
        </div>
        <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
            <div class="electronic-banner-wrapper">
                <img src="assets/img/banner/17.jpg" alt="">
                <div class="electro-banner-style electro-banner-position3">
                    <h1>BY Laptop</h1>
                    <h2>Super Discount</h2>
                    <h4>Amazon exclusives</h4>
                    <a href="product-details.html">Buy Now→</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="electro-product-wrapper wrapper-padding pt-95 pb-45">
    <div class="container-fluid">
        <div class="section-title-4 text-center mb-40">
            <h2>Top Products</h2>
        </div>
        <div class="top-product-style">
            <div class="product-tab-list3 text-center mb-80 nav product-menu-mrg" role="tablist">
            </div>
            <div>
                <div id="electro1">
                    <div class="custom-row-2">
                        @foreach ($products as $product)
                            @include('products.single_product')
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
