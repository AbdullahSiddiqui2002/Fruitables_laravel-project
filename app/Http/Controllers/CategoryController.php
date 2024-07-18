<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ReviewModel;
use App\Models\CartModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories(){
        $categories = CategoryModel::get();
        $cartdetail = CartModel::orderBy('id', 'desc')->get();
        $cartItemCount = count($cartdetail);
        return view("add-product",compact('categories','cartItemCount'));
    }
}
