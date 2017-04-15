@extends('layouts.app') @section('title') Login @endsection @section('content')
    <style>
        body {
            background-image: -webkit-linear-gradient(0deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.5)),
            url('{{asset('images/loginback.jpg')}}');
            background-image: linear-gradient(0deg,
            rgba(255, 255, 255, 0.1),
            rgba(255, 255, 255, 0.5)),
            url('{{asset('images/loginback.jpg')}}');
            background-size: cover;
            background-color: #1d2227;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }

    </style>
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="" id="logins">
                    <div class="panel-heading">Login</div>
                    @include('partials.messages')

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" required name="email" value="{{ old('email') }}"> @if ($errors->has('email'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span> @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" required class="form-control" name="password"> @if ($errors->has('password'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span> @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" checked name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> Login
                                    </button>
                                    <a href='{{url('auth/facebook ')}}' class="btn btn-primary">
                                        Login with  &nbsp;<i class="fa fa-facebook-official" aria-hidden="true" style="font-size: large;color: #fff"></i>
                                    </a>

                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
