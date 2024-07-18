<?php

namespace App\Http\Controllers;

use App\Models\CheckoutModel;
use App\Models\CartModel;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function placeorder(Request $request){
        $request->validate([
            "firstname" => "required",
            "lastname" => "required",
            "address" => "required",
            "city" => "required",
            "country" => "required",
            "zipcode" => "required",
            "phone" => "required",
            "email" => "required",
        ]);
        
        // Create a new product instance
        $product = new CheckoutModel;
        $product->firstname = $request->firstname;
        $product->lastname = $request->lastname;
        $product->address = $request->address;
        $product->city = $request->city;
        $product->country = $request->country;
        $product->zipcode = $request->zipcode;
        $product->phone = $request->phone;
        $product->email = $request->email;
        $product->notes = $request->notes;
        $product->cartdetails = $request->cartdetails;
        $product->save();

        CartModel::truncate();

        return back()->withSuccess('Your order has been placed.');
    }
}
