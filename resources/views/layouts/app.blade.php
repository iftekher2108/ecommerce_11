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
    <link rel="stylesheet" href="{{ asset('admin_assets/plugin/DataTables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/fonts/boxicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/demo.css') }}">



</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @auth
                <!-- Menu -->
                <x-admin.nav_panel />
                <!-- / Menu -->
            @endauth

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @auth
                    <nav class="layout-navbar container-xxl bg-dark position-sticky navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                        id="layout-navbar">
                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>



                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                            <div class="ms-3 text-white">
                                @yield('title')
                            </div>

                            <!-- Search -->
                            {{-- <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none"
                                    placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div> --}}
                            <!-- /Search -->

                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <!-- Place this tag where you want the button to render. -->

                                {{-- <li class="nav-item lh-1 me-3">
                                <a class="github-button"
                                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                                    data-icon="octicon-star" data-size="large" data-show-count="true"
                                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                            </li> --}}

                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link d-flex align-items-center dropdown-toggle hide-arrow"
                                        href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online me-2">
                                            <img src="{{ Auth::user()->picture = null ? Auth::user()->picture : asset('admin_assets/image/avatar.png') }}"
                                                alt class="w-px-40 h-auto rounded-circle" />
                                        </div>

                                        <div>
                                            {{ Auth::user()->name }}
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end animate slideIn">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img src="{{ Auth::user()->picture = null ? Auth::user()->picture : asset('admin_assets/image/avatar.png') }}" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                                        <small class="text-muted">Admin</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>

                                        {{-- <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="bx bx-user me-2"></i>
                                                <span class="align-middle">My Profile</span>
                                            </a>
                                        </li> --}}

                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="bx bx-cog me-2"></i>
                                                <span class="align-middle">Settings</span>
                                            </a>
                                        </li>

                                        {{-- <li>
                                        <a class="dropdown-item" href="#">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                            </span>
                                        </a>
                                    </li> --}}

                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">Log Out</span>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ User -->
                            </ul>
                        </div>
                    </nav>
                @endauth


                <!-- / Navbar -->

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

                        @yield('content')

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
    <script src="{{ asset('admin_assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugin/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugin/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/main.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/menu.js') }}"></script> --}}
    @yield('script')
</body>

</html>
