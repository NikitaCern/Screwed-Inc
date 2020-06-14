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
    <a class="btn btn-outline-dark create-order-btn"><i class='far fa-sticky-note'></i>CREATE TASK</a>
  </div>
  </form>
  @if (sizeof($tasks) != 0)
  @foreach ($tasks as $key => $data)
  <tr>
    <td><h5 class="user-heading">{{$data->name}}</h5>
    <p class="table-content">{{$data->amount_left}}<br>Deadline: {{$data->deadline}}</p>
    </td>
    <td class="col-btn"><button type="button" class="btn btn-outline-dark more-info">MORE INFO</button><br>
      <button type="submit" class="btn btn-secondary done-btn">DONE</button>
      <button type="submit" class="btn btn-secondary done-btn">REMOVE</button>
    </td>
  </tr>
  @endforeach
  @else
  <h2>No tasks left!</h2>
  @endif
@endsection
