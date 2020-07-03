<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function addToCart(Product $productid)
    {
        // dd($productid);

       // add the product to cart
        $userID = auth()->user()->id;
        // $rowId = uniqid($productid->id);
        $rowId = $productid->id;

            \Cart::session($userID)->add(array(
                'id' => $rowId,
                'name' => $productid->name,
                'price' => $productid->price,
                'quantity' => 1,
                'attributes' => array(),
                'associatedModel' => $productid
            ));

        // return redirect('/cart');
        return redirect()->route('cart.index');
    }

    // Add Items in the cart
    public function index()
    {
        $cartItems = \Cart::session(auth()->user()->id)->getContent();
        return view('cart.index',compact('cartItems'));
    }

    // Deletes the item from the cart
    public function destroy($itemid)
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->remove($itemid);

        return back();
    }

    public function update($rowId)
    {
        $userID = auth()->user()->id;
        \Cart::session($userID)->update($rowId,[ 
                'quantity' => array(
                'relative' => false,
                'value' => request('quantity')
            )
        ]);

        return back();
    }
}
