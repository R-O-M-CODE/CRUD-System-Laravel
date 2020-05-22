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

Route::get('/', function () {
//    return view('welcome');
//    if (Auth::check()){
//        return "The user is logged in";
//    }
//    $username = 'dvhcbi';
//    $password = 'fdgcd';
//    if (Auth::attempt(['username' => $username, 'passsword'=> $password])){
//        return redirect()->intended('/admin');
//    }

    Auth::logout();

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
