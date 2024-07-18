<?php

namespace App\Http\Controllers;

use App\Models\ReviewModel;
use App\Models\CartModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addtocart(Request $request){
        $request->validate([
            "product_id" => "required",
            "quantity" => "required|numeric|min:1", 
        ]);
    
        $cart = new CartModel;
        $cart->product_id = $request->product_id;
        $cart->quantity = $request->quantity;
        $cart->save();
    
        return back()->withSuccess('Added to cart successfully.');
        
    }

    public function deleteCart($id){
        CartModel::destroy($id);
        return back()->withSuccess("Cart item deleted successfully");
    }

    public function editcart($cart_id, $product_id){
        $product_detail = ProductModel::find($product_id);
        $allproductsfordetail = ProductModel::orderBy('id', 'desc')->get();
        $reviews = ReviewModel::orderBy('id', 'desc')->get();
        $cartdetail = CartModel::orderBy('id', 'desc')->get();
        $cartItemCount = count($cartdetail);
        $editcart = CartModel::find($cart_id);
        return view("editcart",compact('product_detail','allproductsfordetail','reviews','cartItemCount','editcart'));
    }

    public function getcartforcontact(){
        $cartdetail = CartModel::orderBy('id', 'desc')->get();
        $cartItemCount = count($cartdetail);
        return view("contact",compact('cartItemCount'));
    }



    public function updatecart(Request $request, $id){
        $request->validate([
            "product_id" => "required",
            "quantity" => "required|numeric|min:1", 
        ]);
    
        $cart = CartModel::find($id);
        $cart->product_id = $request->product_id;
        $cart->quantity = $request->quantity;
        $cart->save();
    
        return back()->withSuccess('Cart updated successfully.');
        
    }
    
    
}
