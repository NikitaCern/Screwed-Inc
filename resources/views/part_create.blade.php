@extends('layouts.app')
@section('content')
  <div class="container mid">
    <br>
    <h4 class="text-center">Create part</h4>
    {{ Form::open(array('action' => 'PartController@store')) }}
      <div>
        {{ Form::label('code', 'Part code') }}
        {{ Form::text('code') }}
        @if ($errors->has('code'))
          <strong>{{ $errors->first('code') }}</strong>
        @endif
      </div>
      <div>
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name') }}
        @if ($errors->has('name'))
          <strong>{{ $errors->first('name') }}</strong>
        @endif
      </div>
      <div>
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description') }}
        @if ($errors->has('description'))
          <strong>{{ $errors->first('description') }}</strong>
        @endif
      </div>
      <div>
        {{ Form::submit('Create') }}
      </div>
    {{ Form::close() }}
  </div>
@endsection
