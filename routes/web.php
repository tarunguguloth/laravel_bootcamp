<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('posts', PostsController::class);

Route::get('/user', [UsersController::class, 'getAllUsers']);
Route::get('/user/{id}', [UsersController::class, 'getUserByID']);
Route::post('/user', [UsersController::class, 'createUserByID']);
Route::delete('/user/{id}', [UsersController::class, 'delete']);
