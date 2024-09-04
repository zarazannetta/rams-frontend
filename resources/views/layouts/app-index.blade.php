<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAMS_Arung01</title>

    {{-- Styles --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('template') }}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ asset('template') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{ asset('plugins') }}/leaflet/leaflet.css">
    <link rel="stylesheet" href="{{ asset('css') }}/main.css">
    @stack('styles')
</head>
<body class="hold-transition layout-top-nav layout-fixed layout-navbar-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <div class="container-fluid">
                <a href="{{ route('index') }}" class="navbar-brand">
                    <img src="{{ asset('img/brand.png') }}" alt="RAMS" class="brand-image img-circle elevation-3 bg-black" style="opacity: .8">
                    <span class="brand-text font-weight-bold">RAMS_Arung01</span>
                </a>

                {{-- Right Navbar --}}
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        @if (Session::has('token'))
                            <a href="{{ route('dashboard') }}" class="nav-link font-weight-bold">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link font-weight-bold">Login</a>
                        @endif
                    </li>
                </ul>
            </div>
        </nav>

        {{-- Content --}}
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    {{-- Scripts --}}
    <script src="{{ asset('plugins') }}/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ asset('template') }}/dist/js/adminlte.min.js"></script>
    <script src="{{ asset('plugins') }}/leaflet/leaflet.js"></script>
    <script src="{{ asset('plugins') }}/leaflet-providers.min.js"></script>
    <script src="{{ asset('plugins') }}/leaflet-ajax.min.js"></script>
    @stack('scripts')
</body>
</html>