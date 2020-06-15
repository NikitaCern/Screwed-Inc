@extends('layouts.app')
@section('content')
  <div class="container mid">
    <div class="row justify-content-center" align="center">
        <div class="jumbotron w-50" >
    <h4 class="text-center">Edit User</h4>
    {{ Form::model($users, ['action' => ['UserController@update', $users->id], 'method' => 'PUT']) }}
      <div class="form-group w-100 mt-5">
        {{ Form::text('personal_number', null, ['disabled']) }}
        @if ($errors->has('personal_number'))
          <strong>{{ $errors->first('personal_number') }}</strong>
        @endif
      </div>
      <div class="form-group w-100">
        {{ Form::text('first_name') }}
        @if ($errors->has('first_name'))
          <strong>{{ $errors->first('first_name') }}</strong>
        @endif
      </div>
      <div class="form-group w-100">
        {{ Form::text('last_name') }}
        @if ($errors->has('last_name'))
          <strong>{{ $errors->first('last_name') }}</strong>
        @endif
      </div>
      <div class="form-group w-100">
        {{ Form::text('post') }}
        @if ($errors->has('post'))
          <strong>{{ $errors->first('post') }}</strong>
        @endif
      </div>
      <div class="form-group w-100">
        <?php
              $options = array('auth_user' => "Authenticated user",
              'task_distr' => 'Task distributor',
              'order_mng' => 'Order manager',
              'part_mng'=> 'Part manager',
              'admin'=> 'User administrator');
         ?>
        {{ Form::select('roles', $options) }}
        @if ($errors->has('roles'))
          <strong>{{ $errors->first('roles') }}</strong>
        @endif
      </div>
      <div class="form-group w-100">
        <?php
              $Lang_options = array('en' => "English",
              'lv' => 'Laviešu');
         ?>
        {{ Form::select('preferred_language', $Lang_options) }}
        @if ($errors->has('preferred_language'))
          <strong>{{ $errors->first('preferred_language') }}</strong>
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
