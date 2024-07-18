<?php

namespace App\Listeners;

use App\Models\CartModel;
use App\Models\ProductModel;
use Illuminate\Support\Facades\DB;

class DeleteProductListener
{
    public function handle(ProductModel $products)
    {
        // Delete associated rows in the cart table
        DB::table('cart')->where('product_id', $products->id)->delete();

        // Update count of cart items
        $count = CartModel::count();
        session(['cartItemCount' => $count]);
    }
}
