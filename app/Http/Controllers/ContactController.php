<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function ContactForm(Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required",
            "message" => "required",
        ]);
        
        // Create a new product instance
        $product = new ContactModel;
        $product->name = $request->name;
        $product->email = $request->email;
        $product->message = $request->message;
        $product->save();

        return back()->withSuccess('Message sent successfully.');
    }
}
