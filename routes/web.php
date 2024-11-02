<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::all();

    return view('index', compact("products"));
})->name("home");

Route::get('/products', [ProductController::class, 'index'])->name("products");
Route::get("/products/{id}", [ProductController::class, "show"])->name("product");
Route::get("/about-us", function () {
    return view("about");
})->name("about_us");

Route::get("/contact-us", function () {
    return view("contact");
})->name("contact_us");
Route::post('contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post("/cart/{id}", [CartController::class, "store"])->name("cart.add")->middleware("auth");
Route::get("cart", [CartController::class, "index"])->name("cart.index")->middleware("auth");
Route::patch("/cart/{id}", [CartController::class, "update"])->name("cart.update")->middleware("auth");


Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('order.place');
Route::get('/orders', [OrderController::class, 'viewAllOrders'])->name('orders.index');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
