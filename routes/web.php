<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('user.index');})->name('dashboard');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/file-manager', function (){return view('vendor.file-manager.fmButton');})->name('file.manager');
Route::get('/media', function (){return view('media.index');})->name('media');
/*UserController*/
Route::resource('user','UserController');
Route::get('login','UserController@login_index')->name('login');
Route::get('register','UserController@register_index')->name('register');
Route::get('authentication/password/recover','UserController@recover_index')->name('password.recover');
Route::get('authentication','UserController@authentication_index')->name('authentication.index');
