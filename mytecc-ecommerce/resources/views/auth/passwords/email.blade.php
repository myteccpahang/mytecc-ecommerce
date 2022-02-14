@extends('layouts.app')
@section('title', 'Reset Password')
@section('content')
<div class="container">
    <div class="form-login my-5">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <h1 class="mb-4 fw-bold text-center">Reset Password</h1>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="form-floating">
                <input id="floatingInput" type="email" class="f-2 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                <label for="floatingInput" class="f-2">Email address</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong class="f-2">{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button class="w-100 btn btn-lg btn-danger mt-4" type="submit">Send Password Reset Link</button>
        </form>

        <div class="text-center mt-4">
            <p class="f-2">Back to <a class="link-danger" href="{{ route('login') }}">Log In</a></p>
        </div>
    </div>
</div>
@endsection
