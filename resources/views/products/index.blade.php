@extends('layouts.front')

@section('content')
<div class="container">
    <h2>{{ $categoryName ?? '' }} Products</h2>
    <br>
    <div class="custom-row-2">
        @foreach ($products as $product)
            @include('products.single_product')
        @endforeach
    </div>
</div>
@endsection