<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RAMS | Login</title>

    {{-- Styles --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('template') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('template') }}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a class="font-weight-bold" href="{{ route('index') }}">
                <img src="{{ asset('img/brand.png') }}" class="img-circle elevation-3 bg-black" style="height: 75px; opacity: .8">
                <div class="brand-text">RAMS_Arung01</div>
            </a>
        </div>
        <div class="card">
        <div class="card-body login-card-body">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    @foreach ($errors->all() as $error)
                        <small>{{ $error }}</small>
                    @endforeach
                </div>
            @endif
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{{ route('login.api') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Scripts --}}
    <script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template') }}/dist/js/adminlte.min.js"></script>
</body>
</html>