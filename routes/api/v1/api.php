<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('/user')->group(function(){
    Route::post('login', [App\Http\Controllers\Api\V1\AuthController::class, 'login']);
    Route::post('register', 'App\Http\Controllers\Api\V1\AuthController@register');
});

Route::middleware('auth:api')->group(function () {
    Route::post('logout', 'App\Http\Controllers\Api\V1\AuthController@logout');

    Route::get('/posts', function () {
        $response = ['message' => 'Posts Page'];
        return response($response, 200);
    });
});
