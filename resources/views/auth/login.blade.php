<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    {{-- @vite([
    'public/admin_assets/css/core.css',
    'public/admin_assets/css/theme-default.css',
    'public/admin_assets/css/fonts/boxicons.css',
    'public/admin_assets/css/demo.css',
    ]) --}}

    <link rel="stylesheet" href="{{ asset('admin_assets/css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/theme-default.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('admin_assets/css/fonts/boxicons.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('admin_assets/css/demo.css') }}">



</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar" style="
    background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),
    url({{ asset('admin_assets/image/login-background.jpg') }});
    background-position:center;
    background-repeat:no-repeat;
    background-size:cover;
    background-attachment:fixed;
    ">
        <div class="layout-container">

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">

                        @if ($mas = session('success'))
                            <div class="alert bg-success text-white alert-dismissible" role="alert">
                                {{ $mas }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($mas = session('delete'))
                            <div class="alert bg-danger text-white alert-dismissible" role="alert">
                                {{ $mas }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="h-100 w-100 row align-items-center justify-content-center">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="card shadow">
                                        <div class="card-header p-3 bg-primary fs-3 text-white text-center">Admin Login</div>
                                        <div class="card-body p-5">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <div class="row mb-3">
                                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>

                                                    <div class="">
                                                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="password" class="form-label">{{ __('Password') }}</label>

                                                    <div class="">
                                                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Remember Me') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-0 justify-content-center">
                                                    <div class="col-md-10">
                                                        <button type="submit" class="btn w-100 btn-primary">
                                                            {{ __('Login') }}
                                                        </button>

                                                        {{-- @if (Route::has('password.request'))
                                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                {{ __('Forgot Your Password?') }}
                                                            </a>
                                                        @endif --}}
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                <p class="m-0">Developed by Iftekher Mahmud Pervez</p>
                                <p class="m-0">Version: 1.5.0</p>
                            </div>
                            <div>

                            </div>
                            <div class="d-flex gap-4 align-items-center justify-content-between">
                                <p>Rendered in {{ round((microtime(true) - LARAVEL_START) * 1000) }}ms</p>

                            </div>

                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->







    {{-- @vite([
    'resources/js/app.js',
    // 'public/admin_assets/js/bootstrap.js',
    'public/admin_assets/js/main.js',
]); --}}


    <script src="{{ asset('admin_assets/js/bootstrap.js') }}"></script>
</body>
</html>

