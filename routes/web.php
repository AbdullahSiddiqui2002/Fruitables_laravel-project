<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/shop-detail', function () {
    return view('shop-detail');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/add-product', function () {
    return view('add-product');
});
Route::get('/manage-product', function () {
    return view('manage-product');
});
Route::get('/add-product',  [CategoryController::class, "getCategories"]);
Route::post('/createproduct',  [ProductController::class, "addProduct"]);
Route::get('/',  [ProductController::class, "getProducts"]);
Route::get('/manage-product',  [ProductController::class, "getProductsForManage"]);
Route::get('/search', [ProductController::class,'searchProduct']);
Route::get('/product-detail/{id}',  [productController::class, "Product_Detail"]);
Route::post('/postcomment',  [ReviewController::class, "addcomment"]);
Route::post('/addtocart',  [CartController::class, "addtocart"]);
Route::get('/contact',  [CartController::class, "getcartforcontact"]);
Route::get('/cart', [ProductController::class, "getcartdetails"]);
Route::get('/deletecart/{id}',  [CartController::class, "deleteCart"]);
Route::get('/editcart/{cart_id}/{product_id}', [CartController::class,'editcart']);
Route::post('/updatecart/{id}', [CartController::class,'updatecart']);
Route::get('/deleteproduct/{id}',  [productController::class, "deleteProduct"]);
Route::get('/edit-product/{id}', [ProductController::class,'editProduct']);
Route::post('/updateproduct/{id}', [ProductController::class,'updateProduct']);
Route::post('/contactform', [ContactController::class,'ContactForm']);
Route::get('/checkout', [ProductController::class, "getorderdetails"]);
Route::post('/checkoutdetails', [CheckoutController::class, "placeorder"]);
