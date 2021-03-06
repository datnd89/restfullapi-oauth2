<?php

use Illuminate\Http\Request;


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
    return $request->user();
});

Route::resource('buyers','BuyerController',['only'=>['index','show']]);
Route::resource('categories','CategoryController',['except'=>['create','edit']]);
Route::resource('products','ProductController',['only'=>['index','show']]);
Route::resource('Sellers','SellerController',['only'=>['index','show']]);
Route::resource('Transactions','TransactionController',['only'=>['index','show']]);
Route::resource('users','UserController',['except'=>['create','edit']]);
