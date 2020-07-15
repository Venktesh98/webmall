<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   dd($request->all());
          $request->validate([
            'shipping_fullname' => 'required',
            'shipping_state' => 'required',
            'shipping_city' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',
            'shipping_zipcode' => 'required',
            'payment_method' => 'required',
        ]);
    
        $order = new Order();

        $orderNumber = $order->order_number = uniqid();   # gets the unique order number

        // gets all the fields from the database
        $order->shipping_fullname = $request->shipping_fullname;
        $order->shipping_state = $request->shipping_state;
        $order->shipping_city = $request->shipping_city;
        $order->shipping_address = $request->shipping_address;
        $order->shipping_phone = $request->shipping_phone;
        $order->shipping_zipcode = $request->shipping_zipcode;

        if(!$request->has('billing_fullname')) {
            $order->billing_fullname = $request->input('shipping_fullname');
            $order->billing_state = $request->input('shipping_state');
            $order->billing_city = $request->input('shipping_city');
            $order->billing_address = $request->input('shipping_address');
            $order->billing_phone = $request->input('shipping_phone');
            $order->billing_zipcode = $request->input('shipping_zipcode');
        }else {
            $order->billing_fullname = $request->input('billing_fullname');
            $order->billing_state = $request->input('billing_state');
            $order->billing_city = $request->input('billing_city');
            $order->billing_address = $request->input('billing_address');
            $order->billing_phone = $request->input('billing_phone');
            $order->billing_zipcode = $request->input('billing_zipcode');
        }

        $order->grand_total = \Cart::session(auth()->id())->getTotal();   # gets the order total from cart
        $order->item_count = \Cart::session(auth()->id())->getContent()->count();  # counts the total items from cart

        $order->user_id = auth()->id();    # gets the user_id of specific user who ordered.
        $order->user_email = auth()->user()->email;   

        if(request('payment_method') == 'paypal')
        {
            $order->payment_method = 'paypal';
        }

        $order->save();    #saves the items in the db.
        // dd($order);
        // save cart items
        $cartItems = \Cart::session(auth()->id())->getContent();
        
        // gets the product id,price,quantity from cart
        foreach($cartItems as $item) {
           $order->items()->attach($item->id,['price'=>$item->price,'quantity'=>$item->quantity]);
        }

        // Payments Process
        // sends the mail to the customer when order placed
        if(request('payment_method') == 'cash_on_delivery')
        {
            $email = auth()->user()->email;
            $messageData = [
                'email'=>$email,
                'name'=>$request->input('shipping_fullname'),
                'orderNumber'=>$orderNumber,
            ];
            Mail::send('show',$messageData,function($message) use($email)
            {
                $message->to($email)->subject('Order Placed');
            });
        }

        if(request('payment_method') == 'paypal')
        {
            return redirect()->route('paypal.checkout',$order->id);
        }

        // empty cart
        \Cart::session(auth()->id())->clear();   # carts get empty after successful placed order

        return redirect()->route('home')->withMessage('Order has placed successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
