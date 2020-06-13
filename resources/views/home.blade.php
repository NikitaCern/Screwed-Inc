@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                    <br>
                    <a  href="/employees" class="btn btn-primary">
                        {{ __('Employee') }}
                    </a> <br>
                    <a  href="/orders" class="btn btn-primary">
                        {{ __('Orders') }}
                    </a><br>
                    <a  href="/taskAsign" class="btn btn-primary">
                        {{ __('Task Assignement') }}
                    </a><br>
                    <a  href="/tasks" class="btn btn-primary">
                        {{ __('Tasks') }}
                    </a><br>
                    <a  href="/users" class="btn btn-primary">
                        {{ __('Users') }}
                    </a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
