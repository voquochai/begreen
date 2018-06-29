<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Laravel') }}
    </title>

    <!-- Styles -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all">
    <link rel="stylesheet" href="{{ asset('public/packages/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/packages/simple-line-icons/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/packages/bootstrap/css/bootstrap.min.css') }}">
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link rel="stylesheet" href="{{ asset('public/admin/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/css/plugins.css') }}">
    <!-- END THEME GLOBAL STYLES -->

    <!-- BEGIN THEME LAYOUT STYLES -->
    <link rel="stylesheet" href="{{ asset('public/admin/css/login.css') }}">
    <!-- END THEME LAYOUT STYLES -->
    <link href="{{ asset('public/uploads/photos/'.config('settings.favicon')) }}" rel="shortcut icon" type="image/x-icon" />
</head>
<body class="login">
    <div class="logo">
        <a href="index.html"> <img src="{{ asset('public/images/logo-big.png') }}" alt="" /> </a>
    </div>
    <div class="content">
        <form class="login-form" role="form" method="POST" action="{{ route('admin.login') }}">
            {{ csrf_field() }}
            <h3 class="form-title font-green">Administrator</h3>
            <div class="row">@include('admin.blocks.messages')</div>
            <div class="form-group">
                <label for="email" class="control-label visible-ie8 visible-ie9">Email</label>
                <input type="text" class="form-control form-control-solid placeholder-no-fix" name="email" value="{{ old('email') }}" autocomplete="off" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="password" class="control-label visible-ie8 visible-ie9">Password</label>
                <input type="password" class="form-control form-control-solid placeholder-no-fix" name="password" autocomplete="off" placeholder="Password">
            </div>

            <div class="form-actions">
                <div>
                    <label class="rememberme check mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Ghi nhớ
                        <span></span>
                    </label>
                    |
                    <a href="{{ route('admin.password.request') }}" id="forget-password" class="forget-password">Quên mật khẩu?</a>
                </div>
                <button type="submit" class="btn green uppercase">Đăng nhập</button>
            </div>
        </form>
    </div>

    <!-- SCRIPT -->
    <script>
        @php
        $routeArray = explode('.',Route::currentRouteName());
        $routeName = $routeArray[1].'.'.( isset($_GET['type']) ? $_GET['type'] : '');
        @endphp
        window.Laravel = {!! json_encode([
            'csrfToken' =>  csrf_token(),
            'baseUrl'   =>  url('/'),
            'routeName'   =>  $routeName,
        ]) !!}
    </script>
    <!-- BEGIN CORE PLUGINS -->
    <script src="{{ asset('public/packages/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/packages/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{ asset('public/admin/js/app.js') }}" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    
</body>
</html>