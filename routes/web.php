<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('Home');
});

// Products/Shop Page
Route::get('/products', function () {
    return view('Products');
});

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
