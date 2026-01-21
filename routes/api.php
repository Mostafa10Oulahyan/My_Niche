<?php 
use App\Http\Controllers\Api\CallProductApiController;
use Illuminate\Support\Facades\Route;

Route::apiResource("products", CallProductApiController::class);
/*
here not neccasary to do this just for learning purposes we can use it just in url like api/products
Route::get('products', [CallProductApiController::class, 'index']); // or just api/products  
Route::post('products', [CallProductApiController::class, 'store']);
Route::get('products/{produit}', [CallProductApiController::class, 'show']);
Route::put('products/{produit}', [CallProductApiController::class, 'update']);
Route::patch('products/{produit}', [CallProductApiController::class, 'update']);
Route::delete('products/{produit}', [CallProductApiController::class, 'destroy']);
*/

Route::get('/filtrer',[CallProductApiController::class, 'filtrer']);