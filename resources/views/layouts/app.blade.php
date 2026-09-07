<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Zenith Lab') | WORAMAN Luxury Portal</title>

    <!-- Google Fonts & Bootstrap Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800&family=Prompt:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Scripts (Vite) -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Luxury Gold Custom Theme -->
    <link rel="stylesheet" href="{{ asset('css/luxury-gold.css') }}">
</head>
<body>
    <div id="app">
        <!-- Luxury Navigation Bar -->
        <nav class="navbar navbar-expand-lg luxury-navbar sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="bi bi-gem crown-icon"></i>
                    <span class="gold-gradient-text">WORAMAN</span>
                    <span class="badge bg-transparent border border-warning text-gold ms-1" style="font-size: 0.65rem; letter-spacing: 0.1em; border-color: rgba(212,175,55,0.4) !important;">LUXE</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="bi bi-list fs-4" style="color: var(--gold-400);"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto ps-lg-4">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                                <i class="bi bi-house-door me-1"></i>หน้าแรก
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('author/blogs*') ? 'active' : '' }}" href="/author/blogs">
                                <i class="bi bi-journal-text me-1"></i>บทความทั้งหมด
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('author/cerate*') ? 'active' : '' }}" href="/author/cerate">
                                <i class="bi bi-feather me-1"></i>เขียนบทความ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('author/abouts*') ? 'active' : '' }}" href="/author/abouts">
                                <i class="bi bi-person-badge me-1"></i>เกี่ยวกับเรา
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto align-items-lg-center">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item me-2">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        <i class="bi bi-box-arrow-in-right me-1"></i>เข้าสู่ระบบ
                                    </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-gold btn-sm" href="{{ route('register') }}">
                                        <i class="bi bi-stars me-1"></i>สมัครสมาชิก
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 32px; height: 32px; background: var(--gold-gradient); color: #181203; font-weight: 700; font-size: 0.85rem;">
                                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                    </span>
                                    <span>{{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end luxury-dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="px-3 py-2 text-gold small border-bottom border-secondary mb-2 opacity-75">
                                        <i class="bi bi-shield-check me-1"></i> สิทธิ์ผู้ดูแลระบบ
                                    </div>
                                    <a class="dropdown-item" href="/author/cerate">
                                        <i class="bi bi-feather text-gold"></i> เขียนบทความ
                                    </a>
                                    <a class="dropdown-item" href="/author/blogs">
                                        <i class="bi bi-collection text-gold"></i> บทความทั้งหมด
                                    </a>
                                    <a class="dropdown-item" href="/author/abouts">
                                        <i class="bi bi-person-lines-fill text-gold"></i> ข้อมูลผู้พัฒนา
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="bi bi-box-arrow-right"></i> ออกจากระบบ
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content Area -->
        <main class="main-content-area py-5">
            <div class="container">
                @yield('content')
            </div>
        </main>

        <!-- Luxury Footer -->
        <footer class="luxury-footer text-center">
            <div class="container">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
                    <div class="text-md-start">
                        <div class="footer-brand">
                            <i class="bi bi-gem me-1" style="color: var(--gold-400);"></i>
                            <span class="gold-gradient-text">WORAMAN LUXURY</span>
                        </div>
                        <p class="small text-muted mb-0">ระบบจัดการบทความระดับพรีเมียม สไตล์ Modern Luxury Gold</p>
                    </div>
                    <div class="text-md-end text-muted small">
                        <p class="mb-0">&copy; {{ date('Y') }} WORAMAN SURERAM. All Rights Reserved.</p>
                        <span class="text-gold opacity-75" style="font-size: 0.75rem;">CRAFTED WITH ELEGANCE & PRECISION</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
