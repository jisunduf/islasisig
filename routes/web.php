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
    return view('pages.index');
});
Route::get('/products', function () {
    return view('pages.products');
});
Route::get('/franchise', function () {
    return view('pages.franchise');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
