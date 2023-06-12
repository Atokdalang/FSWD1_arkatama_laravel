<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>

    <!-- font style -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Ubuntu:300,400,500,700">

    <!-- Favicon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/core-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/classy-nav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>
    @auth
        <div class="superNav border-bottom py-2 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
                        <span class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3"><a
                                href="mailto:fadlypku1email@gmail.com">Fadlypku1@gmail.com</a></span>
                        <span class="me-3"><i class="fa-solid fas fa-phone me-1 text-success"></i><a
                                href="https://wa.me/6282248847135">(+62) 82248847135</a></span>
                    </div>
                    <div
                        class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
                        <span class="me-3"><i class="fa-solid fas fa-truck text-muted me-1"></i><a class="text-muted"
                                href="#">Shipping</a></span>
                        <span class="me-3"><i class="fa-solid fas fa-file text-muted me-2"></i><a class="text-muted"
                                href="https://www.privacypolicyonline.com/live.php?token=rahXz0okhrRvXSSum6K60xYQ2vlM3h4k">Policy</a></span>
                    </div>
                </div>
            </div>
        </div>

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
                            @auth
                                <a class="nav-link mx-2 text-uppercase" href="{{ url('/dashboard') }}">Dashboard</a>
                            @else
                                <a class="nav-link mx-2 text-uppercase" href="#">Product</a>
                            @endauth
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2 text-uppercase" href="{{ url('/testimonial') }}">CEO Blog</a>
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
                            <a class="nav-link mx-2 text-uppercase" href="{{ url('/cart') }}"><i
                                    class="fas fa-solid fas fa-shopping-cart me-1"></i> Cart</a>
                        </li>
                        <li class="dropdown">
                            @if (Auth::check())
                                @php
                                    $user = Auth::user();
                                @endphp
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
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


    @endauth

    <!-- ##### New Arrivals Area Start 1 ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center text-white">
                        <h2><i class="fab fa-apple" style="font-size: 24px;"></i> Product Apple</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Product Slider 1 (IPHONE 1) -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        @php
                            $hasIphoneProduct = false; // Menandakan apakah ada produk dengan kategori 'IPHONE'
                        @endphp
                        @foreach ($products as $product)
                            @if ($product->category->name == 'IPHONE 1')
                                @php
                                    $hasIphoneProduct = true;
                                @endphp
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="{{ asset('storage/' . $product->image2) }}" alt="iPhone Image">
                                        <img src="{{ asset('storage/' . $product->image1) }}" class="hover-img"
                                            alt="iPhone Image">
                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fas fa-heart"></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>favorite product</span>
                                        <a href="{{ url('/product/detail') }}" style="text-decoration: none">
                                            <h5>{{ $product->name }}</h5>
                                        </a>
                                        <p class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </p>
                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="{{ url('/product/detail', ['category' => $product->category->name]) }}"
                                                    class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <!-- End Product Slider 1 (IPHONE 1) -->

                            <!-- Start Product Slider 1 (IPHONE 2) -->
                        @endforeach
                        @php
                            $hasIphoneProduct = false; // Menandakan apakah ada produk dengan kategori 'IPHONE'
                        @endphp
                        @foreach ($products as $product)
                            @if ($product->category->name == 'IPHONE 2')
                                @php
                                    $hasIphoneProduct = true;
                                @endphp
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="{{ asset('storage/' . $product->image2) }}" alt="iPhone Image">
                                        <img src="{{ asset('storage/' . $product->image1) }}" class="hover-img"
                                            alt="iPhone Image">
                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fas fa-heart"></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>favorite product</span>
                                        <a href="{{ url('/product/detail') }}" style="text-decoration: none">
                                            <h5>{{ $product->name }}</h5>
                                        </a>
                                        <p class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </p>
                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="{{ url('/product/detail', ['category' => $product->category->name]) }}"
                                                    class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <!-- End Product Slider 1 (IPHONE 2) -->

                        <!-- Start Product Slider 1 (IPHONE 3) -->
                        @php
                            $hasIphoneProduct = false; // Menandakan apakah ada produk dengan kategori 'IPHONE'
                        @endphp
                        @foreach ($products as $product)
                            @if ($product->category->name == 'IPHONE 3')
                                @php
                                    $hasIphoneProduct = true;
                                @endphp
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="{{ asset('storage/' . $product->image2) }}" alt="iPhone Image">
                                        <img src="{{ asset('storage/' . $product->image1) }}" class="hover-img"
                                            alt="iPhone Image">
                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fas fa-heart"></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>favorite product</span>
                                        <a href="{{ url('/product/detail') }}" style="text-decoration: none">
                                            <h5>{{ $product->name }}</h5>
                                        </a>
                                        <p class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </p>
                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="{{ url('/product/detail', ['category' => $product->category->name]) }}"
                                                    class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <!-- End Product Slider 1 (IPHONE 3) -->

                        <!-- Start Product Slider 1 (IPHONE 4) -->
                        @php
                            $hasIphoneProduct = false; // Menandakan apakah ada produk dengan kategori 'IPHONE'
                        @endphp
                        @foreach ($products as $product)
                            @if ($product->category->name == 'IPHONE 4')
                                @php
                                    $hasIphoneProduct = true;
                                @endphp
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="{{ asset('storage/' . $product->image2) }}" alt="iPhone Image">
                                        <img src="{{ asset('storage/' . $product->image1) }}" class="hover-img"
                                            alt="iPhone Image">
                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fas fa-heart"></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>favorite product</span>
                                        <a href="{{ url('/product/detail') }}" style="text-decoration: none">
                                            <h5>{{ $product->name }}</h5>
                                        </a>
                                        <p class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </p>
                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="{{ url('/product/detail', ['category' => $product->category->name]) }}"
                                                    class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <!-- End Product Slider 1 (IPHONE 4) -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Slider 1 End -->
    </section>
    <!-- ##### End Area Start 1 ##### -->

    <!-- ##### New Arrivals Area Start 2 ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2><i class="fas fa-laptop" style="font-size:24px"></i> Product ROG</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Product Slider 1 (ROG 1) -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        @php
                            $hasRogProduct = false; // Menandakan apakah ada produk dengan kategori 'ROG'
                        @endphp
                        @foreach ($products as $product)
                            @if ($product->category->name == 'ROG 1')
                                @php
                                    $hasRogProduct = true;
                                @endphp
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="{{ asset('storage/' . $product->image1) }}" alt="ROG Image">
                                        <img src="{{ asset('storage/' . $product->image2) }}" class="hover-img"
                                            alt="ROG Image">
                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fas fa-heart"></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>favorite product</span>
                                        <a href="{{ url('/detail') }}" style="text-decoration: none">
                                            <h5>{{ $product->name }}</h5>
                                        </a>
                                        <p class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </p>
                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="{{ url('/product/detail', ['category' => $product->category->name]) }}"
                                                    class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <!-- End Product Slider 1 (ROG 1) -->

                        <!-- Start Product Slider 1 (ROG 2) -->
                        @php
                            $hasRogProduct = false; // Menandakan apakah ada produk dengan kategori 'ROG'
                        @endphp
                        @foreach ($products as $product)
                            @if ($product->category->name == 'ROG 2')
                                @php
                                    $hasRogProduct = true;
                                @endphp
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="{{ asset('storage/' . $product->image1) }}" alt="ROG Image">
                                        <img src="{{ asset('storage/' . $product->image2) }}" class="hover-img"
                                            alt="ROG Image">
                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fas fa-heart"></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>favorite product</span>
                                        <a href="{{ url('/detail') }}" style="text-decoration: none">
                                            <h5>{{ $product->name }}</h5>
                                        </a>
                                        <p class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </p>
                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="{{ url('/product/detail', ['category' => $product->category->name]) }}"
                                                    class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <!-- End Product Slider 1 (ROG 2) -->

                        <!-- Start Product Slider 1 (ROG 3) -->
                        @php
                            $hasRogProduct = false; // Menandakan apakah ada produk dengan kategori 'ROG'
                        @endphp
                        @foreach ($products as $product)
                            @if ($product->category->name == 'ROG 3')
                                @php
                                    $hasRogProduct = true;
                                @endphp
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="{{ asset('storage/' . $product->image1) }}" alt="ROG Image">
                                        <img src="{{ asset('storage/' . $product->image2) }}" class="hover-img"
                                            alt="ROG Image">
                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fas fa-heart"></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>favorite product</span>
                                        <a href="{{ url('/detail') }}" style="text-decoration: none">
                                            <h5>{{ $product->name }}</h5>
                                        </a>
                                        <p class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </p>
                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="{{ url('/product/detail', ['category' => $product->category->name]) }}"
                                                    class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <!-- End Product Slider 1 (ROG 3) -->

                        <!-- Start Product Slider 1 (ROG 4) -->
                        @php
                            $hasRogProduct = false; // Menandakan apakah ada produk dengan kategori 'ROG'
                        @endphp
                        @foreach ($products as $product)
                            @if ($product->category->name == 'ROG 4')
                                @php
                                    $hasRogProduct = true;
                                @endphp
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="{{ asset('storage/' . $product->image1) }}" alt="ROG Image">
                                        <img src="{{ asset('storage/' . $product->image2) }}" class="hover-img"
                                            alt="ROG Image">
                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fas fa-heart"></a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span>favorite product</span>
                                        <a href="{{ url('/detail') }}" style="text-decoration: none">
                                            <h5>{{ $product->name }}</h5>
                                        </a>
                                        <p class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </p>
                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <a href="{{ url('/product/detail', ['category' => $product->category->name]) }}"
                                                    class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <!-- End Product Slider 1 (ROG 4) -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Slider 1 End -->
    </section>
    <!-- ##### End Area Start 2 ##### -->
    <!-- ##### Brands Area Start ##### -->
    <div class="brands-area d-flex align-items-center justify-content-between bg-info">
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <a href="https://www.apple.com/id/"><img src="{{ asset('assets/Logo1.png') }}" alt=""></a>
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <a href="https://www.youtube.com/user/Apple"><img src="{{ asset('assets/LogoApple.png') }}"
                    alt=""></a>
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <a href="https://www.youtube.com/channel/UCAaMgASV4htjw3KNqh_vQv"><img
                    src="{{ asset('assets/LogoROG.png') }}" alt=""></a>
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <a href="https://rog.asus.com/"><img src="{{ asset('assets/Logo2.png') }}" alt=""></a>
        </div>
    </div>
    <!-- ##### Brands Area End ##### -->

    <!-- newsletter -->
    <section>
        <div class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="titlepage text_align_left">
                            <h2>Newsletter</h2>
                            <p style="text-align:justify">After visiting the Bird Gadget Store page, don't forget to
                                get exclusive access to the latest offers, special discounts and the latest information
                                about the world of technology. Don't miss the opportunity to be the first to know about
                                the latest products we offer. Register your email now and be part of our community which
                                is always updated with the latest developments in the gadget industry</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <form class="newslatter_form" action="{{ route('subscribe') }}" method="POST">
                            @csrf
                            <input class="news" placeholder="Enter your email" type="email" name="email">
                            <button type="submit" class="subs_btn">subscribe</button>
                        </form>
                        @if (session('Berhasil'))
                            <div class="alert alert-success mt-2">
                                {{ session('Berhasil') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end newsletter -->
    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="copyright text_align_center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <a class="logo_footer" href="{{ url('/') }}"><img
                                    src="{{ asset('assets/Gadget.png') }}" width="100px" alt="#" /></a>
                        </div>
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

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- Classy Nav js -->
    <script src="{{ asset('js/classy-nav.min.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js') }}"></script>
    <!-- CDN link Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Js loader Image -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
