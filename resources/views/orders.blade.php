@extends('layouts.app')
@section('content')
    <div class="container mid">
      <br>
      <h4 class="text-center">Orders</h4>
      <form>
      <div class="form-group">
          @if(Auth::user()->roles == 'order_mng')
          <div class="d-inline-flex">
                    <a class="btn btn-secondary order-btn" href="/orders">ORDERS</a>
                    <a class="btn btn-outline-dark order-btn" href="/tasks">TASKS</a>
          </div>
          @endif
        <a class="btn btn-outline-dark create-order-btn"><i class='far fa-sticky-note'></i>CREATE ORDER</a>
        <input type="text" placeholder="SEARCH" class="search-bar">
        <button type="submit" class="btn btn-secondary search-btn"><i class='fas fa-search'></i>SEARCH</button>
      </div>
      @if (sizeof($orders) != 0)
      </form>
        @foreach ($orders as $key => $data)
          <div class="container mid bg-order" id="order-table">
                <div class="row">
                    <div class="col-6">
                      <br><br>
                        <img src="favicon.ico" alt="" class="img-fluid">

                    </div>

                      <div class="col-6">
                         <h6 class="table-heading">{{$data->name}}</h6>
                         <p class="table-content">{{$data->deadline}}</p>
                         <p class="table-content">{{$data->description}}</p>
                          <p class="table-content">Not Done</p>
                         <button type="button" class="btn btn-outline-dark" id="task-btn">CREATE TASKS</button>
                         <button type="button" class="btn btn-outline-dark edit-btn">EDIT</button>
                        <button type="submit" class="btn btn-secondary remove-btn" id="">REMOVE</button>
                      </div>
                </div>
          <br><br>
        </div>
      @endforeach
      @else
        <h2>No orders left!</h2>
      @endif
    </div>
@endsection
