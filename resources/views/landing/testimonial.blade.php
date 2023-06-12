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
    <title>About CEO</title>
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
                        <a class="nav-link mx-2 text-uppercase" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="{{ url('/checkout') }}">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase active" href="{{ url('/testimonial') }}">CEO Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="{{ url('/about') }}">About</a>
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
    <!-- testimonial -->
    <div class="testimonial" style="margin-top: 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-9 offset-md-3">
                    <div class="titlepage text_align_right">
                        <h2>Our Testimonial</h2>
                        <span style="text-align:justify">Our customer testimonials prove the superiority of Bird Gadget
                            Store in providing the best technology products. With friendly and responsive service, I am
                            satisfied with the shopping experience here. The quality of the products offered is very
                            satisfying, and competitive prices make Bird Gadget Store my top choice for gadget needs.
                            Thank you for the great service!</span>
                    </div>
                </div>
            </div>
            <div class="row d_flex">
                <div class="col-md-6">
                    <div id="testimo" class="carousel slide our_testimonial" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#testimo" data-slide-to="0" class="active"></li>
                            <li data-target="#testimo" data-slide-to="1"></li>
                            <li data-target="#testimo" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="carousel-caption posi_in">
                                        <div class="testomoniam_text">
                                            <i><img src="{{ asset('assets/Fadly.png') }}" width="150px"
                                                    alt="#" /></i>
                                            <h3>Fadly Indra Agustin</h3>
                                            <span>ceo</span>
                                            <p class="text-justify">is a seasoned professional occupying the CEO
                                                position at Bird Gadget Store. With a background in management and
                                                marketing, Elizabeth has brought passion and expertise to growing the
                                                Bird Gadget Store brand. In his role as CEO, he is focused on developing
                                                innovative marketing strategies, building strong customer relationships,
                                                and ensuring a great shopping experience for every consumer. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption posi_in">
                                        <div class="testomoniam_text">
                                            <i><img src="{{ asset('assets/Fajri.png') }}" width="190px"
                                                    alt="#" /></i>
                                            <h3>Muhammad Fajri Jamil</h3>
                                            <span>ceo</span>
                                            <p class="text-justify">is a talented innovator and entrepreneur who serves
                                                as the CEO of Bird Gadget Store. With years of experience in the
                                                technology industry, he has successfully steered the company's business
                                                strategy with a clear vision. Johnathan is known as a visionary leader,
                                                who is always looking for new opportunities and leading his team to
                                                success. He is determined to make Bird Gadget Store a center of
                                                excellence in providing the latest and leading gadgets in the market.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption posi_in">
                                        <div class="testomoniam_text">
                                            <i><img src="{{ asset('assets/Rizky.png') }}" width="188px"
                                                    alt="#" /></i>
                                            <h3>Rizky Rahman Salam</h3>
                                            <span>ceo</span>
                                            <p class="text-justify">is a technologist and entrepreneur who serves as
                                                the CEO of Bird Gadget Store. With rich experience in the technology
                                                industry, Michael has been instrumental in driving the company forward.
                                                As a technology-oriented leader, he is determined to keep Bird Gadget
                                                Store relevant to the latest changing trends and innovations in the
                                                gadget world. He continues to drive the development of superior products
                                                and forge strategic partnerships with leading brands</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bird_img">
                        <div class="container"><img src="{{ asset('assets/Gadget.png') }}" width="500 px" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end testimonial -->
    <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
