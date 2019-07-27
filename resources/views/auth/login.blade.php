{{--@extends('layouts.app')--}}

{{--@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css"/>
    <!-- icons -->
    <link href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('plugins/iconic/css/material-design-iconic-font.min.css')}}">

    <link rel="stylesheet" href="{{asset('plugins/jquery-toast/dist/jquery.toast.min.css')}}">

    <!-- bootstrap -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/pages/extra_pages.css')}}">

<body>
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-logo">
						<i class="zmdi zmdi-flower"></i>
					</span>
                <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
                <div class="wrap-input100 validate-input" data-validate="Enter email">
                    <input class="input100" id="email" type="email" name="email" placeholder="Email">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" id="password" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>
                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="remember" type="checkbox" name="remember">
                    <label class="label-checkbox100" for="remember">
                        Remember me
                    </label>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        Login
                    </button>
                </div>
                <div class="text-center p-t-90">
                    <a class="txt1" href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- start js include path -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/pages/extra_pages/login.js')}}"></script>

<!-- notifications -->
<script src="{{asset('plugins/jquery-toast/dist/jquery.toast.min.js')}}"></script>
<script src="{{asset('plugins/jquery-toast/dist/toast.js')}}"></script>
<!-- end js include path -->

{{--@if($errors->any())
    <script>
    @foreach($errors->all() as $error)

    $.toast({
        heading: 'Welcome to my Elite admin',
        text: '{{$error}}',
        position: 'top-right',
        loaderBg:'#ff6849',
        icon: 'error',
        hideAfter: 3500

    });

    @endforeach
    </script>
@endif--}}

@error('email')
<script>
    $.toast({
        heading: 'Email',
        text: '{{$message}}',
        position: 'top-right',
        loaderBg: '#ff6849',
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
        loaderBg: '#ff6849',
        icon: 'error',
        hideAfter: 3500

    });
</script>
@enderror
</body>
</html>
