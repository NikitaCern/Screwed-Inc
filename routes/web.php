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

Route::get('parts/all', 'PartController@index')->name("parts");
Route::resource('parts', 'PartController', ['except' => ['show', 'edit', 'destroy', 'index']]);
Route::get('parts/{code}', 'PartController@show')->name("part");
Route::get('parts/edit/{code}', 'PartController@edit')->name("part_edit");
Route::get('parts/destroy/{code}', 'PartController@destroy')->name("part_destroy");

Route::get('orders/{id}', 'OrderController@show')->where('id','[0-9]+')->name("order");
Route::get('orders/edit/{id}', 'OrderController@edit')->where('id','[0-9]+')->name("order_edit");
Route::get('orders/destroy/{id}', 'OrderController@destroy')->where('id','[0-9]+')->name("order_destroy");
Route::get('orders/all', 'OrderController@index')->name("orders");
Route::resource('orders', 'OrderController');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', function () {
        return view('home');
    })->middleware('checkRole');

    Route::get('/users', function () {
      $users = DB::table('users')->get();
        return view('users', ['users' =>$users ]);
    })->middleware('admin');

    Route::get('/orders', function () {
      $orders = DB::table('orders')->get();
        return view('orders',['orders' =>$orders ]);
    })->middleware('order_mng');

    Route::get('/tasks', function () {
      $tasks = DB::table('tasks')->get();
        return view('tasks', ['tasks' =>$tasks ]);
    })->middleware('order_mng');

    Route::get('/employees', function () {
      $responsible_PK = Auth::user()->personal_number;
      $tasks = DB::table('tasks')->where('responsible_employee', $responsible_PK)->get();
        return view('employees' , ['tasks' =>$tasks ]);
    })->middleware('employee');

    Route::get('/parts', function () {
        $parts = DB::table('parts')->get();
        return view('parts', ['parts' =>$parts ]);
    })->middleware('parts_mng');

    Route::get('/taskAsign', function () {
      $tasks = DB::table('tasks')->get();
        return view('taskAssignement', ['tasks' =>$tasks ]);
    })->middleware('task_asgn');
});

