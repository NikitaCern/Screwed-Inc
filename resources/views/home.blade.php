@extends('layouts.app')

@section('content')
<div class="container mid">
                <h4 class="text-center">{{ __('Administrator panel') }}</h4>
                    <div class="form-group d-flex justify-content-around mt-5">
                    <a  href="/orders" class="btn btn-outline-dark edit-btn">
                        {{ __('Orders') }}
                    </a>
                    <a  href="/taskAsign" class="btn btn-outline-dark edit-btn">
                        {{ __('Task Assignement') }}
                    </a>
                    <a  href="/tasks" class="btn btn-outline-dark edit-btn">
                        {{ __('Tasks') }}
                    </a>
                    <a  href="/parts" class="btn btn-outline-dark edit-btn">
                        {{ __('Parts') }}
                    </a>
                    <a  href="/users" class="btn btn-outline-dark edit-btn">
                        {{ __('Users') }}
                    </a>
                  </div>
            </div>

@endsection
