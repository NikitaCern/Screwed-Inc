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


Route::group(['middleware' => ['auth']], function () {
  Route::get('/submit', function () {
      return view('submit');
  });
  Route::get('/home', function () {
      return view('home');
  });
  Route::get('/employees', function () {
      return view('employees');
  });
  Route::get('/orders', function () {
      return view('orders');
  });
  Route::get('/taskAsign', function () {
      return view('taskAssignement');
  });
  Route::get('/tasks', function () {
      return view('tasks');
  });
  Route::get('/users', function () {
      return view('users');
  });
});

Route::group(['middleware' => ['guest']], function () {
  Route::get('/', function () {
      return view('auth/login');
  });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
