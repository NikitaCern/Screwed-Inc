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

