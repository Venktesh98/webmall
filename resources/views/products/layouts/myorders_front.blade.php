<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Electronics - eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <!-- all css here -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/assets/css/icofont.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="/assets/css/bundle.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <header>
        <div class="header-top-wrapper-2 border-bottom-2">
            <div class="header-info-wrapper pl-200 pr-200">
                <div class="header-contact-info">
                    <ul>
                        <li><i class="pe-7s-call"></i> +011 2231 4545</li>
                        <li><i class="pe-7s-mail"></i> <a href="#">company@domail.info</a></li>
                    </ul>
                </div>
                <div class="electronics-login-register ">
                    <ul>
                        <li><a href="#"><i class="pe-7s-users"></i>My Account</a></li>
                        <li><a href="{{ route('products.myorders') }}"><i class="pe-7s-news-paper"></i>My Orders</a></li>
                        {{-- <li><a href="wishlist.html"><i class="pe-7s-like"></i>Wishlist</a></li> --}}
                        <li><a href="{{ route('shops.create') }}"><i class="pe-7s-shopbag"></i>Sell on Webmall</a></li> 
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom pt-40 pb-30 clearfix">
            <div class="header-bottom-wrapper pr-200 pl-200">
                <div class="logo-3">
                    <a href="{{route('home')}}">        <!-- Redirects to the home page -->
                        <img src="/assets/img/logo/logo-3.png" alt="">
                    </a>
                </div>
                <div class="categories-search-wrapper">
                    <div class="all-categories">
                        {{-- <div class="select-wrapper">
                            <select class="select">
                                <option value="">All Categories</option>
                                <option value="">Smartphones </option>
                                <option value="">Computers</option>
                                <option value="">Laptops </option>
                                <option value="">Camerea </option>
                                <option value="">Watches</option>
                                <option value="">Lights </option>
                                <option value="">Air conditioner</option>
                            </select>
                        </div> --}}
                    </div>
                    <div class="categories-wrapper">
                        <form action="{{route('products.search')}}" method="GET">
                            <input name="query" placeholder="Enter Your key word" type="text">
                            <button type="submit"> Search </button>
                        </form>
                    </div>
                </div>
                <div class="trace-cart-wrapper">
                    <div class="trace same-style">
                        <div class="same-style-icon">
                            <a href="#"><i class="pe-7s-plane"></i></a>
                        </div>
                        <div class="same-style-text">
                            <a href="#">Product <br>trace</a>
                        </div>
                    </div>
                    <div class="categories-cart same-style">
                        <div class="same-style-icon">
                            <a href="#"><i class="pe-7s-cart"></i></a>
                        </div>
                        <div class="same-style-text">
                            <a href="{{route('cart.index')}}">My Cart <br>
                                <?php $userId = auth()->id() ?> 
                                    @auth        <!-- only authenticated user can see the cart -->
                                    {{ Cart::session($userId)->getContent()->count() }}
                                    @else          <!-- user not logged in then see 0 in badge -->
                                    0
                                    @endauth
                                    Item
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="#">HOME</a>
    
                                </li>
                                <li><a href="#">Account</a>
                
                                </li>
                                
                                <li><a href="#">BLOG</a>
                        
                                </li>
                                <li><a href="contact.html"> Contact  </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    {{-- Display success message --}}
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert" align="center">
            {{session('message')}}
        </div>
    @endif

    {{-- Display error message --}}
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert" align="center">
            {{session('error')}}
        </div>
    @endif

    @yield('content')        <!-- yielding the content over here from home.blade.php -->

   
    <!-- modal -->
    <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-compare-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#">
                        <div class="table-content compare-style table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            <a href="#">Remove <span>x</span></a>
                                            <img src="assets/img/cart/4.jpg" alt="">
                                            <p>Blush Sequin Top </p>
                                            <span>$75.99</span>
                                            <a class="compare-btn" href="#">Add to cart</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Description </h4></td>
                                        <td class="compare-dec compare-common">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Sku </h4></td>
                                        <td class="product-none compare-common">
                                            <p>-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Availability  </h4></td>
                                        <td class="compare-stock compare-common">
                                            <p>In stock</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Weight   </h4></td>
                                        <td class="compare-none compare-common">
                                            <p>-</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>Dimensions   </h4></td>
                                        <td class="compare-stock compare-common">
                                            <p>N/A</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>brand   </h4></td>
                                        <td class="compare-brand compare-common">
                                            <p>HasTech</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>color   </h4></td>
                                        <td class="compare-color compare-common">
                                            <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title">
                                            <h4>size    </h4></td>
                                        <td class="compare-size compare-common">
                                            <p>XS, S, M, L, XL, XXL </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="compare-title"></td>
                                        <td class="compare-price compare-common">
                                            <p>$75.99 </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-quickview-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="qwick-view-left">
                        <div class="quick-view-learg-img">
                            <div class="quick-view-tab-content tab-content">
                                <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                    <img src="assets/img/quick-view/l1.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal2" role="tabpanel">
                                    <img src="assets/img/quick-view/l2.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal3" role="tabpanel">
                                    <img src="assets/img/quick-view/l3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="quick-view-list nav" role="tablist">
                            <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                <img src="assets/img/quick-view/s1.jpg" alt="">
                            </a>
                            <a href="#modal2" data-toggle="tab" role="tab">
                                <img src="assets/img/quick-view/s2.jpg" alt="">
                            </a>
                            <a href="#modal3" data-toggle="tab" role="tab">
                                <img src="assets/img/quick-view/s3.jpg" alt="">
                            </a>
                        </div> --}}
                    </div>
                    <div class="qwick-view-right">
                        <div class="qwick-view-content">
                            <h3>Handcrafted Supper Mug</h3>
                            <div class="price">
                                <span class="new">$90.00</span>
                                <span class="old">$120.00  </span>
                            </div>
                            <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">900</option>
                                        <option value="">700</option>
                                    </select>
                                </div>
                                <div class="select-option-part">
                                    <label>Color*</label>
                                    <select class="select">
                                        <option value="">- Please Select -</option>
                                        <option value="">orange</option>
                                        <option value="">pink</option>
                                        <option value="">yellow</option>
                                    </select>
                                </div>
                            </div>
                            <div class="quickview-plus-minus">
                                <div class="cart-plus-minus">
                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                </div>
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="#">add to cart</a>
                                </div>
                                <div class="quickview-btn-wishlist">
                                    <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- all js here -->
    <script src="/assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/ajax-mail.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/main.js"></script>

    @livewireScripts
</body>

</html>