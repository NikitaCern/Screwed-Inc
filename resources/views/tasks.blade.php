@extends('layouts.app')
@section('content')
<div class="container mid">
  <br>
  <h4 class="text-center">Tasks</h4>
  <form>
  <div class="form-group d-flex justify-content-around">
    @if (Auth::user()->roles == 'order_mng')
    <div class="d-inline-flex">
      <a class="btn btn-outline-dark order-btn" href="/orders">ORDERS</a>
      <a class="btn btn-secondary order-btn" href="/tasks">TASKS</a>
    </div>
    @endif
<<<<<<< HEAD
    <a class="btn btn-outline-dark create-order-btn">CREATE TASK</a>
=======
    <a class="btn btn-outline-dark create-order-btn"><i class='far fa-sticky-note'></i>CREATE TASK</a>
>>>>>>> 5fcc10a34db928b580fc3f51ccf7befed6363f3e
  </div>
  </form>
  @if (sizeof($tasks) != 0)
  <table class="table">
    <tbody>
      @foreach ($tasks as $key => $data)
      <tr>
        <td><h5 class="user-heading">{{$data->name}}</h5>
        <p class="table-content">Amount left: {{$data->amount_left}}</p>
        <p class="table-content"> Deadline: {{$data->deadline}}</p>
        </td>
        <td class="col-btn">
          <a class="btn btn-outline-dark more-info">MORE INFO</a>
          <a class="btn btn-secondary done-btn">DONE</a>
          <a class="btn btn-secondary done-btn">REMOVE</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @else
  <h2>No tasks left!</h2>
  @endif
@endsection
