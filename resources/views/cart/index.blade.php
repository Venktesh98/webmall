@extends('layouts.app')

@section('content')
    <div class="container">
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
                        <td>
                            {{-- {{ $item->price }} --}}

                           {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
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

            <a class = "btn btn-primary" href="{{ route('cart.checkout') }}" role="button">Proceed to checkout</a>
    </div>
      
@endsection