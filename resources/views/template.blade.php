<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dasher-ui.netlify.app/pages/blank by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jan 2026 15:56:21 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Codescandy" name="author">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets_admin') }}/libs/swiper/swiper-bundle.min.css" />
    <!-- Favicon icon-->
    <link rel="apple-touch-icon" sizes="57x57"
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
        href="{{ asset('assets_admin') }}/images/favicon/favicon-16x16.png" />

    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="{{ asset('assets') }}/img/logo1.png" />
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

</head>

<body>
    <!-- Vertical Sidebar -->
    <div>
        <div id="miniSidebar">
            <div class="brand-logo">
                <a class='d-none d-md-flex align-items-center gap-2' href='{{ url('/dashboard') }}'>
                    <img width="35px" src="{{ asset('assets') }}/img/logo.webp" alt="" />
                    <span class="fw-bold fs-4  site-logo-text">S P M B</span>
                </a>
            </div>
            <ul class="navbar-nav flex-column  ">
                <!-- Nav item -->
                <li class="nav-item">
                    <a class='nav-link' href='{{ url('/dashboard') }}'><span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-article">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                <path d="M7 8h10" />
                                <path d="M7 12h10" />
                                <path d="M7 16h10" />
                            </svg>
                            <span class="text">Dashboard</span></a>
                </li>

                <!-- Nav item -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#e-mail" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                        </span>
                        <span class="text">Menu SPMB</span>
                    </a>
                    <ul class="dropdown-menu flex-column">
                        <li class="nav-item">
                            <a class='nav-link' href='#'>Api Santri</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link' href='#'>Data Siswa</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link' href='#'>Tambahan</a>
                        </li>
                    </ul>
                </li>
                <!-- Nav item -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-menu-deep">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 6h16" />
                                <path d="M7 12h13" />
                                <path d="M10 18h10" />
                            </svg>
                        </span>
                        <span class="text">Menu Website</span>
                    </a>
                    <ul class="dropdown-menu flex-column">
                        <li class="nav-item">
                            <a class='nav-link' href='#'>Isi 1</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link' href='#'>Isi 2</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link' href='#'>Isi 3</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <div class="nav-heading">Pages</div>
                    <hr class="mx-5 nav-line mb-1" />
                </li>
                <!-- Nav item -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-file">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                            </svg>
                        </span>
                        <span class="text">Pages</span>
                    </a>
                    <ul class="dropdown-menu flex-column">



                        <li class="nav-item">
                            <a class='nav-link' href='error/maintenance.html'>Maintenance</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link' href='error/404-error.html'>404 Error</a>
                        </li>
                    </ul>
                </li>
                <!-- Nav item -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-lock">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                                <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                            </svg>
                        </span>
                        <span class="text">Authentication</span>
                    </a>
                    <ul class="dropdown-menu flex-column">
                        <li class="nav-item">
                            <a class='nav-link' href='authentication/sign-in.html'>Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link' href='authentication/sign-up.html'>Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link' href='authentication/forget-password.html'>Forget Password</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link' href='authentication/reset-password.html'>Reset Password</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link' href='authentication/otp-varification.html'>Otp Varification </a>
                        </li>
                    </ul>
                </li>

                

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
                        <a class='nav-link' href='../index-2.html'><span class="nav-icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-files">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z" />
                                    <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                                </svg> <span class="text">Project</span></a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class='nav-link' href='../dashboard/analytics.html'>
                            <span class="nav-icon "><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-chart-histogram">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 3v18h18" />
                                    <path d="M20 18v3" />
                                    <path d="M16 16v5" />
                                    <path d="M12 13v8" />
                                    <path d="M8 16v5" />
                                    <path d="M3 11c6 0 5 -5 9 -5s3 5 9 5" />
                                </svg></span> <span class="text">Analytics</span></a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class='nav-link' href='../dashboard/ecommerce.html'><span class="nav-icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" />
                                    <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                                </svg></span> <span class="text">Ecommerce</span></a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class='nav-link' href='../dashboard/crm.html'><span class="nav-icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                </svg></span> <span class="text">CRM</span></a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class='nav-link' href='../dashboard/finance.html'><span class="nav-icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-brand-mastercard">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                    <path d="M12 9.765a3 3 0 1 0 0 4.47" />
                                    <path
                                        d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                </svg></span> <span class="text">Finance</span></a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class='nav-link' href='../dashboard/blog.html'><span class="nav-icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-news">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                                    <path d="M8 8l4 0" />
                                    <path d="M8 12l4 0" />
                                    <path d="M8 16l4 0" />
                                </svg></span> <span class="text">Blog</span></a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class='nav-link' href='../dashboard/file.html'><span class="nav-icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-file-text">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                    <path d="M9 9l1 0" />
                                    <path d="M9 13l6 0" />
                                    <path d="M9 17l6 0" />
                                </svg></span> <span class="text">File</span></a>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="nav-heading">Apps</div>
                        <hr class="mx-5 nav-line mb-1" />
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class='nav-link' href='../apps/calendar.html'>
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-calendar">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                                    <path d="M16 3v4" />
                                    <path d="M8 3v4" />
                                    <path d="M4 11h16" />
                                    <path d="M11 15h1" />
                                    <path d="M12 15v3" />
                                </svg>
                            </span>
                            <span class="text">Calendar</span>
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class='nav-link' href='../apps/chat-app.html'>
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-message-dots">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 11v.01" />
                                    <path d="M8 11v.01" />
                                    <path d="M16 11v.01" />
                                    <path
                                        d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3z" />
                                </svg>
                            </span>
                            <span class="text">Chat</span>
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class='nav-link' href='../apps/kanban.html'>
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-brand-trello">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                    <path d="M7 7h3v10h-3z" />
                                    <path d="M14 7h3v6h-3z" />
                                </svg>
                            </span>
                            <span class="text">Kanban</span>
                        </a>

                    </li>
                    <!-- Nav item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#e-mail" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-mail">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                    <path d="M3 7l9 6l9 -6" />
                                </svg>
                            </span>
                            <span class="text">Email</span>
                        </a>
                        <ul class="dropdown-menu flex-column">
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/email/mail.html'>Inbox</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/email/mail-details.html'>Email Detail</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/email/compose.html'>Compose</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag-edit">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M11 21h-2.426a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304h11.339a2 2 0 0 1 1.977 2.304l-.109 .707" />
                                    <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                                    <path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z" />
                                </svg>
                            </span>
                            <span class="text">Ecommerce</span>
                        </a>
                        <ul class="dropdown-menu flex-column">
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/e-commerce/ecommerce-products.html'>Products</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link'
                                    href='../apps/e-commerce/ecommerce-products-details.html'>Product Detail</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/e-commerce/ecommerce-product-edit.html'>Add
                                    Product</a>
                            </li>

                            <li class="nav-item">
                                <a class='nav-link' href='../apps/e-commerce/ecommerce-cart.html'>Shopping cart</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/e-commerce/ecommerce-checkout.html'>Checkout</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/e-commerce/ecommerce-customer.html'>Customer</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/e-commerce/ecommerce-seller.html'>Seller</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M17 17h-11v-14h-2" />
                                    <path d="M6 5l14 1l-1 7h-13" />
                                </svg>
                            </span>
                            <span class="text">Order</span>
                        </a>
                        <ul class="dropdown-menu flex-column">
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/order/order-list.html'>List</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/order/order-details.html'>Details</a>
                            </li>

                        </ul>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-file-analytics">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                    <path d="M9 17l0 -5" />
                                    <path d="M12 17l0 -1" />
                                    <path d="M15 17l0 -3" />
                                </svg>
                            </span>
                            <span class="text">Project</span>
                        </a>
                        <ul class="dropdown-menu flex-column">
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/project/project-grid.html'>Grid</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/project/project-list.html'>List</a>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="nav-link dropdown-toggle" href="#!" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Single</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class='nav-link'
                                            href='../apps/project/project-overview.html'>Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class='nav-link' href='../apps/project/project-task.html'>Task</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class='nav-link' href='../apps/project/project-budget.html'>Budget</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class='nav-link' href='../apps/project/project-files.html'>Files</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class='nav-link' href='../apps/project/project-team.html'>Team</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/project/add-project.html'>Create Project</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-chart-pie-2">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 3v9h9" />
                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                </svg>
                            </span>
                            <span class="text">CRM</span>
                        </a>
                        <ul class="dropdown-menu flex-column">
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/crm/crm-contacts.html'>Contacts</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/crm/crm-company.html'>Company</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/crm/deals.html'>Deals</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/crm/deals-single.html'>Deals Single</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-invoice">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path
                                        d="M19 12v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-14a2 2 0 0 1 2 -2h7l5 5v4.25" />
                                </svg>
                            </span>
                            <span class="text">Invoice</span>
                        </a>
                        <ul class="dropdown-menu flex-column">
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/invoice/invoice-list.html'>List</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/invoice/invoice-detail.html'>Detail</a>
                            </li>

                        </ul>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                            </span>
                            <span class="text">Profile</span>
                        </a>
                        <ul class="dropdown-menu flex-column">
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/profile/profile-overview.html'>Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/profile/profile-project.html'>Project</a>
                            </li>

                            <li class="nav-item">
                                <a class='nav-link' href='../apps/profile/profile-team.html'>Team</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/profile/profile-followers.html'>Followers</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/profile/profile-activity.html'>Activity</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/profile/profile-settings.html'>Settings</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-article">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M7 8h10" />
                                    <path d="M7 12h10" />
                                    <path d="M7 16h10" />
                                </svg>
                            </span>
                            <span class="text">Blog</span>
                        </a>
                        <ul class="dropdown-menu flex-column">
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/blog/blog-list.html'>List</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/blog/blog-post-detail.html'>Details</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apps/blog/create-blog-post.html'>Create</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <div class="nav-heading">Pages</div>
                        <hr class="mx-5 nav-line mb-1" />
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-file">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                </svg>
                            </span>
                            <span class="text">Pages</span>
                        </a>
                        <ul class="dropdown-menu flex-column">



                            <li class="nav-item">
                                <a class='nav-link' href='error/maintenance.html'>Maintenance</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='error/404-error.html'>404 Error</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-lock">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                                    <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                    <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                                </svg>
                            </span>
                            <span class="text">Authentication</span>
                        </a>
                        <ul class="dropdown-menu flex-column">
                            <li class="nav-item">
                                <a class='nav-link' href='authentication/sign-in.html'>Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='authentication/sign-up.html'>Sign Up</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='authentication/forget-password.html'>Forget Password</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='authentication/reset-password.html'>Reset Password</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='authentication/otp-varification.html'>Otp Varification
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <div class="nav-heading">Components</div>
                        <hr class="mx-5 nav-line mb-1" />
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-chart-infographic">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                    <path d="M7 3v4h4" />
                                    <path d="M9 17l0 4" />
                                    <path d="M17 14l0 7" />
                                    <path d="M13 13l0 8" />
                                    <path d="M21 12l0 9" />
                                </svg>
                            </span>
                            <span class="text">Apexcharts</span>
                        </a>
                        <ul class="dropdown-menu flex-column">
                            <li class="nav-item">
                                <a class='nav-link' href='../apexchart/bar.html'>Bar</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apexchart/line.html'>Line</a>
                            </li>

                            <li class="nav-item">
                                <a class='nav-link' href='../apexchart/pie.html'>Pie</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apexchart/radialbar.html'>Radialbar</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link' href='../apexchart/radar.html'>Radar</a>
                            </li>

                            <li class="nav-item">
                                <a class='nav-link' href='../apexchart/polararea.html'>Polararea</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item dropdown">
                        <a class='nav-link' href='../components/components.html' role='button'>
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-box">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                                    <path d="M12 12l8 -4.5" />
                                    <path d="M12 12l0 9" />
                                    <path d="M12 12l-8 -4.5" />
                                </svg>
                            </span>
                            <span class="text">Components</span>
                        </a>
                    </li>


                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class='nav-link' href='../docs/index.html'>
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-file-code">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                    <path d="M10 13l-1 2l1 2" />
                                    <path d="M14 13l1 2l-1 2" />
                                </svg>
                            </span>
                            <span class="text">Docs</span>
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class='nav-link' href='../docs/index.html'>
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-git-merge">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M7 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M17 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M7 8l0 8" />
                                    <path d="M7 8a4 4 0 0 0 4 4h4" />
                                </svg>
                            </span>
                            <span class="text">Changelog</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="nav-heading">Misc</div>
                        <hr class="mx-5 nav-line mb-1" />
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-menu-deep">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 6h16" />
                                    <path d="M7 12h13" />
                                    <path d="M10 18h10" />
                                </svg>
                            </span>
                            <span class="text">Menu Level</span>
                        </a>
                        <ul class="dropdown-menu flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#!">Level 1a</a>
                            </li>

                            <li class="dropdown-submenu">
                                <a class="nav-link dropdown-toggle" href="#!" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Level 1b</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#!">Level 2a</a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="nav-link dropdown-toggle" href="#!" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Level 2b</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#!">Level 3a</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#!">Level 3b</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link disabled text-gray-400" href="#!" aria-disabled="true"
                            style="cursor:not-allowed">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-circle-off">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M20.042 16.045a9 9 0 0 0 -12.087 -12.087m-2.318 1.677a9 9 0 1 0 12.725 12.73" />
                                    <path d="M3 3l18 18" />
                                </svg>
                            </span>
                            <span class="text">Disabled</span>
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link position-relative " href="#!">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-tag">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    <path
                                        d="M3 6v5.172a2 2 0 0 0 .586 1.414l7.71 7.71a2.41 2.41 0 0 0 3.408 0l5.592 -5.592a2.41 2.41 0 0 0 0 -3.408l-7.71 -7.71a2 2 0 0 0 -1.414 -.586h-5.172a3 3 0 0 0 -3 3z" />
                                </svg>
                            </span>
                            <span class="text">Label
                                <span
                                    class="badge bg-info-subtle text-info-emphasis position-absolute end-0 me-2">New</span></span>
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link position-relative " href="https://www.google.com/" target="_blank"
                            aria-label="External Link">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-external-link">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                                    <path d="M11 13l9 -9" />
                                    <path d="M15 4h5v5" />
                                </svg>
                            </span>
                            <span class="text">External Link </span>

                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a aria-label='External Link' class='nav-link position-relative ' href='blank.html'
                            target='_blank'>
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-file">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                </svg>
                            </span>
                            <span class="text">Blank </span>

                        </a>
                    </li>
                    <!-- Nav item -->
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
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
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
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
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
        <a href="../index.html">
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
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
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
                                    <i class="ti theme-icon-active lh-1 fs-5"><i
                                            class="ti theme-icon ti-sun"></i></i>
                                    <span class="visually-hidden bs-theme-text">Toggle theme</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end shadow">
                                    <li>
                                        <button type="button"
                                            class="dropdown-item d-flex align-items-center active"
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
                                    <div
                                        class="d-flex gap-3 align-items-center border-dashed border-bottom px-4 py-4">
                                        <img src="{{ asset('assets') }}/img/logo.webp"
                                            alt="" class="avatar avatar-md rounded-circle" />
                                        <div>
                                            <h4 class="mb-0 fs-5">Admin</h4>
                                            <p class="mb-0 text-secondar small">smknaa@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="p-3 d-flex flex-column gap-1">
                                        <a href="{{ url('/dashboard') }}" class="dropdown-item d-flex align-items-center gap-2">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"
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
                                        <a href="{{ url('/') }}" class="text-secondary d-flex align-items-center gap-2">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    height="20" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"
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
                                            
                                            <li><a class='text-inherit' href='{{ url('/dashboard') }}'>Dashboard</a></li>
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
        <script src="{{ asset('assets_admin') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets_admin') }}/libs/simplebar/dist/simplebar.min.js"></script>

        <!-- Theme JS -->
        <script src="{{ asset('assets_admin') }}/js/theme.min.js"></script>

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


</body>

</html>
