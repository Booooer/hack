<?php

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

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/', function () {
    return view('index');
});

Route::post('/auth/in','App\Http\Controllers\AuthController@auth')
    ->name('auth');

Route::get('profile','App\Http\Controllers\AuthController@show')
->name('profile');   

Route::post('profile/updateRole','App\Http\Controllers\AuthController@updateRole')->name('updateRole');  

Route::post('/reg','App\Http\Controllers\AuthController@addUser');

Route::post('/add/product','App\Http\Controllers\ProductController@add');

Route::get("logout",'App\Http\Controllers\AuthController@logout')->name('logout');

