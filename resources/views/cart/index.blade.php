@extends('layouts.front ')

@section('content')
    {{-- <div class="container"> 
        <p>Your Cart</p>  
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                    <tr>
                        <td scope="row">{{ $item->name }}</td>
                        <td> --}}
                            {{-- {{ $item->price }} --}}

                            {{-- gets the item price from the cart --}}
                           {{-- {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
                        </td>
                        <td>
                            <form action="{{ route('cart.update',$item->id ) }}">
                                <input name="quantity" type="number" value="{{ $item->quantity }}">

                                <input type="submit" value="save" class="btn btn-primary">
                            </form>
                        </td> 
                        <td>
                            <a href="{{ route('cart.destroy',$item->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody> 
            </table>
            <h3>
               <?php $userId = auth()->user()->id ?> 
               Total Price: $ {{Cart::session($userId)->getTotal()}}
            </h3>

            @if (Cart::isEmpty())
                <div class="alert alert-warning">
                    Cant proceed,Cart is empty
                </div>
            @else
                <a class = "btn btn-primary" href="{{ route('cart.checkout') }}" role="button">Proceed to checkout</a>
            @endif
            
    </div> --}}

    <!-- shopping-cart-area start -->
    <div class="cart-main-area pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="cart-heading">Cart</h1>
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>remove</th>
                                        <th>images</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $item)
                                        <tr>
                                            <td class="product-remove"><a href="{{ route('cart.destroy',$item->id) }}"><i class="pe-7s-close"></i></a></td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{ $item->name }} </a></td>
                                            <td class="product-price-cart"><span class="amount">${{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</span></td>
                                            <td class="product-quantity">
                                                <form action="{{ route('cart.update',$item->id ) }}">
                                                    <input name="quantity" type="number" value="{{ $item->quantity }}">
                    
                                                    <input class = "button" type="submit" value="save" class="btn btn-primary">
                                                </form>
                                                {{-- <input value="{{ $item->quantity }}" type="number"> --}}
                                            </td>
                                            <td class="product-subtotal">${{\Cart::session(auth()->user()->id)->getSubTotal()}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="coupon-all">
                                    <div class="coupon">   <!-- gets the coupon code from here -->
                                        <form action="{{ route('cart.coupon') }}" method="get">
                                            <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                            <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                        </form>
                                    </div>
                                    {{-- <div class="coupon2">
                                        <input class="button" name="update_cart" value="Update cart" type="submit">
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul>
                                        <?php $userId = auth()->id() ?>
                                        <li>Subtotal<span>{{\Cart::session($userId)->getSubTotal()}}</span></li>
                                        <li>Total<span>{{\Cart::session($userId)->getTotal()}}</span></li>
                                    </ul>
                                    <a href="{{ route('cart.checkout') }}">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
      
@endsection