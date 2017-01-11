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
    <link href="{{ URL::asset('/assets/css/skins/_all-skins.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/plugin/jQuery.bootgrid/jquery.bootgrid.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/admin.css?v=1') }}" rel="stylesheet" >

    <!-- Javascript Libraries -->
    <script src="{{ URL::asset('/assets/plugin/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/plugin/jQueryUI/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/plugin/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/plugin/AdminLTE/app.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/plugin/jQuery.bootgrid/jquery.bootgrid.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/plugin/jQuery.bootgrid/jquery.bootgrid.fa.min.js') }}"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini" style="min-width:500px;">
<div class="wrapper" style="position:relative;">
    <header class="main-header">
        <a href="{{URL("/admin")}}" class="logo">@lang('messages.website_title')</a>
        <nav class="navbar navbar-static-top" role="navigation" style="min-width:60rem;">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"></a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php echo $uid;?>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-body" style="border:0px">
                                <a href="{{ URL("admin/profile") }}" class="menu">My Profile</a>
                            </li>
                            <li class="user-body">
                                <a href="{{ URL("admin/logout") }}" class="menu">Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu">
                <li class="@if ($page == "statistics") active @endif" >
                    <a href="{{ URL("admin") }}">
                        <i class="fa fa-tasks"></i>
                        <span>Statistics</span>
                    </a>
                </li>
                <li class="@if ($page == "visitors") active @endif" >
                    <a href="{{ URL("admin/visitors") }}">
                        <i class="fa fa-eye"></i>
                        <span>Visitors</span>
                    </a>
                </li>
                <li class="@if ($page == "categories") active @endif" >
                    <a href="{{ URL("admin/categories") }}">
                        <i class="fa fa-list"></i>
                        <span>Categories</span>
                    </a>
                </li>
                <li class="@if ($page == "textboxes") active @endif" >
                    <a href="{{ URL("admin/textboxes") }}">
                        <i class="fa fa-paragraph"></i>
                        <span>Textboxes</span>
                    </a>
                </li>
                <li class="@if ($page == "images") active @endif" >
                    <a href="{{ URL("admin/images") }}">
                        <i class="fa fa-image"></i>
                        <span>Images</span>
                    </a>
                </li>
                <li class="@if ($page == "pages") active @endif" >
                    <a href="{{ URL("admin/pages") }}">
                        <i class="fa fa-th"></i>
                        <span>Pages</span>
                    </a>
                </li>
                
            </ul>
        </section>
    </aside>
    <input type="hidden" name="context_path" value="{{ URL("admin/") }}" />
    <div class="content-wrapper">
        @yield('content')
    </div>
</div>
</body>
</html>