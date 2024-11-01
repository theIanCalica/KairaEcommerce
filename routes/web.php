<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/products', [ProductController::class, 'index'])->name("products");

Route::get("/about-us", function () {
    return view("about");
})->name("about_us");

Route::get("/contact-us", function () {
    return view("contact");
})->name("contact_us");
