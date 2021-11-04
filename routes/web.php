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
    return view('panel.admin.dashboard');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => '/' , 'namespace' => 'Auth'], function() {

    Route::get('/login/google','LoginController@redirectToGoogle')->name('login.google');

    Route::get('/auth/google/callback','LoginController@handleGoogleCallback');
});
