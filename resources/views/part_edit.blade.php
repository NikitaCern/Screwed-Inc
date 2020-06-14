@extends('layouts.app')
@section('content')
  <div class="container mid">
    <br>
    <h4 class="text-center">Edit Part</h4>
    {{ Form::model($part, ['action' => ['PartController@update', $part->code], 'method' => 'PUT']) }}
      <div>
        {{ Form::label('code', 'Part code') }}
        {{ Form::text('code', null, ['disabled']) }}
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
        {{ Form::submit('Update') }}
      </div>
    {{ Form::close() }}
  </div>
@endsection
