<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App | Challenger</title>
    <link rel="icon" type="image/png" href="{{asset('site/images/icon.png')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('componentes/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('site/css/adminlte.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('componentes/toastr/toastr.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('componentes/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    @yield('css')
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{route('home')}}" class="brand-link">
                <i class="fa fa-globe"></i><span class="brand-text font-weight-light"> - Challenger</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('site/images/user_admin_icon.png') }}" class="img-circle elevation-2"
                            alt="Admin">
                    </div>
                    <div class="info">
                        <a class="d-block"> APP - Challenger</a>
                    </div>
                </div>
                @include('../componentes.menu');
            </div>
        </aside>


        <div class="content-wrapper">
            <section class="content">
                <br>
                @yield('content')
            </section>
        </div>
        @include('../componentes.footer');
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('componentes/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('componentes/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('site/js/adminlte.min.js') }}"></script>

    @yield('js')
</body>

</html>
