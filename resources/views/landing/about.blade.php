<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>About</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Favicon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css navbar -->
    <link rel="stylesheet" href="{{ asset('css/classy-nav.min.css') }}">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout inner_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('assets/loading.gif') }}" alt="" /></div>
    </div>
    <!-- end loader -->
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><i class="fa-solid fas fa-shop me-2"></i> <img
                    src="{{ asset('assets/Gadget.png') }}" width="40 px" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
                <div class="input-group">
                    <span class="border-info input-group-text bg-info text-white"><i
                            class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" class="form-control border-dark" style="color:#7a7a7a">
                    <button class="btn btn-info text-white">Search</button>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="ms-auto d-none d-lg-block">
                    <div class="input-group">
                        <span class="border-info input-group-text bg-info text-white"><i
                                class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control border-dark" style="color:#7a7a7a">
                        <button class="btn btn-info text-white">Search</button>
                    </div>
                </div>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="{{ url('/checkout') }}">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="{{ url('/testimonial') }}">CEO Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase active" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="{{ url('/contact') }}">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="{{ route('cart') }}"><i
                                class="fas fa-solid fas fa-shopping-cart me-1"></i> Cart</a>
                    </li>
                    <li class="dropdown">
                        @if (Auth::check())
                            @php
                                $user = Auth::user();
                            @endphp
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('storage/' . $user->profile_image) }}" alt="User Image"
                                    width="20px" height="20px"> Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('admin.profile') }}">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <!-- about -->
    <div id="about" class="about"
        style="background-image: url('{{ asset('assets/Store.png') }}'); background-size: cover; margin-top: 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <div class="titlepage text_align_right">
                        <h2 class="text-info">About Store </h2>
                        <p style="text-align:justify">Experience the story behind Bird Gadget Store. Discover our
                            passion for technology and commitment to providing innovative gadgets that elevate your
                            digital lifestyle. Explore our about page and join us on our journey to redefine the world
                            of tech. </p>
                        <a class="read_more" href="{{ url('/about') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
