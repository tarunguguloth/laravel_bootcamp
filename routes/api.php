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
Route::post('/create_user');

/*
Route::post(`/create_user`, function
(){
   return ['message' => 'hello'];
});
Route::post(`/delete_user`, function
(){
    return ['message' => 'hello'];
});
Route::post(`/fetch_users_by_id`, function
(){
    return ['message' => 'hello'];
});
Route::post(`/fetch_all_users`, function
(){
    return ['message' => 'hello'];
});*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
