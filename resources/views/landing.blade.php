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
    <title>Landing Page Arkatama Store</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.0/css/all.min.css">
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/landing/style.css') }}">
    <!-- loader CSS -->
    <link rel="stylesheet" href="{{ asset('css/landing/loader.css') }}">
</head>

<body>
    <!-- loader  -->
    <div class="loader_bg">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('success') }}
            </div>
        @endif
        <div class="loader"><img src="{{ asset('assets/loading.gif') }}" alt="" /></div>
    </div>
    <!-- end loader -->
    <!-- body -->
    <header>
        <a href="{{ url('/') }}"><img src="{{ asset('assets/Gadget.png') }}" width="60px" /></a>
        <div class="menu-btn">
            <div class="navigation">
                <div class="navigation-items">
                    <a href="{{ url('/') }}">Home</a>
                    @auth
                        <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            @csrf
                            <!-- Token CSRF (untuk Laravel) -->
                        </form>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                        <a href="{{ url('/checkout') }}">Product</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                    @endauth
                    <a href="{{ url('/about') }}">About</a>
                    <a href="{{ url('/contact') }}">Contact</a>
                </div>
            </div>
        </div>
    </header>

    <section class="home">
        @foreach ($sliders as $index => $slider)
            <img class="img-slide active" src="{{ asset('storage/' . $slider->image) }}">
        @endforeach
        <div class="content active">
            <h1><span class="blue-text">Bird</span><br><span class="gray-text">Gadget Store</span></h1>
            <b>
                <p class="justify-text">What are you waiting for? Explore our online store and find your dream
                    gadget. Get
                    attractive offers,
                    exclusive discounts, and fast delivery throughout the region. thousands of satisfied customers who
                    have
                    chosen Bird Gadget Store as their shopping destination. Let's improve your technology experience
                    with
                    us!</p>
            </b>
            @auth
                <a href="{{ url('/checkout') }}">CHECKOUT</a>
            @endauth
        </div>
        <div class="content active">
            <h1><span class="blue-text">Bird</span><br><span class="gray-text">Gadget Store</span></h1>
            <b>
                <p class="justify-text">What are you waiting for? Explore our online store and find your dream
                    gadget. Get
                    attractive offers,
                    exclusive discounts, and fast delivery throughout the region. thousands of satisfied customers who
                    have
                    chosen Bird Gadget Store as their shopping destination. Let's improve your technology experience
                    with
                    us!</p>
            </b>
            @auth
                <a href="{{ url('/checkout') }}">CHECKOUT</a>
            @endauth
        </div>
        <div class="content active">
            <h1><span class="blue-text">Bird</span><br><span class="gray-text">Gadget Store</span></h1>
            <b>
                <p class="justify-text">What are you waiting for? Explore our online store and find your dream
                    gadget. Get
                    attractive offers,
                    exclusive discounts, and fast delivery throughout the region. thousands of satisfied customers who
                    have
                    chosen Bird Gadget Store as their shopping destination. Let's improve your technology experience
                    with
                    us!</p>
            </b>
            @auth
                <a href="{{ url('/checkout') }}">CHECKOUT</a>
            @endauth
        </div>
        <div class="content active">
            <h1><span class="blue-text">Bird</span><br><span class="gray-text">Gadget Store</span></h1>
            <b>
                <p class="justify-text">What are you waiting for? Explore our online store and find your dream
                    gadget. Get
                    attractive offers,
                    exclusive discounts, and fast delivery throughout the region. thousands of satisfied customers who
                    have
                    chosen Bird Gadget Store as their shopping destination. Let's improve your technology experience
                    with
                    us!</p>
            </b>
            @auth
                <a href="{{ url('/checkout') }}">CHECKOUT</a>
            @endauth
        </div>
        <div class="content active">
            <h1><span class="blue-text">Bird</span><br><span class="gray-text">Gadget Store</span></h1>
            <b>
                <p class="justify-text">What are you waiting for? Explore our online store and find your dream
                    gadget. Get
                    attractive offers,
                    exclusive discounts, and fast delivery throughout the region. thousands of satisfied customers who
                    have
                    chosen Bird Gadget Store as their shopping destination. Let's improve your technology experience
                    with
                    us!</p>
            </b>
            @auth
                <a href="{{ url('/checkout') }}">CHECKOUT</a>
            @endauth
        </div>
        <div class="media-icons">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="slider-navigation">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
        </div>
    </section>
    <!-- Javascript files-->
    <script src="{{ asset('js/landing/main.js') }}"></script>
    <script src="{{ asset('js/landing/loader.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
