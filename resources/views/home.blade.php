@extends('layouts.app')

@section('content')
<div class="container mid">
                <div >Administrator panel</div>
                    <br><br>
                    <a  href="/orders" class="btn btn-primary">
                        {{ __('Orders') }}
                    </a>
                    <a  href="/taskAsign" class="btn btn-primary">
                        {{ __('Task Assignement') }}
                    </a>
                    <a  href="/tasks" class="btn btn-primary">
                        {{ __('Tasks') }}
                    </a>
                    <a  href="/parts" class="btn btn-primary">
                        {{ __('parts') }}
                    </a>
                    <a  href="/users" class="btn btn-primary">
                        {{ __('Users') }}
                    </a>
            </div>

@endsection
