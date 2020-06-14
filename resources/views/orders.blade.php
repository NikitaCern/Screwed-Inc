@extends('layouts.app')
@section('content')
    <div class="container mid">
      <br>
      <h4 class="text-center">Orders</h4>
      <form>
      <div class="form-group d-flex justify-content-around">
          @if(Auth::user()->roles == 'order_mng')
          <div class="d-inline-flex">
                    <a class="btn btn-secondary order-btn" href="/orders">ORDERS</a>
                    <a class="btn btn-outline-dark order-btn" href="/tasks">TASKS</a>
          </div>
          @endif
        <a class="btn btn-outline-dark create-order-btn">CREATE ORDER</a>
      </div>
      </form>
      @if (sizeof($orders) != 0)
      <table class="table">
        <tbody>
          @foreach ($orders as $key => $data)
          <tr>
            <td><h6 class="name">{{$data->name}}</h6>
              <p class="table-content">{{$data->deadline}}</p>
              <p class="table-content">{{$data->description}}</p>
              <p class="table-content">Not Done</p>
            </td>
            <td class="col-btn">
              <a class="btn btn-outline-dark edit-btn">EDIT</a>
             <a class="btn btn-secondary remove-btn" >REMOVE</a>
             <a class="btn btn-outline-dark edit-btn">CREATE TASKS</a>
           </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @else
        <h2>No orders left!</h2>
      @endif
    </div>
@endsection
