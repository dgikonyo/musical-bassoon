<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('api')->group(function () {
    //Route::resource('products', ProductController::class);
    Route::get('products', [ProductController::class, 'index']);
    Route::get('products/{product}', [ProductController::class, 'show']);
    Route::post('products', [ProductController::class, 'store']);
    Route::put('products/{product}', [ProductController::class, 'update']);
    Route::delete('products/{product}', [ProductController::class, 'destroy']);
});

//if we didn't have to write controllers from scratch

// Route::get('products', function () {
//     return Product::all();
// });

// Route::get('products/{id}', function ($id) {
//     return Product::find($id);
// });

// Route::post('products', function (Request $request) {
//     return Product::create($request->all);
// });

// Route::put('products/{id}', function (Request $request, $id) {
//     $product = Product::findOrFail($id);
//     $product->update($request->all());

//     return $product;
// });

// Route::delete('products/{id}', function(Request $request, $id){
//     Product::find($id)->delete();

//     return 204;
// });
