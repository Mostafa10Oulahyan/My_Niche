<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return 'Hello, World this methods used only one time used for form contact, Like / Unlike,
        Verify email , Search ,Single API endpoint; ';
    }
}
