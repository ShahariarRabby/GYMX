@extends('layouts.app')
@section('title')
    Register
    @endsection
@section('content')
    <style>
        body{
            background-image: -webkit-linear-gradient(0deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.5)),url('{{asset('images/regback.jpg')}}');
            background-image: linear-gradient(0deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.5)), url('{{asset('images/regback.jpg')}}');
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
            <div id="logins">
                <div class="panel-heading">Register</div>
                @include('partials.messages')

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{--<div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">--}}
                            {{--<label for="number" class="col-md-4 control-label">Role</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="role_id" type="number" class="form-control" name="role_id" value="{{ old('name') }}">--}}

                                {{--@if ($errors->has('role_id'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('role_id') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" required name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" required class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <style>
                            .none{
                                display: none;
                            }
                            .none2{
                                display: block !important;
                            }
                        </style>
                        <div class="row">
                            <label  class="col-md-4 control-label "></label>
                            <div class="col-md-6">
                                <span id="message" ></span>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" required type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <script>
                            $('#password, #password-confirm').on('keyup', function () {
                                if ($('#password').val() != "" || $('#password-confirm').val() !="") {
                                    if ($('#password').val() == $('#password-confirm').val()) {
                                        $('#message').html('Password must contain at least six character').css('color', 'black');
                                    } else
                                        $('#message').html('<span style="color: black" >Password must contain at least six character</span><br>Not Matching').css('color', 'red');
                                }
                                else{

                                }

                            });
                        </script>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                                <a href='{{url('auth/facebook')}}' class="btn btn-primary">
                                    Register with  &nbsp;<i class="fa fa-facebook-official" aria-hidden="true" style="font-size: large;color: #fff"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <a href="{{url('/login')}}">Already have an account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
