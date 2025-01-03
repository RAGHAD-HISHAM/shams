@extends('layouts.login')

@section('forms')

<div class="card card-md">
    <div class="card-body">
        <h2 class="h2 text-center mb-4">{{ __('Reset Password') }}</h2>


        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class=" mb-3">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                <input id="email" placeholder="your@email.com" type="email"
                    class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                    required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-footer">
                <button type="submit" class="btn btn-yellow w-100">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection