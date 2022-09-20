<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\ApiAuthController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    Route::post('/logout',[App\Http\Controllers\Auth\ApiAuthController::class,'logout']);
    return $request->user();
});

Route::middleware('api')->group(function () {
    //Route::resource('products', ProductController::class);
    Route::get('products', [ProductController::class, 'index']);
    Route::get('products/{product}', [ProductController::class, 'show']);
    
    Route::post('products', [ProductController::class, 'store']);
    Route::put('products/{product}', [ProductController::class, 'update']);
    Route::delete('products/{product}', [ProductController::class, 'destroy']);
});

Route::group(['middleware'=>['cors','json.response']], function(){
    Route::post('/login',[App\Http\Controllers\Auth\ApiAuthController::class,'login']);
    Route::post('/register',[App\Http\Controllers\Auth\ApiAuthController::class,'register']);
});