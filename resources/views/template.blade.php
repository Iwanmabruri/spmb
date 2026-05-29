<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('assets') }}/img/logo.webp" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Codescandy" name="author">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets_admin') }}/libs/swiper/swiper-bundle.min.css" />
    <!-- Favicon icon-->
    {{-- <link rel="apple-touch-icon" sizes="57x57"
        href="{{ asset('assets_admin') }}/images/favicon/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60"
        href="{{ asset('assets_admin') }}/images/favicon/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{ asset('assets_admin') }}/images/favicon/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{ asset('assets_admin') }}/images/favicon/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('assets_admin') }}/images/favicon/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ asset('assets_admin') }}/images/favicon/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ asset('assets_admin') }}/images/favicon/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ asset('assets_admin') }}/images/favicon/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets_admin') }}/images/favicon/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets_admin') }}/images/favicon/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets_admin') }}/images/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ asset('assets_admin') }}/images/favicon/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets_admin') }}/images/favicon/favicon-16x16.png" /> --}}

    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="{{ asset('assets') }}/img/logo.webp" />
    <meta name="theme-color" content="#ffffff" />
    <!-- Color modes -->
    <script src="{{ asset('assets_admin') }}/js/vendors/color-modes.js"></script>
    <script>
        if (localStorage.getItem('sidebarExpanded') === 'false') {
            document.documentElement.classList.add('collapsed');
            document.documentElement.classList.remove('expanded');
        } else {
            document.documentElement.classList.remove('collapsed');
            document.documentElement.classList.add('expanded');
        }
    </script>
    <!-- Libs CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800&amp;display=swap" />
    <link rel="stylesheet" href="{{ asset('assets_admin') }}/libs/simplebar/dist/simplebar.min.css" />
    <link rel="stylesheet" href="{{ asset('assets_admin') }}/libs/%40tabler/icons-webfont/tabler-icons.min.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets_admin') }}/css/theme.min.css">
    <link rel="stylesheet" href="{{ asset('assets_admin') }}/datatables.net-bs5/css/dataTables.bootstrap5.min.css">

    <style>
        @yield('CSSManual')
    </style>

    <style>
        #loader {
            position: fixed;
            inset: 0;
            background: rgba(255, 255, 255, 0.4);
            /* transparan */
            justify-content: center;
            align-items: center;
            z-index: 9999;
            display: none;
        }

        .spinner {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 9px solid;
            border-color: #474bff #0000;
            animation: spinner-0tkp9a 1s infinite;
        }

        @keyframes spinner-0tkp9a {
            to {
                transform: rotate(.5turn);
            }
        }

        .swal2-container {
            z-index: 20000 !important;
        }
    </style>
</head>

<body>
    <!-- Vertical Sidebar -->
    <div id="loader">
        <div class="spinner"></div>
    </div>
    <div>
        <div id="miniSidebar">
            <div class="brand-logo">
                <a class='d-none d-md-flex align-items-center gap-2' href='{{ route('dashboard') }}'>
                    <img width="35px" src="{{ asset('assets') }}/img/logo.webp" alt="" />
                    <span class="fw-bold fs-4  site-logo-text">S P M B</span>
                </a>
            </div>
            <ul class="navbar-nav flex-column  ">
                <!-- Nav item -->
                <li class="nav-item">
                    <a class='nav-link' href='{{ route('dashboard') }}'><span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-layout-dashboard">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                <path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                <path
                                    d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                <path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                            </svg>
                            <span class="text">Dashboard</span>
                    </a>
                </li>

                <!-- Nav item -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#e-mail" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-brand-couchdb">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M6 12h12v-2a2 2 0 0 1 2 -2a2 2 0 0 0 -2 -2h-12a2 2 0 0 0 -2 2a2 2 0 0 1 2 2v2" />
                                <path d="M6 15h12" />
                                <path d="M6 18h12" />
                                <path d="M21 11v7" />
                                <path d="M3 11v7" />
                            </svg>
                        </span>
                        <span class="text">Data Master</span>
                    </a>
                    <ul class="dropdown-menu flex-column">
                        <li class="nav-item">
                            <a class='nav-link' href='{{ route('jurusan') }}'>Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link' href='{{ route('agama') }}'>Agama</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link' href='{{ route('pendidikan') }}'>Pendidikan</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link' href='{{ route('pekerjaan') }}'>Pekerjaan</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link' href='{{ route('penghasilan') }}'>Penghasilan</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ambildata') }}">
                        <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-cloud-down">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 18.004h-5.343c-2.572 -.004 -4.657 -2.011 -4.657 -4.487c0 -2.475 2.085 -4.482 4.657 -4.482c.393 -1.762 1.794 -3.2 3.675 -3.773c1.88 -.572 3.956 -.193 5.444 1c1.488 1.19 2.162 3.007 1.77 4.769h.99c1.38 0 2.573 .813 3.13 1.99" />
                                <path d="M19 16v6" />
                                <path d="M22 19l-3 3l-3 -3" />
                            </svg>
                        </span>
                        <span class="text">Ambil Data</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('murid') }}">
                        <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-users-group">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                                <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                                <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                            </svg>
                        </span>
                        <span class="text">Data Siswa</span>
                    </a>
                </li>
                @if ($user->role == 'admin')
                    <li class="nav-item">
                        <div class="nav-heading">Pages</div>
                        <hr class="mx-5 nav-line mb-1" />
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('banner.index') }}">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-photo">

                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M15 8h.01" />
                                    <path
                                        d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                                    <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                                    <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                                </svg>
                            </span>

                            <span class="text">Update Banner</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mitra.index') }}">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-building-factory">

                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 21h18" />
                                    <path d="M5 21v-12l5 4v-4l5 4h4" />
                                    <path d="M19 21v-10l-4 3" />
                                    <path d="M9 17h1" />
                                    <path d="M14 17h1" />
                                </svg>
                            </span>

                            <span class="text">Mitra Industri/Brand</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.data') }}">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-settings">

                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                </svg>
                            </span>

                            <span class="text"> Setting Users</span>
                        </a>
                    </li>
                @endif

            </ul>

        </div>


        <div class="offcanvasNav offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">

                <a class='d-flex align-items-center gap-2' href='../index-2.html'>
                    <img width="5px" src="{{ asset('assets') }}/img/logo.webp" alt="" />
                    <span class="fw-bold fs-4  site-logo-text">SPMB</span>
                </a>

                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <ul class="navbar-nav flex-column  ">
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class='nav-link' href='{{ route('dashboard') }}'><span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-layout-dashboard">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                    <path
                                        d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                    <path
                                        d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                    <path
                                        d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                </svg>
                                <span class="text">Dashboard</span>
                        </a>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#e-mail" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-brand-couchdb">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M6 12h12v-2a2 2 0 0 1 2 -2a2 2 0 0 0 -2 -2h-12a2 2 0 0 0 -2 2a2 2 0 0 1 2 2v2" />
                                    <path d="M6 15h12" />
                                    <path d="M6 18h12" />
                                    <path d="M21 11v7" />
                                    <path d="M3 11v7" />
                                </svg>
                            </span>
                            <span class="text">Data Master</span>
                        </a>
                        <ul class="dropdown-menu flex-column">
                            <li class="nav-item">
                                <a class='nav-link' href='{{ route('jurusan') }}'>Jurusan</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='{{ route('agama') }}'>Agama</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='{{ route('pendidikan') }}'>Pendidikan</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='{{ route('pekerjaan') }}'>Pekerjaan</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='{{ route('penghasilan') }}'>Penghasilan</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ambildata') }}">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-cloud-down">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M12 18.004h-5.343c-2.572 -.004 -4.657 -2.011 -4.657 -4.487c0 -2.475 2.085 -4.482 4.657 -4.482c.393 -1.762 1.794 -3.2 3.675 -3.773c1.88 -.572 3.956 -.193 5.444 1c1.488 1.19 2.162 3.007 1.77 4.769h.99c1.38 0 2.573 .813 3.13 1.99" />
                                    <path d="M19 16v6" />
                                    <path d="M22 19l-3 3l-3 -3" />
                                </svg>
                            </span>
                            <span class="text">Ambil Data</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('murid') }}">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-users-group">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                                    <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                                </svg>
                            </span>
                            <span class="text">Data Siswa</span>
                        </a>
                    </li>
                    @if ($user->role == 'admin')
                        <li class="nav-item">
                            <div class="nav-heading">Pages</div>
                            <hr class="mx-5 nav-line mb-1" />
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('banner.index') }}">
                                <span class="nav-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-photo">

                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M15 8h.01" />
                                        <path
                                            d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                                        <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" />
                                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                                    </svg>
                                </span>

                                <span class="text">Update Banner</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mitra.index') }}">
                                <span class="nav-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-building-factory">

                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 21h18" />
                                        <path d="M5 21v-12l5 4v-4l5 4h4" />
                                        <path d="M19 21v-10l-4 3" />
                                        <path d="M9 17h1" />
                                        <path d="M14 17h1" />
                                    </svg>
                                </span>

                                <span class="text">Mitra Industri/Brand</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.data') }}">
                                <span class="nav-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-settings">

                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                    </svg>
                                </span>

                                <span class="text"> Setting Users</span>
                            </a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div id="content" class="position-relative h-100">
            <!-- navbar -->
            <div class="navbar-glass navbar navbar-expand-lg px-0 px-lg-4">
                <div class="container-fluid px-lg-0">
                    <div class="d-flex align-items-center gap-4">
                        <!-- Collapse -->
                        <div class="d-block d-lg-none">
                            <a class="text-inherit" data-bs-toggle="offcanvas" href="#offcanvasExample"
                                role="button" aria-controls="offcanvasExample">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 6l16 0" />
                                    <path d="M4 12l16 0" />
                                    <path d="M4 18l16 0" />
                                </svg>
                            </a>
                        </div>
                        <div class="d-none d-lg-block">
                            <a class="sidebar-toggle d-flex texttooltip p-3" href="javascript:void(0)"
                                data-template="collapseMessage">
                                <span class="collapse-mini">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-bar-left text-secondary">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M4 12l10 0" />
                                        <path d="M4 12l4 4" />
                                        <path d="M4 12l4 -4" />
                                        <path d="M20 4l0 16" />
                                    </svg>
                                </span>
                                <span class="collapse-expanded">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-bar-right text-secondary">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M20 12l-10 0" />
                                        <path d="M20 12l-4 4" />
                                        <path d="M20 12l-4 -4" />
                                        <path d="M4 4l0 16" />
                                    </svg>
                                    <div id="collapseMessage" class="d-none">
                                        <span class="small">Collapse</span>
                                    </div>
                                </span>
                            </a>
                        </div>
                        <!-- Logo -->
                        <!-- <div class="d-block d-md-none">
        <a href="{{ route('dashboard') }}">
          <img src="{{ asset('assets_admin') }}/images/brand/logo/logo-icon.svg" alt="" />
        </a>
      </div> -->
                    </div>

                    <!-- Navbar nav -->
                    <ul class="list-unstyled d-flex align-items-center mb-0 gap-2">
                        <!-- Pages link -->
                        <li>
                            <button type="button" class="btn btn-white" data-bs-toggle="modal"
                                data-bs-target="#searchModal">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <circle cx="10" cy="10" r="7" />
                                        <line x1="21" y1="21" x2="15" y2="15" />
                                    </svg>
                                </span>
                                <small class="ms-1">⌘K</small>
                            </button>
                            <!-- Modal -->
                        </li>
                        <!-- Light dark mode-->
                        <li>
                            <div class="dropdown">
                                <button class="btn btn-ghost btn-icon rounded-circle d-flex align-items-center"
                                    type="button" aria-expanded="false" data-bs-toggle="dropdown"
                                    aria-label="Toggle theme (auto)">
                                    <i class="ti theme-icon-active lh-1 fs-5"><i class="ti theme-icon ti-sun"></i></i>
                                    <span class="visually-hidden bs-theme-text">Toggle theme</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end shadow">
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center active"
                                            data-bs-theme-value="light" aria-pressed="true">
                                            <i class="ti theme-icon ti ti-sun"></i>
                                            <span class="ms-2">Light</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center"
                                            data-bs-theme-value="dark" aria-pressed="false">
                                            <i class="ti theme-icon ti-moon-stars"></i>
                                            <span class="ms-2">Dark</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center"
                                            data-bs-theme-value="auto" aria-pressed="false">
                                            <i class="ti theme-icon ti-circle-half-2"></i>
                                            <span class="ms-2">Auto</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Dropdown -->
                        <li class="ms-3 dropdown">
                            <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('assets') }}/img/logo.webp" alt=""
                                    class="avatar avatar-sm rounded-circle" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-0">
                                <div>
                                    <div class="d-flex gap-3 align-items-center border-dashed border-bottom px-4 py-4">
                                        <img src="{{ asset('assets') }}/img/logo.webp" alt=""
                                            class="avatar avatar-md rounded-circle" />
                                        <div>
                                            <h4 class="mb-0 fs-5">{{ $user->name }}</h4>
                                            <p class="mb-0 text-secondary small">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                    <div class="p-3 d-flex flex-column gap-1">
                                        <a href="{{ route('dashboard') }}"
                                            class="dropdown-item d-flex align-items-center gap-2">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-home-2">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                                    <path d="M10 12h4v4h-4z" />
                                                </svg>
                                            </span>
                                            <span>Home</span>
                                        </a>

                                    </div>
                                    <div class="border-dashed border-top mb-4 pt-4 px-6">
                                        <a href="#" onclick="logout()"
                                            class="text-secondary d-flex align-items-center gap-2">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-login-2">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M9 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                                                    <path d="M3 12h13l-3 -3" />
                                                    <path d="M13 15l3 -3" />
                                                </svg>
                                            </span>
                                            <span>Logout</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Offcanvas notification-->

            <!-- Modal of pages -->
            <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="search" class="form-control border-0 rounded-0 ps-0 form-focus-none"
                                id="globalSearchInput" placeholder="Search any word..." aria-label="Search"
                                aria-describedby="search-addon" />
                            <button type="button" class="btn btn-white btn-sm" data-bs-dismiss="modal"
                                aria-label="Close">Esc</button>
                        </div>
                        <div class="modal-body" data-simplebar="" style="height: 400px">
                            <div class="mb-4">
                                <div class="d-flex flex-column border-bottom border-dashed py-4">
                                    <div>
                                        <ul class="list-unstyled lh-lg mb-0">

                                            <li><a class='text-inherit' href='{{ url('/dashboard') }}'>Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex flex-column border-bottom border-dashed py-4">
                                    <div class="mb-2">
                                        <span class="fw-semibold text-secondary small">Menu SPMB</span>
                                    </div>
                                    <div>
                                        <ul class="list-unstyled lh-lg mb-0">
                                            <li><a class='text-inherit' href='#'> Api Santri</a>
                                            </li>
                                            <li><a class='text-inherit' href='#'>Data Siswa</a></li>
                                            <li><a class='text-inherit' href='#'>Tambahan</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex flex-column border-bottom border-dashed py-4">
                                    <div class="mb-2">
                                        <span class="fw-semibold text-secondary small">Menu Website</span>
                                    </div>
                                    <div>
                                        <ul class="list-unstyled lh-lg mb-0">
                                            <li><a class='text-inherit' href='#'>Isi 1</a>
                                            </li>
                                            <li><a class='text-inherit' href='#'>Isi 2</a></li>
                                            <li><a class='text-inherit' href='#'>Isi 3</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @yield('konten')
        </div>

        {{-- Jquery --}}
        <script src="{{ asset('assets_admin') }}/jquery/jquery.min.js"></script>

        <script src="{{ asset('assets_admin') }}/datatables/js/dataTables.min.js"></script>
        <script src="{{ asset('assets_admin') }}/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
        <script src="{{ asset('assets_admin') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets_admin') }}/libs/simplebar/dist/simplebar.min.js"></script>
        <script src="{{ asset('assets_admin') }}/parsleyjs/parsley.min.js"></script>
        <script src="{{ asset('assets_admin') }}/parsleyjs/i18n/id.js"></script>
        <!-- Theme JS -->
        <script src="{{ asset('assets_admin') }}/js/theme.min.js"></script>
        <link rel="stylesheet" href="{{ asset('assets_admin') }}/parsleyjs/parsley.css" />
        <!-- jsvectormap -->
        <script src="{{ asset('assets_admin') }}/js/vendors/sidebarnav.js"></script>
        <script src="{{ asset('assets_admin') }}/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
        <script src="{{ asset('assets_admin') }}/libs/jsvectormap/dist/maps/world.js"></script>
        <script src="{{ asset('assets_admin') }}/libs/jsvectormap/dist/maps/world-merc.js"></script>
        <script src="{{ asset('assets_admin') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
        <script src="{{ asset('assets_admin') }}/js/vendors/chart.js"></script>
        <script src="{{ asset('assets_admin') }}/libs/choices.js/public/assets/scripts/choices.min.js"></script>
        <script src="{{ asset('assets_admin') }}/js/vendors/choice.js"></script>
        <script src="{{ asset('assets_admin') }}/libs/swiper/swiper-bundle.min.js"></script>
        <script src="{{ asset('assets_admin') }}/js/vendors/swiper.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            function logout() {
                Swal.fire({
                    title: 'Anda yakin?',
                    text: 'Apakah anda yakin untuk logout?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Tidak',
                    confirmButtonText: 'Ya, logout!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('logout') }}";
                    }
                });
            }

            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}'
                });
            @endif

            @if (session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: '{{ session('error') }}'
                });
            @endif

            @if ($errors->any())
                Swal.fire({
                    icon: 'error',
                    title: 'Oppss.... Validasi gagal',
                    text: 'Silahkan cek kembali data yang masih kosong',
                    confirmButtonColor: '#16a34a'
                });
            @endif
        </script>

        @stack('scripts')


</body>

</html>
