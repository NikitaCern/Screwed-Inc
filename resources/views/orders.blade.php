@extends('layouts.app')
@section('content')
    <div class="container mid">
      <br>
      <h4 class="text-center">{{ __('Orders') }}</h4>
      <form>
      <div class="form-group d-flex justify-content-around">
          @if(Auth::user()->roles == 'order_mng')
          <div class="d-inline-flex">
                    <a class="btn btn-secondary order-btn" href="/orders">{{ __('ORDERS') }}</a>
                    <a class="btn btn-outline-dark order-btn" href="/tasks">{{ __('TASKS') }}</a>
          </div>
          @endif
        <a class="btn btn-outline-dark create-order-btn">{{ __('CREATE ORDER') }}</a>
      </div>
      </form>
      @if (sizeof($orders) != 0)
      <table class="table">
        <tbody>
          @foreach ($orders as $key => $data)
          <tr>
            <td class =" @if($data->is_done == 0) disabled @endif"><h6 class="name">{{$data->name}}</h6>
              <p class="table-content">{{$data->deadline}}</p>
              <p class="table-content">{{$data->description}}</p>
              @if($data->is_done != 0)
              <p class="table-content">{{ __('Not Done') }}</p>
              @else
              <p class="table-content">{{ __('DONE') }}</p>
              @endif
            </td>
            <td class="col-btn">
              @if($data->is_done != 0)
              <a class="btn btn-outline-dark edit-btn">{{ __('EDIT') }}</a>
              <a class="btn btn-outline-dark edit-btn">{{ __('CREATE TASK') }}</a>
              @endif
              <a class="btn btn-secondary remove-btn" >{{ __('REMOVE') }}</a>
           </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @else
        <h2>{{ __('Nothing here!') }}</h2>
      @endif
    </div>
@endsection
