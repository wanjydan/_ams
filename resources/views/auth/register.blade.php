{{--@extends('layouts.app')--}}

{{--@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}


        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta name="description" content="Responsive Admin Template"/>
    <meta name="author" content="SmartUniversity"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('plugins/iconic/css/material-design-iconic-font.min.css')}}">

    <link rel="stylesheet" href="{{asset('plugins/jquery-toast/dist/jquery.toast.min.css')}}">

    <!-- bootstrap -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/pages/extra_pages.css')}}">
    <body>
    <div class="limiter">
        <div class="container-login100 page-background">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
					<span class="login100-form-logo">
						<i class="zmdi zmdi-flower"></i>
					</span>
                    <span class="login100-form-title p-b-34 p-t-27">
						Registration
					</span>
                    <div class="row">
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate = "Enter First Name">
                                <input class="input100" id="first_name" type="text" name="first_name" placeholder="First Name">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate = "Enter Last Name">
                                <input class="input100" id="last_name" type="text" name="last_name" placeholder="Last Name">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate = "Enter Phone Number">
                                <input class="input100" id="phone" type="string" name="phone" placeholder="Phone">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                                <input class="input100" id="email" type="email" name="email" placeholder="Email">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter Password">
                                <input class="input100" id="password" type="password" name="password" placeholder="Password">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter Password again">
                                <input class="input100" id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm password">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>
                        </div>
                    </div>
                    {{--<div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>--}}
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Sign In
                        </button>
                    </div>
                    <div class="text-center p-t-90">
                        <a class="txt1" href="{{ route('login') }}">
                            You already have a membership?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- start js include path -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}" ></script>
    <!-- bootstrap -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}" ></script>
    <script src="{{asset('js/pages/extra_pages/login.js')}}" ></script>

    <!-- notifications -->
    <script src="{{asset('plugins/jquery-toast/dist/jquery.toast.min.js')}}" ></script>
    <script src="{{asset('plugins/jquery-toast/dist/toast.js')}}" ></script>
    <!-- end js include path -->

    @error('first_name')
    <script>
        $.toast({
            heading: 'First Name',
            text: '{{$message}}',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'error',
            hideAfter: 3500

        });
    </script>
    @enderror

    @error('last_name')
    <script>
        $.toast({
            heading: 'Last name',
            text: '{{$message}}',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'error',
            hideAfter: 3500

        });
    </script>
    @enderror

    @error('phone')
    <script>
        $.toast({
            heading: 'Phone Number',
            text: '{{$message}}',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'error',
            hideAfter: 3500

        });
    </script>
    @enderror

    @error('email')
    <script>
        $.toast({
            heading: 'Email',
            text: '{{$message}}',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'error',
            hideAfter: 3500

        });
    </script>
    @enderror

    @error('password')
    <script>
        $.toast({
            heading: 'Password',
            text: '{{$message}}',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'error',
            hideAfter: 3500

        });
    </script>
    @enderror
    </body>
</html>
