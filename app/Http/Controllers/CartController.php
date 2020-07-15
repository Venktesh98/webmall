<?php

namespace App\Http\Controllers;

use Cart;
use App\Coupon;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Add Items in the cart
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
    
    // Shows the Items in the cart
    public function index()
    {
        $cartItems = \Cart::session(auth()->user()->id)->getContent();
        return view('cart.index',compact('cartItems'));
    }
    
    // Updates the cart
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

    // Deletes the item from the cart
    public function destroy($itemid)
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->remove($itemid);

        return back();
    }

    // Cart checkout
    public function checkout()
    {
        return view('cart.checkout');
    }

    public function applyCoupon()
    {
        $couponCode = request('coupon_code');

        // gets from db.
        $couponData = Coupon::where('code',$couponCode)->first();

        if(!$couponData){
            return back()->withMessage('Sorry!,coupon does not exists');
        }
        // coupon logic
        if($couponCode)
        {
            $condition = new \Darryldecode\Cart\CartCondition(array(
                'name' => $couponData->name,
                'type' => $couponData->type,
                'target' => 'total', // this condition will be applied to cart's total when getTotal() is called.
                'value' => $couponData->value,
            ));
        }        

        $userId = auth()->id();
        Cart::session($userId)->condition($condition); // for a speicifc user's cart

        return back()->withMessage('Coupon Applied');
    }
}
