@extends('layouts.app')
@section('content')
  <div class="container mid">
    <div class="row justify-content-center" align="center">
        <div class="jumbotron w-50" >
          <h4 class="text-center">Create Order</h4>
          {{ Form::open(array('action' => 'OrderController@store')) }}
            <div class="form-group w-100 mt-5">
              {{ Form::text('name', null, array('class'=>'', 'id'=>'', 'placeholder'=>'Order Name')) }}
              @if ($errors->has('name'))
                <strong>{{ $errors->first('name') }}</strong>
              @endif
            </div>
            <div class="form-group w-100">
              {{ Form::textarea('description', null, array('class'=>'', 'id'=>'', 'placeholder'=>'Description')) }}
              @if ($errors->has('description'))
                <strong>{{ $errors->first('description') }}</strong>
              @endif
            </div>
            <div class="form-group w-100">
              {{ Form::date('deadline', null, array('class'=>'', 'id'=>'', 'placeholder'=>'Deadline')) }}
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
              {{ Form::submit('Create') }}
            </div>
          {{ Form::close() }}
    </div>
    </div>
  </div>
@endsection
