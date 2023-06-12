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
    <title>Contact</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
            <a class="navbar-brand" href="{{ url('/') }}"><i class="fa-solid fa fa-shop me-2"></i> <img
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
                        <a class="nav-link mx-2 text-uppercase" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="{{ url('/checkout') }}">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="{{ url('/testimonial') }}">CEO Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase active" aria-current="page"
                            href="{{ url('/contact') }}">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="{{ route('cart') }}"><i
                                class="fas fa-solid fas fa-shopping-cart me-1"></i> Cart</a>
                    </li>
                    <li class="nav-item dropdown">
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
    <!--  contact -->
    <section>
        <div class="contact" style="margin-top: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @if (session('sukses'))
                            <div class="alert alert-success mt-3">
                                {{ session('sukses') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 no_ld">
                        <div class="titlepage text_align_right">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="contact_img">
                            <figure><img src="{{ asset('assets/BGS.png') }}" alt="#" /></figure>
                        </div>
                    </div>
                    <div class=" col-md-6 offset-md-1">
                        <form id="request" class="main_form" action="{{ route('landing.contact') }}"
                            method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 no_mo">
                                    <div class="titlepage text_align_right">
                                        <h2>Contact Us</h2>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Your Name" type="text" name="name"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Phone number" type="text"
                                        name="phone_number" required>
                                </div>
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Email" type="email" name="email"
                                        required>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="textarea" placeholder="Message" name="message" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="send_btn" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact -->
    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1 border-top1">
                        <a class="logo_footer" href="{{ url('/') }}"><img
                                src="{{ asset('assets/Gadget.png') }}" width="100px" alt="#" /></a>
                    </div>
                    <div class="col-md-5">
                        <div class="reader">
                            <h3>Adderess</h3>
                            <ul>
                                <li>Pekanbaru, Riau<br>
                                    Jl. Pendidikan, Sidomulyo Barat, Tampan
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4">
                        <div class="reader">
                            <h3>Phone Number</h3>
                            <ul>
                                <li><a href="https://wa.me/6282248847135">(+62) 82248847135</a><br>
                                    <a href="https://wa.me/6281372731846">(+62) 81372731846</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 ">
                        <div class="reader">
                            <h3>Email</h3>
                            <ul>
                                <li><a href="mailto:fadlypku1email@gmail.com">Fadlypku1@gmail.com<br>
                                    </a>
                                </li>
                                <li> <a href="mailto:fadlypku1email@gmail.com">Fadlypku1@gmail.com<br>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <ul class="social_icon text_align_center">
                            <li> <a href="Javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                            <li> <a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a></li>
                            <li> <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin"></i></a></li>
                            <li> <a href="https://www.instagram.com/"><i class="fab fa-instagram"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright text_align_center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <p>© 2023 Bird Gadget Store — <a href="{{ url('/') }}"> @Bird_Gadget_Store</a>
                                Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
