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


Route::group(['prefix' => 'home', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController')->name('dashboard');
});

Auth::routes();

///Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => '/' , 'namespace' => 'Auth'], function() {

    Route::get('/login/google','LoginController@redirectToGoogle')->name('login.google');

    Route::get('/auth/google/callback','LoginController@handleGoogleCallback');
});

Route::group(['prefix' => 'user','middleware' => ['auth'] ], function() {

    // order
    Route::get('order/create', 'User\OrderController@create')->name('user.order.create');
    Route::get('order/index', 'User\OrderController@index')->name('user.order.index');
    Route::get('order/show/{id}', 'User\OrderController@show')->name('user.order.show');
    Route::post('order/store', 'User\OrderController@store')->name('user.order.store');

    // offer
    Route::post('offer/create', 'User\OfferController@store')->name('user.offer.store');

});


