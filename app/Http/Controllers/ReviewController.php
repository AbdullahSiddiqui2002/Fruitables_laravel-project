<?php

namespace App\Http\Controllers;

use App\Models\ReviewModel;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function addcomment(Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required",
            "review" => "required",
        ]);

        $comment = new ReviewModel;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->review;
        $comment->save();

        return back()->withSuccess('Review added successfully.');
    }
}
