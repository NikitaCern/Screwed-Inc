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


Route::group(['middleware' => ['auth']], function () {
  Route::get('/register', function () {
      return view('auth/register');
  })->middleware('admin');

});

Auth::routes();


Route::get('users/edit/{id}', 'UserController@edit')->name("user_edit");
Route::get('users/destroy/{id}', 'UserController@destroy')->name("user_destroy");
Route::get('users', 'UserController@index')->name("users");
Route::resource('users', 'UserController', ['except' => ['show', 'edit', 'destroy', 'index']]);


Route::get('tasks/{id}', 'TaskController@show')->where('id','[0-9]+')->name("task");
Route::get('tasks/edit/{id}', 'TaskController@edit')->where('id','[0-9]+')->name("task_edit");
Route::get('tasks/destroy/{id}', 'TaskController@destroy')->where('id','[0-9]+')->name("task_destroy");
Route::get('tasks/all', 'TaskController@index')->name("tasks");
Route::get('tasks/create', 'TaskController@create')->name("task_create");
Route::resource('tasks', 'TaskController');


Route::get('parts/all', 'PartController@index')->name("parts");
Route::resource('parts', 'PartController', ['except' => ['show', 'edit', 'destroy', 'index']]);
Route::get('parts/{code}', 'PartController@show')->name("part");
Route::get('parts/create', 'PartController@create')->name("part_create");
Route::get('parts/edit/{code}', 'PartController@edit')->name("part_edit");
Route::get('parts/destroy/{code}', 'PartController@destroy')->name("part_destroy");

Route::get('orders/{id}', 'OrderController@show')->where('id','[0-9]+')->name("order");
Route::get('orders/edit/{id}', 'OrderController@edit')->where('id','[0-9]+')->name("order_edit");
Route::get('orders/destroy/{id}', 'OrderController@destroy')->where('id','[0-9]+')->name("order_destroy");
Route::get('orders/all', 'OrderController@index')->name("orders");
Route::get('orders/create', 'OrderController@create')->name("orders_create");
Route::resource('orders', 'OrderController');



    Route::get('/home', function () {
        return view('home');
    })->middleware('checkRole');


    Route::get('/tasks', function () {
      $tasks = DB::table('tasks')->get();
        return view('tasks', ['tasks' =>$tasks ]);
    })->middleware('order_mng');

    Route::get('/employees', function () {
      $responsible_PK = Auth::user()->id;
      $tasks = DB::table('tasks')->where('responsible_employee', $responsible_PK)->get();
        return view('employees' , ['tasks' =>$tasks ]);
    })->middleware('employee');

    Route::get('/taskAsign', function () {
      $tasks = DB::table('tasks')->get();
        return view('taskAssignement', ['tasks' =>$tasks ]);
    })->middleware('task_asgn');
