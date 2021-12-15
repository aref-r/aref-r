<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/', function(){
    return view('panel.user.landing-en');
})->name('home');
Route::get('/persian', function(){
    return view('panel.user.landing-fa');
})->name('home');


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

    // user
    Route::get('offer/create/{order}', 'User\userController@store')->name('user.baseInformation.store');

    //receipt
    Route::get('offer/create/{order}', 'User\ReceiptController@create')->name('user.receipt.create');
    Route::post('offer/store', 'User\ReceiptController@store')->name('user.receipt.store');

    // dashboard + history + account
    Route::get('dashboard', function(){ return view('panel.user.dashboard');})->name('user.dashboard');
    Route::get('history', function(){ return view('panel.user.history');})->name('user.history');
    Route::get('account', function(){ return view('panel.user.account');})->name('user.account');

    // Account
    Route::get('setting', 'User\UserController@show')->name('user.account.show');
    Route::post('setting/update', 'User\UserController@update')->name('user.account.update');

});

Route::group(['prefix' => 'ticket','middleware' => ['auth']  ], function(){

    // tickets
    Route::get('new', 'User\TicketController@create')->name('user.ticket.create');
    Route::post('new', 'User\TicketController@store')->name('user.ticket.store');
    Route::get('me', 'User\TicketController@userTickets')->name('user.ticket.index');
    Route::get('case/{ticket}', 'User\TicketController@show')->name('user.ticket.show');
    Route::get('find/{ticket}', 'User\TicketController@showByTicket_Id')->name('user.ticket.showByTicketId');

    // comments
    Route::post('comment', 'User\CommentController@store')->name('user.comment.store');
});


    // admin tickets visit
Route::group(['prefix' => 'admin', 'middleware' => ['auth']  ], function() {
    Route::get('show/{ticket}', 'User\TicketController@showForAdmin')->name('admin.ticket.show');
    Route::get('tickets', 'User\TicketController@index')->name('admin.ticket.index');
    Route::post('close_ticket/{ticket_id}', 'User\TicketController@close')->name('admin.close.ticket');
});
