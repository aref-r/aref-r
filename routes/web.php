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
    Route::post('offer/store', 'User\OfferController@store')->name('user.offer.store');
    Route::get('offer/index', 'User\OfferController@index')->name('user.offer.index');
    Route::post('offer/accept-offer', 'User\OfferController@accept_offer')->name('user.offer.accept_offer');

    //receipt
    Route::get('offer/create/{order}', 'User\ReceiptController@create')->name('user.receipt.create');
    Route::post('offer/store', 'User\ReceiptController@store')->name('user.receipt.store');

    // dashboard + history + account
    Route::get('dashboard', 'User\TicketController@tempDashboard')->name('user.dashboard');
    Route::get('history', 'User\TicketController@tempHistory')->name('user.history');
    Route::get('account', 'User\TicketController@tempAccount')->name('user.account');

    // setting
    Route::get('setting', 'User\SettingController@index')->name('user.setting.index');
    Route::post('setting/store', 'User\SettingController@store')->name('user.setting.store');

});

Route::group(['prefix' => 'ticket','middleware' => ['auth']  ], function(){

    // tickets
    Route::get('new', 'User\TicketController@create')->name('user.ticket.create');
    Route::post('new', 'User\TicketController@store')->name('user.ticket.store');
    Route::get('me', 'User\TicketController@userTickets')->name('user.ticket.index');
    Route::get('case/{ticket}', 'User\TicketController@show')->name('user.ticket.show');

    // comments
    Route::post('comment', 'User\CommentsController@postComment')->name('user.comment.store');

});
    // admin tickets visit
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('tickets', 'User\TicketController@index')->name('admin.tickets.index');
    Route::post('close_ticket/{ticket_id}', 'User\TicketController@close')->name('admin.close.ticket');
});


