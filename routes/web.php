<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerProduct;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\ProductsResourceCrud;
// Home Page
Route::get('/', function () {
    return view('Home');
});
Route::get("/hello", HelloWorldController::class);


// Products/Shop Page
// Route::get('/products', function () {
//     return view('Products');
// });
// Route::get(
//     "/products",
//     [ControllerProduct::class, 'index']
// );

// About Us Page
Route::get('/about', function () {
    return view('About');
});

// Contact Page
Route::get('/contact', function () {
    return view('Contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// visiters
Route::get('/visiteurs/products', [ControllerProduct::class, 'getProductsVisiteurs'])->name('visiteurs.products');
// middleware of admin
Route::middleware(['adminuser'])->group(function () {
    Route::resource('products', ProductsResourceCrud::class)->names('web.products')->except(['show']); // because this option for client
    // do in route web.products.method or in url product/create | products  etc ...
    Route::get('/espaceadmin', [ProductsResourceCrud::class, 'espaceadmin']);
});

// Public/Shared Product Details Route
Route::get('/products/{product}', [ProductsResourceCrud::class, 'show'])->name('web.products.show');
//middleware of user
// Email Routes
use App\Http\Controllers\EmailController;
Route::middleware('useruser')->group(function () {
    Route::get('/email', [EmailController::class, 'email'])->name('email.form');
    Route::post('/send/email', [EmailController::class, 'sendEmail'])->name('send.email');
    Route::get('/espaceclient', [ProductsResourceCrud::class, 'espaceclient']);
});

require __DIR__ . '/auth.php';
