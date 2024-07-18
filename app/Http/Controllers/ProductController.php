<?php

namespace App\Http\Controllers;

use App\Models\ReviewModel;
use App\Models\CartModel;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(Request $request){
        $request->validate([
            "product_name" => "required",
            "product_description" => "required",
            "product_price" => "required",
            "category_id" => "required",
            "product_image" => "required|image|mimes:jpeg,png,jpg,gif", // assuming image upload
        ]);

       
            $imageName = time() . '.' . $request->product_image->extension();
            $request->product_image->move(public_path('/img'), $imageName);
        

        // Create a new product instance
        $product = new ProductModel;
        $product->name = $request->product_name;
        $product->description = $request->product_description;
        $product->price = $request->product_price;
        $product->category = $request->category_id; // Assuming the column name is category_id
        $product->image = $imageName; // Assuming 'image' is the column name in the database
        $product->save();

        return back()->withSuccess('Product added successfully.');
    }

    public function getProducts(){
        $allproducts = ProductModel::orderBy('id', 'desc')->get();
        $cartdetail = CartModel::orderBy('id', 'desc')->get();
        $cartItemCount = count($cartdetail);
        return view("welcome",compact('allproducts','cartItemCount'));
    }
    public function getProductsForManage(){
        $allproducts = ProductModel::orderBy('id', 'desc')->get();
        $cartdetail = CartModel::orderBy('id', 'desc')->get();
        $cartItemCount = count($cartdetail);
        return view("manage-product",compact('allproducts','cartItemCount'));
    }

    public function searchProduct(Request $request){
        $search = $request->input('query');
        $allproductsforshop = ProductModel::where('name','like','%'. $search.'%')->orWhere('description','like','%'. $search .'%')->orWhere('price','like','%'. $search .'%')->orderBy('id', 'desc')->get();
        $cartdetail = CartModel::orderBy('id', 'desc')->get();
        $cartItemCount = count($cartdetail);
        return view("shop",compact('allproductsforshop','search','cartItemCount'));

    }

    public function Product_Detail($id){
        $product_detail = ProductModel::find($id);
        $allproductsfordetail = ProductModel::orderBy('id', 'desc')->get();
        $reviews = ReviewModel::orderBy('id', 'desc')->get();
        $cartdetail = CartModel::orderBy('id', 'desc')->get();
        $cartItemCount = count($cartdetail);
        return view("shop-detail",compact('product_detail','allproductsfordetail','reviews','cartItemCount'));
    }

    public function getcartdetails(){
        $allproducts = ProductModel::orderBy('id', 'desc')->get();
        $cartdetail = CartModel::orderBy('id', 'desc')->get();
        $cartItemCount = count($cartdetail);
        return view("cart",compact('allproducts','cartdetail','cartItemCount'));
    }

    
    public function deleteProduct($id){
        ProductModel::destroy($id);
        return back()->withSuccess("Product deleted successfully");
    }

    public function editProduct($id){
        $product = ProductModel::find($id);
        $categories = CategoryModel::get();
        $cartdetail = CartModel::orderBy('id', 'desc')->get();
        $cartItemCount = count($cartdetail);
        return view("edit-product",compact('product','categories','cartdetail','cartItemCount'));
    }

    public function updateProduct(Request $request, $id){
        $request->validate([
            "product_name" => "required",
            "product_description" => "required",
            "product_price" => "required",
            "category_id" => "required",
            "product_image" => "required|image|mimes:jpeg,png,jpg,gif", // assuming image upload
        ]);

       
            $imageName = time() . '.' . $request->product_image->extension();
            $request->product_image->move(public_path('/img'), $imageName);
        

        // Create a new product instance
        $product = ProductModel::find($id);
        $product->name = $request->product_name;
        $product->description = $request->product_description;
        $product->price = $request->product_price;
        $product->category = $request->category_id; // Assuming the column name is category_id
        $product->image = $imageName; // Assuming 'image' is the column name in the database
        $product->save();

        return back()->withSuccess('Product updated successfully.');
    }

    public function getorderdetails(){
        $allproducts = ProductModel::orderBy('id', 'desc')->get();
        $cartdetail = CartModel::orderBy('id', 'desc')->get();
        $cartItemCount = count($cartdetail);
        return view("checkout",compact('allproducts','cartdetail','cartItemCount'));
    }

}
