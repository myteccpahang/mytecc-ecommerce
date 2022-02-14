<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Titillium+Web:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header class="sticky-top">
            <nav class="navbar navbar-dark navbar-expand-lg site-header">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/mytecc-logo.png') }}" width="50px" height="50px" alt="MYTECC Logo" class="me-3">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item me-3">
                                <a class="nav-link active" aria-current="page" href="https://myteccpahang.com/">Home</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" href="#products">Products</a>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fs-3 bi bi-person"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <!-- Authentication Links -->
                                        @guest
                                            @if (Route::has('login'))
                                                <li><a class="dropdown-item" href="{{ route('login') }}">Log In</a></li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li><a class="dropdown-item" href="{{ route('register') }}">Sign Up</a></li>
                                            @endif
                                        @else
                                            <li>
                                                <a class="dropdown-item" href="#">Profile: {{ Auth::user()->username }}</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">My Order(s)</a>
                                            </li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li>
                                                <a class="dropdown-item link-danger" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        @endguest
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link">
                                        <i class="fs-3 bi bi-bag"></i>
                                        <span class="badge rounded-pill bg-danger align-middle">3</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
            <div class="position-fixed mx-3" style="bottom:20px; right: 20px;">
                <a href="https://wa.me/60196021939?text=Message%20from%20MYTECC%20Shop:%20Hello!%20I%20have%20an%20enquiry." target="_blank" class="btn btn-danger rounded-circle"><i class="fs-3 bi bi-whatsapp"></i></a>
            </div>
        </main>

        <footer class="container py-5">
            <div class="row">
                <div class="col-12 col-md">
                    <img src="{{ asset('img/mytecc-logo.png') }}" width="24px" height="24px" class="mb-1" alt="MYTECC Logo">
                    <p class="d-block mb-3 text-muted f-2">© {{ date('Y') }} MYTECC. All Right Reserved.</p>
                </div>
                <div class="col-6 col-md">
                    <h5>Customer Service</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Contact Us</a></li>
                        <li><a class="link-secondary" href="https://links.myteccpahang.com/" target="_blank">Links</a></li>
                        <li><a class="link-secondary" href="#">Track Order</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About Us</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Team</a></li>
                        <li><a class="link-secondary" href="#">Developers</a></li>
                        <li><a class="link-secondary" href="#">Privacy Policy</a></li>
                        <li><a class="link-secondary" href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Payment</h5>
                    <ul class="list-unstyled text-small">
                        <li><img src="{{ asset('img/stripe.png') }}" width="auto" height="30px" alt="Stripe Payment"></li>
                    </ul>

                    <h5>Delivery</h5>
                    <ul class="list-unstyled text-small">
                        <li><img src="{{ asset('img/jnt.png') }}" width="auto" height="30px" alt="J&T Express"></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Find Us On</h5>
                    <ul class="list-unstyled text-small d-flex">
                        <li><a class="link-secondary me-3" href="https://instagram.com/myteccpahang/" target="_blank"><i class="fs-5 bi bi-instagram"></i></a></li>
                        <li><a class="link-secondary me-3" href="https://twitter.com/myteccPahang/" target="_blank"><i class="fs-5 bi bi-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
