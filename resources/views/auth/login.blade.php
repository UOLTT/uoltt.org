@extends('layouts.uoltt')

@section('content')

<h1>Login</h1>

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <form role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">

                <div class="row">

                    <div class="col-md-6">
                        <label for="email">E-Mail Address</label>
                    </div>

                    <div class="col-md-6">

                        <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                    </div>

                </div>

            </div>

            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">

                <div class="row">

                    <div class="col-md-6">
                        <label for="password">Password</label>
                    </div>

                    <div class="col-md-6">

                        <input class="form-control" id="password" type="password" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>

                <div class="col-md-6">
                    <button class="btn btn-primary btn-block" type="submit">
                        Login
                    </button>
                </div>

            </div>

            <br>

            <a href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>

        </form>
    </div>
</div>

@endsection
