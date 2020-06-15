@extends('layouts.app')
@section('content')
  <div class="container mid">
    <div class="row justify-content-center" align="center">
        <div class="jumbotron" >
    <h4 class="text-center">Edit Part</h4>
    {{ Form::model($parts, ['action' => ['PartController@update', $parts->code], 'method' => 'PUT']) }}
      <div class="form-group w-100 mt-5">
        {{ Form::text('code', null, ['disabled']) }}
        @if ($errors->has('code'))
          <strong>{{ $errors->first('code') }}</strong>
        @endif
      </div>
      <div class="form-group w-100">
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
      <div class="form-group w-100 h-100">
        {{ Form::submit('Update') }}
      </div>
    {{ Form::close() }}
    </div>
    </div>
  </div>
@endsection
