@extends('layouts.app')
@section('content')
  <div class="container mid">
    <div class="row justify-content-center" align="center">
        <div class="jumbotron" >
    <h4 class="text-center">Create Task</h4>
      {{ Form::open(array('action' => 'TaskController@store')) }}
      <div class="form-group w-100">
        {{ Form::text('name', null, array('class'=>'', 'id'=>'', 'placeholder'=>'Part Name')) }}
        @if ($errors->has('name'))
          <strong>{{ $errors->first('name') }}</strong>
        @endif
      </div>
      <div class="form-group w-100">
        {{ Form::date('deadline', null, array('class'=>'', 'id'=>'', 'placeholder'=>'Deadline')) }}
        @if ($errors->has('deadline'))
          <strong>{{ $errors->first('deadline') }}</strong>
        @endif
      </div>
      <div class="form-group w-100">
        {{ Form::select('order', $orders, null, array('class'=>'', 'id'=>'', 'placeholder'=>'Order')) }}
        @if ($errors->has('order'))
          <strong>{{ $errors->first('order') }}</strong>
        @endif
      </div>
      <div class="form-group w-100">
        {{ Form::select('part', $parts, null, array('class'=>'', 'id'=>'', 'placeholder'=>'Part')) }}
        @if ($errors->has('part'))
          <strong>{{ $errors->first('part') }}</strong>
        @endif
      </div>
      <div class="form-group w-100">
        {{ Form::select('responsible_employee', $users, null, array('class'=>'', 'id'=>'', 'placeholder'=>'Responsible empployee')) }}
        @if ($errors->has('responsible_employee'))
          <strong>{{ $errors->first('responsible_employee') }}</strong>
        @endif
      </div>
      <div class="form-group w-100">
        {{ Form::number('amount', null, array('class'=>'', 'id'=>'', 'placeholder'=>'Amount to Produce')) }}
        @if ($errors->has('amount'))
          <strong>{{ $errors->first('amount') }}</strong>
        @endif
      </div>

      <div class="form-group w-100 h-100">
        {{ Form::submit('Create') }}
      </div>
    {{ Form::close() }}
    </div>
    </div>
  </div>
@endsection
