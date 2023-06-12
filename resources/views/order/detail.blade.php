<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Product</title>

    <!-- font style -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Ubuntu:300,400,500,700">

    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/classy-nav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('assets/loading.gif') }}" alt="" /></div>
    </div>
    <!-- end loader -->
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

        <section class="single_product_details_area d-flex align-items-center" style="padding-bottom: 70px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Single Product Thumb -->
                        <div class="single_product_thumb clearfix">
                            <div class="product_thumbnail_slides owl-carousel">
                                <!-- Start detail Image Product IPHONE 1 -->
                                @foreach ($details as $detail)
                                    @if ($detail->category->name == 'IPHONE 1')
                                        <img src="{{ asset('storage/' . $detail->image1) }}" class="mt-3"
                                            alt="iPhone Image">
                                        <img src="{{ asset('storage/' . $detail->image2) }}" class="hover-img mt-3"
                                            alt="iPhone Image">
                                        <img src="{{ asset('storage/' . $detail->image3) }}" class="hover-img mt-3"
                                            alt="iPhone Image">
                                    @endif
                                @endforeach
                                <!-- End detail Image Product IPHONE 1 -->
                                <!-- Start detail Image Product IPHONE 2 -->
                                @foreach ($details as $detail)
                                    @if ($detail->category->name == 'IPHONE 2')
                                        <img src="{{ asset('storage/' . $detail->image1) }}" class="mt-3"
                                            alt="iPhone Image">
                                        <img src="{{ asset('storage/' . $detail->image2) }}" class="hover-img mt-3"
                                            alt="iPhone Image">
                                        <img src="{{ asset('storage/' . $detail->image3) }}" class="hover-img mt-3"
                                            alt="iPhone Image">
                                    @endif
                                @endforeach
                                <!-- End detail Image Product IPHONE 2 -->

                                <!-- Start detail Image Product IPHONE 3 -->
                                @foreach ($details as $detail)
                                    @if ($detail->category->name == 'IPHONE 3')
                                        <img src="{{ asset('storage/' . $detail->image1) }}" class="mt-3"
                                            alt="iPhone Image">
                                        <img src="{{ asset('storage/' . $detail->image2) }}" class="hover-img mt-3"
                                            alt="iPhone Image">
                                        <img src="{{ asset('storage/' . $detail->image3) }}" class="hover-img mt-3"
                                            alt="iPhone Image">
                                    @endif
                                @endforeach
                                <!-- End detail Image Product IPHONE 3 -->

                                <!-- Start detail Image Product IPHONE 4 -->
                                @foreach ($details as $detail)
                                    @if ($detail->category->name == 'IPHONE 4')
                                        <img src="{{ asset('storage/' . $detail->image1) }}" class="mt-3"
                                            alt="iPhone Image">
                                        <img src="{{ asset('storage/' . $detail->image2) }}" class="hover-img mt-3"
                                            alt="iPhone Image">
                                        <img src="{{ asset('storage/' . $detail->image3) }}" class="hover-img mt-3"
                                            alt="iPhone Image">
                                    @endif
                                @endforeach
                                <!-- End detail Image Product IPHONE 4 -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Single Product Description -->
                        <div class="single_product_desc clearfix" style="padding-top: 20px">
                            <!-- Start detail Product IPHONE 1 -->
                            @foreach ($details as $detail)
                                @if ($detail->category->name == 'IPHONE 1')
                                    <span>favorite product</span>
                                    <a href="cart.html">
                                        <h4>{{ $detail->name }}</h4>
                                    </a>
                                    <p class="product-price">Rp. {{ number_format($detail->price, 0, ',', '.') }}</p>
                                    <hr>
                                    <p class="product-desc text-justify">{!! nl2br($detail->description) !!}</p>
                                    <hr>
                                    <!-- Bagian lain dari deskripsi produk -->
                                    <!-- Cart & Favourite Box -->
                                    <div class="cart-fav-box d-flex align-items-center">
                                        <!-- Cart -->
                                        <button type="submit" name="addtocart" value="{{ $detail->id }}"
                                            class="btn essence-btn"><i class="fas fa-solid fas fa-shopping-cart me-1"></i>
                                            Add to cart</button>
                                        <!-- Favourite -->
                                        <div class="product-favourite ml-4">
                                            <a href="#" class="favme fas fa-heart"></a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <!-- End detail Product IPHONE 1 -->

                            <!-- Start detail Product IPHONE 2 -->
                            @foreach ($details as $detail)
                                @if ($detail->category->name == 'IPHONE 2')
                                    <span>favorite product</span>
                                    <a href="cart.html">
                                        <h4>{{ $detail->name }}</h4>
                                    </a>
                                    <p class="product-price">Rp. {{ number_format($detail->price, 0, ',', '.') }}</p>
                                    <hr>
                                    <p class="product-desc text-justify">{!! nl2br($detail->description) !!}</p>
                                    <hr>
                                    <!-- Bagian lain dari deskripsi produk -->
                                    <!-- Cart & Favourite Box -->
                                    <div class="cart-fav-box d-flex align-items-center">
                                        <!-- Cart -->
                                        <button type="submit" name="addtocart" value="{{ $detail->id }}"
                                            class="btn essence-btn"><i class="fas fa-solid fas fa-shopping-cart me-1"></i>
                                            Add to cart</button>
                                        <!-- Favourite -->
                                        <div class="product-favourite ml-4">
                                            <a href="#" class="favme fas fa-heart"></a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <!-- End detail Product IPHONE 2 -->

                            <!-- Start detail Product IPHONE 3 -->
                            @foreach ($details as $detail)
                                @if ($detail->category->name == 'IPHONE 3')
                                    <span>favorite product</span>
                                    <a href="cart.html">
                                        <h4>{{ $detail->name }}</h4>
                                    </a>
                                    <p class="product-price">Rp. {{ number_format($detail->price, 0, ',', '.') }}</p>
                                    <hr>
                                    <p class="product-desc text-justify">{!! nl2br($detail->description) !!}</p>
                                    <hr>
                                    <!-- Bagian lain dari deskripsi produk -->
                                    <!-- Cart & Favourite Box -->
                                    <div class="cart-fav-box d-flex align-items-center">
                                        <!-- Cart -->
                                        <a href="{{ url('/cart') }}" class="btn essence-btn"><i
                                                class="fas fa-solid fas fa-shopping-cart me-1"></i>
                                            Add to cart</a>
                                        <!-- Favourite -->
                                        <div class="product-favourite ml-4">
                                            <a href="#" class="favme fas fa-heart"></a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <!-- End detail Product IPHONE 3 -->

                            <!-- Start detail Product IPHONE 4 -->
                            @foreach ($details as $detail)
                                @if ($detail->category->name == 'IPHONE 4')
                                    <span>favorite product</span>
                                    <a href="cart.html">
                                        <h4>{{ $detail->name }}</h4>
                                    </a>
                                    <p class="product-price">Rp. {{ number_format($detail->price, 0, ',', '.') }}</p>
                                    <hr>
                                    <p class="product-desc text-justify">{!! nl2br($detail->description) !!}</p>
                                    <hr>
                                    <!-- Bagian lain dari deskripsi produk -->
                                    <!-- Cart & Favourite Box -->
                                    <div class="cart-fav-box d-flex align-items-center">
                                        <!-- Cart -->
                                        <button type="submit" name="addtocart" value="{{ $detail->id }}"
                                            class="btn essence-btn"><i class="fas fa-solid fas fa-shopping-cart me-1"></i>
                                            Add to cart</button>
                                        <!-- Favourite -->
                                        <div class="product-favourite ml-4">
                                            <a href="#" class="favme fas fa-heart"></a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <!-- End detail Product IPHONE 4 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="single_product_details_area d-flex align-items-center" style="padding-bottom: 70px">
            <!-- Category ROG -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Single Product Thumb -->
                        <div class="single_product_thumb clearfix">
                            <div class="product_thumbnail_slides owl-carousel">
                                <!-- Start detail Image Product ROG 1 -->
                                @foreach ($details as $detail)
                                    @if ($detail->category->name == 'ROG 1')
                                        <img src="{{ asset('storage/' . $detail->image1) }}" class="mt-3"
                                            alt="ROG Image">
                                        <img src="{{ asset('storage/' . $detail->image2) }}" class="hover-img mt-3"
                                            alt="ROG Image">
                                        <img src="{{ asset('storage/' . $detail->image3) }}" class="hover-img mt-3"
                                            alt="ROG Image">
                                    @endif
                                @endforeach
                                <!-- End detail Image Product ROG 1 -->

                                <!-- Start detail Image Product ROG 2 -->
                                @foreach ($details as $detail)
                                    @if ($detail->category->name == 'ROG 2')
                                        <img src="{{ asset('storage/' . $detail->image1) }}" class="mt-3"
                                            alt="ROG Image">
                                        <img src="{{ asset('storage/' . $detail->image2) }}" class="hover-img mt-3"
                                            alt="ROG Image">
                                        <img src="{{ asset('storage/' . $detail->image3) }}" class="hover-img mt-3"
                                            alt="ROG Image">
                                    @endif
                                @endforeach
                                <!-- End detail Image Product ROG 2 -->

                                <!-- Start detail Image Product ROG 3 -->
                                @foreach ($details as $detail)
                                    @if ($detail->category->name == 'ROG 3')
                                        <img src="{{ asset('storage/' . $detail->image1) }}" class="mt-3"
                                            alt="ROG Image">
                                        <img src="{{ asset('storage/' . $detail->image2) }}" class="hover-img mt-3"
                                            alt="ROG Image">
                                        <img src="{{ asset('storage/' . $detail->image3) }}" class="hover-img mt-3"
                                            alt="ROG Image">
                                    @endif
                                @endforeach
                                <!-- End detail Image Product ROG 3 -->

                                <!-- Start detail Image Product ROG 4 -->
                                @foreach ($details as $detail)
                                    @if ($detail->category->name == 'ROG 4')
                                        <img src="{{ asset('storage/' . $detail->image1) }}" class="mt-3"
                                            alt="ROG Image">
                                        <img src="{{ asset('storage/' . $detail->image2) }}" class="hover-img mt-3"
                                            alt="ROG Image">
                                        <img src="{{ asset('storage/' . $detail->image3) }}" class="hover-img mt-3"
                                            alt="ROG Image">
                                    @endif
                                @endforeach
                                <!-- End detail Image Product ROG 4 -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Single Product Description -->
                        <div class="single_product_desc clearfix">
                            <!-- Start detail Product ROG 1 -->
                            @foreach ($details as $detail)
                                @if ($detail->category->name == 'ROG 1')
                                    <span>favorite product</span>
                                    <a href="cart.html">
                                        <h4>{{ $detail->name }}</h4>
                                    </a>
                                    <p class="product-price">Rp. {{ number_format($detail->price, 0, ',', '.') }}</p>
                                    <hr>
                                    <p class="product-desc text-justify">{!! nl2br($detail->description) !!}</p>
                                    <hr>
                                    <!-- Bagian lain dari deskripsi produk -->
                                    <!-- Cart & Favourite Box -->
                                    <div class="cart-fav-box d-flex align-items-center">
                                        <!-- Cart -->
                                        <button type="submit" name="addtocart" value="{{ $detail->id }}"
                                            class="btn essence-btn"><i class="fas fa-solid fas fa-shopping-cart me-1"></i>
                                            Add to cart</button>
                                        <!-- Favourite -->
                                        <div class="product-favourite ml-4">
                                            <a href="#" class="favme fas fa-heart"></a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <!-- End detail Product ROG 1 -->

                            <!-- Start detail Product ROG 2 -->
                            @foreach ($details as $detail)
                                @if ($detail->category->name == 'ROG 2')
                                    <span>favorite product</span>
                                    <a href="cart.html">
                                        <h4>{{ $detail->name }}</h4>
                                    </a>
                                    <p class="product-price">Rp. {{ number_format($detail->price, 0, ',', '.') }}</p>
                                    <hr>
                                    <p class="product-desc text-justify">{!! nl2br($detail->description) !!}</p>
                                    <hr>
                                    <!-- Bagian lain dari deskripsi produk -->
                                    <!-- Cart & Favourite Box -->
                                    <div class="cart-fav-box d-flex align-items-center">
                                        <!-- Cart -->
                                        <button type="submit" name="addtocart" value="{{ $detail->id }}"
                                            class="btn essence-btn"><i class="fas fa-solid fas fa-shopping-cart me-1"></i>
                                            Add to cart</button>
                                        <!-- Favourite -->
                                        <div class="product-favourite ml-4">
                                            <a href="#" class="favme fas fa-heart"></a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <!-- End detail Product ROG 2 -->

                            <!-- Start detail Product ROG 3 -->
                            @foreach ($details as $detail)
                                @if ($detail->category->name == 'ROG 3')
                                    <span>favorite product</span>
                                    <a href="cart.html">
                                        <h4>{{ $detail->name }}</h4>
                                    </a>
                                    <p class="product-price">Rp. {{ number_format($detail->price, 0, ',', '.') }}</p>
                                    <hr>
                                    <p class="product-desc text-justify">{!! nl2br($detail->description) !!}</p>
                                    <hr>
                                    <!-- Bagian lain dari deskripsi produk -->
                                    <!-- Cart & Favourite Box -->
                                    <div class="cart-fav-box d-flex align-items-center">
                                        <!-- Cart -->
                                        <button type="submit" name="addtocart" value="{{ $detail->id }}"
                                            class="btn essence-btn"><i class="fas fa-solid fas fa-shopping-cart me-1"></i>
                                            Add to cart</button>
                                        <!-- Favourite -->
                                        <div class="product-favourite ml-4">
                                            <a href="#" class="favme fas fa-heart"></a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <!-- End detail Product ROG 3 -->

                            <!-- Start detail Product ROG 4 -->
                            @foreach ($details as $detail)
                                @if ($detail->category->name == 'ROG 4')
                                    <span>favorite product</span>
                                    <a href="cart.html">
                                        <h4>{{ $detail->name }}</h4>
                                    </a>
                                    <p class="product-price">Rp. {{ number_format($detail->price, 0, ',', '.') }}</p>
                                    <hr>
                                    <p class="product-desc text-justify">{!! nl2br($detail->description) !!}</p>
                                    <hr>
                                    <!-- Bagian lain dari deskripsi produk -->
                                    <!-- Cart & Favourite Box -->
                                    <div class="cart-fav-box d-flex align-items-center">
                                        <!-- Cart -->
                                        <button type="submit" name="addtocart" value="{{ $detail->id }}"
                                            class="btn essence-btn"><i class="fas fa-solid fas fa-shopping-cart me-1"></i>
                                            Add to cart</button>
                                        <!-- Favourite -->
                                        <div class="product-favourite ml-4">
                                            <a href="#" class="favme fas fa-heart"></a>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <!-- End detail Product ROG 4 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <!-- ##### Single Product Details Area End ##### -->
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
        @endauth
    </section>
    <!-- ##### Brands Area End ##### -->

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
