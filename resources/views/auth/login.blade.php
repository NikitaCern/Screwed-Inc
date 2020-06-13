@extends('layouts.app')

@section('content')
<div class="container-fluid bg-login">
    <div class="row justify-content-center">
      <div class="col-4 slogan">
          <h2 id="logo-text">Screwed Inc.</h2>
          <p class="slogan-text">*Company slogan*</p>
      </div>
        <div class="col-8">
                    <form class="bg-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                                <button type="submit" class="btn btn-secondary login-btn">
                                    {{ __('Login') }}
                                </button>
                    </form>
        </div>
    </div>
</div>
@endsection
