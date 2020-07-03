@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> --}}
    <h2>Products</h2>
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
</div>
@endsection
