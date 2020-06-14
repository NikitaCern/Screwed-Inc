@extends('layouts.app')
@section('content')
  <div class="container mid">
    <br>
    <h4 class="text-center">Create</h4>
    {{ Form::open(array('action' => 'OrderController@store')) }}
      <div>
        {{ Form::label('name', 'Order name') }}
        {{ Form::text('name') }}
        @if ($errors->has('name'))
          <strong>{{ $errors->first('name') }}</strong>
        @endif
      </div>
      <div>
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description') }}
        @if ($errors->has('description'))
          <strong>{{ $errors->first('description') }}</strong>
        @endif
      </div>
      <div>
        {{ Form::label('deadline', 'Deadline') }}
        {{ Form::date('deadline') }}
        @if ($errors->has('deadline'))
          <strong>{{ $errors->first('deadline') }}</strong>
        @endif
      </div>
      <div>
        {{ Form::label('is_done', 'Is the Order finished?') }}
        {{ Form::checkbox('is_done') }}
        @if ($errors->has('is_done'))
          <strong>{{ $errors->first('is_done') }}</strong>
        @endif
      </div>
      <div>
        {{ Form::submit('Create') }}
      </div>
    {{ Form::close() }}
  </div>
@endsection
