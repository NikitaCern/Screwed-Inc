@extends('layouts.app')
@section('content')
<div class="container mid">
  <br>
  <h4 class="text-center">{{ __('Tasks') }}</h4>
  <form>
  <div class="form-group d-flex justify-content-around">
    @if (Auth::user()->roles == 'order_mng')
    <div class="d-inline-flex">
      <a class="btn btn-outline-dark order-btn" href="/orders">{{ __('ORDERS') }}</a>
      <a class="btn btn-secondary order-btn" href="/tasks">{{ __('TASKS') }}</a>
    </div>
    @endif
    <a class="btn btn-outline-dark create-order-btn">{{ __('CREATE TASK') }}</a>
  </div>
  </form>
  @if (sizeof($tasks) != 0)
  <table class="table">
    <tbody>
      @foreach ($tasks as $key => $data)
      <tr>
        <td ><h5 class="user-heading">{{$data->name}}</h5>
        <p class="table-content">{{ __('Amount left') }}: {{$data->amount_left}}</p>
        <p class="table-content"> {{ __('Deadline') }}: {{$data->deadline}}</p>
        </td>
        <td class="col-btn">
          <a class="btn btn-outline-dark done-btn">{{ __('DONE') }}</a>
          <a class="btn btn-secondary remove-btn">{{ __('REMOVE') }}</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @else
  <h2>{{ __('Nothing here!') }}</h2>
  @endif
@endsection
