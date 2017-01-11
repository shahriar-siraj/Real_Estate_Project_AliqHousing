<!DOCTYPE html>

<html style="overflow-x: auto;">
<head>
    <title>@lang('messages.website_title')</title>

    <meta name="google-site-verification" content="D5ZsoBH75_aEKD3g-nL6nrEsJ3ZIkHo_GYdpROJl1Gw" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="{{ URL::asset('assets/images/icon.png') }}"/>

    <!-- CSS -->
    <link href="{{ URL::asset('/assets/plugin/bootstrap/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ URL::asset('/assets/plugin/font-awesome-4.4.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/plugin/AdminLTE/AdminLTE.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/admin.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/login.css') }}" rel="stylesheet" >

    <!-- Javascript Libraries -->
    <script src="{{ URL::asset('/assets/plugin/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/plugin/jQueryUI/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/plugin/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/plugin/AdminLTE/app.min.js') }}"></script>
</head>
<body class="margin-0 padding-0">
<header class="main-header">
    <div class="page-logo float-left cursor-pointer" data-url="{{URL("/")}}">Housing Company</div>
</header>
<div class="content-wrapper">
    <div class="login-box">
        <div class="login-box-body">
            <form method="post" action="{{ URL('admin') }}/login">
                <div class="form-group has-feedback">
                    <input type="text" name="uid" class="form-control" placeholder="ID" />
                    <span class="fa fa-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="pass" class="form-control" placeholder="Password" />
                    <span class="fa fa-lock form-control-feedback"></span>
                </div>
                @if(isset($error))
                    <div id="div_error" class="clear alert alert-warning">{{$error}}</div>
                @endif
                <div class="row" style="margin-top:2rem;">
                    <div class="clear float_l col-xs-6 col-xs-offset-3">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">@lang('messages.log_in')</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>