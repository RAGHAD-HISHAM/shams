@extends('layouts.login')

@section('forms')

<div class="card card-md">
    <div class="card-body">
        <h2 class="card-title text-center mb-4">Create new account</h2>
        <form autocomplete="off" novalidate method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email"
                    name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">{{ __('Mobile') }}</label>
                <input type="text" class="form-control @error('mobile') is-invalid @enderror" placeholder="Enter mobile"
                    name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <div class="input-group input-group-flat">
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Password" autocomplete="off" name="password" required autocomplete="new-password">


                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class=" mb-3">
                <label for="password-confirm"
                    class="form-label">{{ __('Confirm Password') }}</label>

                <div class="input-group input-group-flat">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"
                        required autocomplete="new-password">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-check">
                    <input type="checkbox" class="form-check-input">
                    <span class="form-check-label">Agree the <a href="./terms-of-service.html" tabindex="-1">terms and
                            policy</a>
                    </span>
                </label>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-yellow w-100">Create new account</button>
            </div>
    </div>
    </form>
    <div class="text-center text-secondary mb-6">
        Already have account? <a href="{{ route('login') }}" tabindex="-1">Sign in</a>
    </div>
</div>
</div>

@endsection
