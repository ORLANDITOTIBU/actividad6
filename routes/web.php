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

Route::get('/', function () {
    return view('welcome');
});

Route::get('productos/', function () {
    return view('productos.index');
});

Route::get('productos/create', function () {
    return view('productos.create');
});

Route::get('productos/edit', function () {
    return view('productos.edit');
});