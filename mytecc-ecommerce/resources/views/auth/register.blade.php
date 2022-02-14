@extends('layouts.app')
@section('title', 'Sign Up')
@section('content')
<div class="container">
    <div class="form-login my-5">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <h1 class="mb-4 fw-bold text-center">Sign Up</h1>

            <div class="form-floating">
                <input id="floatingInput" type="text" class="f-2 form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autofocus placeholder="Username">
                <label for="floatingInput" class="f-2">Username</label>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong class="f-2">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating">
                <input id="floatingInput" type="text" class="f-2 form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autofocus placeholder="First Name">
                <label for="floatingInput" class="f-2">First Name</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong class="f-2">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating">
                <input id="floatingInput" type="text" class="f-2 form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autofocus placeholder="Last Name">
                <label for="floatingInput" class="f-2">Last Name</label>
                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong class="f-2">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating">
                <input id="floatingInput" type="email" class="f-2 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                <label for="floatingInput" class="f-2">Email address</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong class="f-2">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating">
                <input id="floatingPassword" type="password" class="f-2 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                <label for="floatingPassword" class="f-2">Password</label>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong class="f-2">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-floating">
                <input id="floatingPassword" type="password" class="f-2 form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation">
                <label for="floatingPassword" class="f-2">Password Confirmation</label>
            </div>

            <button class="w-100 btn btn-lg btn-danger mt-4" type="submit">Sign Up</button>
        </form>

        <div class="text-center mt-4">
            <p class="f-2">Already have an account? <a class="link-danger" href="{{ route('login') }}">Log In</a></p>
        </div>
    </div>
</div>
@endsection
