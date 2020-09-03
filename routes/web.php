<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/','/home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add')->middleware('auth');

Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');

Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');

Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update')->middleware('auth');













Route::group(['middleware' => ['auth','admin']],function(){

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/role-register','Admin\DashboardController@registered');
Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
