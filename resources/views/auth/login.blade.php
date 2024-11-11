@extends('layouts.login')

@section('forms')

<div class="card card-md">
    <div class="card-body">
        <h2 class="h2 text-center mb-4">Login to your account</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                <input type="email" placeholder="your@email.com" autocomplete="off" class="form-control  @error('email')
                is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">
                    {{ __('Password') }}
                    <!-- <span class="form-label-description">
                    <a href="./forgot-password.html">I forgot password</a>
                  </span> -->
                </label>
                <div class="input-group input-group-flat">
                    <input type="password" placeholder="Your password" autocomplete="off" class="form-control  @error('password')
                    is-invalid @enderror" name="password" value="{{ old('email') }}" required
                        autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="mb-3">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                        >
                        <span class="form-check-label mt-2" for="remember"> {{ __('Remember Me') }}</span>
                    </label>
                </div>
                <div class="form-footer">

                    <button type="submit" class="btn btn-yellow w-100"> {{ __('Login') }}</button>

                    @if (Route::has('password.request'))
                        <a class="btn  btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

        </form>
        <div class="text-center text-secondary mt-4">
          Don't have account yet? <a href="{{ route('register') }}" tabindex="-1">Sign up</a>
        </div>
    </div>
</div>

@endsection