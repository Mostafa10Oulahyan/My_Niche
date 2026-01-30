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

// Contact Form Submission
Route::post('/contact', function () {
    // Validate the form data
    request()->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'nullable|string|max:255',
        'message' => 'required|string',
    ]);

    // Here you would typically send an email or save to database
    // For now, we'll just return with a success message

    return redirect('/contact')->with('success', 'Thank you for your message! I will respond as soon as possible.');
});

Route::get("/prodwiyat", [ControllerProduct::class, "getProducts"]);
Route::get("/pro/{id}", [ControllerProduct::class, "showProd"])->name('pro.showProd');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// middleware of admin
Route::middleware(['adminuser'])->group(function () {
    Route::resource("products", ProductsResourceCrud::class);
    Route::get('/espaceadmin', [ProductsResourceCrud::class, 'espaceadmin']);
});
//middleware of user
Route::get('/espaceclient', [ProductsResourceCrud::class, 'espaceclient'])->middleware('useruser');
require __DIR__ . '/auth.php';
