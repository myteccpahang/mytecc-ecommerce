@extends('layouts.app')
@section('title', 'Log In')
@section('content')
<div class="container">
    <div class="form-login my-5">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h1 class="mb-4 fw-bold text-center">Log In</h1>

            <div class="form-floating">
                <input id="floatingInput" type="email" class="f-2 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                <label for="floatingInput" class="f-2">Email address</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong class="f-2">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating">
                <input id="floatingPassword" type="password" class="f-2 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                <label for="floatingPassword" class="f-2">Password</label>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong class="f-2">{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-check my-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember" class="f-2">
                    <span class="f-2">Remember Me</span>
                </label>
            </div>

            <button class="w-100 btn btn-lg btn-danger" type="submit">Log In</button>
        </form>
        @if (Route::has('password.request'))
            <div class="text-center mt-4">
                <a class="link-danger f-2" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            </div>
        @endif

        <div class="text-center mt-4">
            <p class="f-2">Don't have an account? <a class="link-danger" href="{{ route('register') }}">Sign Up</a></p>
        </div>
    </div>
</div>
@endsection
