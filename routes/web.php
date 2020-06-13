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



Route::group(['middleware' => ['guest']], function () {
  Route::get('/', function () {
      return view('auth/login');
  });
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/submit', function () {
        return view('submit');
    });
    Route::get('/home', function () {
        return view('home');
    })->middleware('checkRole');
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
