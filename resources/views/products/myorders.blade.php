@extends('.products.layouts.myorders_front')

@section('content')

<div class="container-fluid">
<h3>My Orders</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Order Number</th>
                <th>Product Name</th>
                <th>Product Quantity</th>
                <th>Payment Method</th>
                <th>Product Total</th>  
                <th>Order date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{$order->order_number}}</td>
                <td>
                    @foreach ($order->items as $pro)
                        {{$pro->name}}<br>
                    @endforeach
                </td>
                <td>
                    @foreach ($order->items as $pro)
                        {{$pro->pivot->quantity}}<br>    <!-- Access the pivot table -->
                    @endforeach
                </td>
                <td>{{$order->payment_method}}</td>
                <td>{{$order->grand_total}}</td>
                <td>{{$order->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection