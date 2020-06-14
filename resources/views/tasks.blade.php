@extends('layouts.app')
@section('content')
<div class="container mid">
  <br>
  <h4 class="text-center">Tasks</h4>
  <form>
  <div class="form-group">
    <div class="d-inline-flex">
      <a class="btn btn-outline-dark order-btn" href="/orders">ORDERS</a>
      <a class="btn btn-secondary order-btn" href="/tasks">TASKS</a>
    </div>
    <a class="btn btn-outline-dark create-order-btn"><i class='far fa-sticky-note'></i>CREATE TASK</a>
    <input type="text" placeholder="SEARCH" class="search-bar">
    <button type="submit" class="btn btn-secondary search-btn"><i class='fas fa-search'></i>SEARCH</button>
  </div>
  </form>
  @foreach ($tasks as $key => $data)
  <tr>
    <td><h5 class="user-heading">{{$data->name}}</h5>
    <p class="table-content">{{$data->amount_left}}<br>Deadline: {{$data->deadline}}</p>
    </td>
    <td class="col-btn"><button type="button" class="btn btn-outline-dark more-info">MORE INFO</button><br>
      <button type="submit" class="btn btn-secondary done-btn">DONE</button>
    </td>
  </tr>
  @endforeach
@endsection
