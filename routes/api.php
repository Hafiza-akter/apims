<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controller\Api\ProductController;
use App\Http\Controller\Api\RegisterController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register',[RegisterController::class,'register']);
Route::post('login',[RegisterController::class,'login']);
Route::group(['middleware'=> 'auth:sanctum'],function(){

    Route::resource('products','ProductController');

});