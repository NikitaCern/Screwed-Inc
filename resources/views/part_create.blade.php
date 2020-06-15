@extends('layouts.app')
@section('content')
  <div class="container mid">
    <div class="row justify-content-center" align="center">
        <div class="jumbotron" >
    <h4 class="text-center">Create Part</h4>
      {{ Form::open(array('action' => 'PartController@store')) }}
      <div class="form-group w-100 mt-5">
        {{ Form::text('code', null, array('class'=>'', 'id'=>'', 'placeholder'=>'Part Number')) }}
        @if ($errors->has('code'))
          <strong>{{ $errors->first('code') }}</strong>
        @endif
      </div>
      <div class="form-group w-100">
        {{ Form::text('name', null, array('class'=>'', 'id'=>'', 'placeholder'=>'Part Name')) }}
        @if ($errors->has('name'))
          <strong>{{ $errors->first('name') }}</strong>
        @endif
      </div>
      <div class="form-group w-100">
        {{ Form::textarea('description', null, array('class'=>'', 'id'=>'', 'placeholder'=>'Part Desription'))  }}
        @if ($errors->has('description'))
          <strong>{{ $errors->first('description') }}</strong>
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
