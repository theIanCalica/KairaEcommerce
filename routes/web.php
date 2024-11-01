<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
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

Route::post("/cart", [CartController::class, "store"])->name("cart.add");
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
