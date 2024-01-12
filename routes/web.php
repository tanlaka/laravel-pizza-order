<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pizzas', function () {
    $user_info = [
        'username' => 'Yuyen Kiniben', 
        'token' => 'u73hs8HG736G3'
    ];
    return view('pizzas', $user_info);
});


