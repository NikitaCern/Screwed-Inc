@extends('layouts.app')
@section('content')
  <div class="container mid">
    <div class="row justify-content-center" align="center">
        <div class="jumbotron w-50" >
          <h4 class="text-center">Edit</h4>
          {{ Form::model($order, ['action' => ['OrderController@update', $order->id], 'method' => 'PUT']) }}
        <div class="form-group w-100 mt-5">
        {{ Form::text('name') }}
        @if ($errors->has('name'))
          <strong>{{ $errors->first('name') }}</strong>
        @endif
      </div>
      <div class="form-group w-100">
        {{ Form::textarea('description') }}
        @if ($errors->has('description'))
          <strong>{{ $errors->first('description') }}</strong>
        @endif
      </div>
      <div class="form-group w-100">
        {{ Form::date('deadline', date_format(date_create($order->deadline),'Y-m-d')) }}
        @if ($errors->has('deadline'))
          <strong>{{ $errors->first('deadline') }}</strong>
        @endif
      </div>
      <div class="form-group w-100">
        {{ Form::label('is_done', 'Is the Order finished?') }}
        {{ Form::checkbox('is_done') }}
        @if ($errors->has('is_done'))
          <strong>{{ $errors->first('is_done') }}</strong>
        @endif
      </div>
      <div class="form-group w-100 h-100">
        {{ Form::submit('Update') }}
      </div>
    {{ Form::close() }}
    </div>
    </div>
  </div>
@endsection
