<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/products', [ProductController::class, 'index'])->name("products");
Route::get("/products/{id}", [ProductController::class, "show"])->name("product");
Route::get("/about-us", function () {
    return view("about");
})->name("about_us");

Route::get("/contact-us", function () {
    return view("contact");
})->name("contact_us");

Route::get("/login", function () {
    return view("login");
})->name("login");

Route::get("/register", function () {
    return view("register");
})->name("register");
