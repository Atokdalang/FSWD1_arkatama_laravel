<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- css -->
  <style>
    /* Goole Fonts - Poppins */
    @import url("https://fonts.googleapis.com/css2?family=poppins:wght@300;400;500;600&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "poppins", sans-serif;
    }

    .body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #efefef;
    }

    .slide-container {
        max-width: 1120px;
        width: 100%;
        padding: 40px 0;
    }

    .slide-content {
        margin: 0 40px;
        overflow: hidden;
        border-radius: 25px;
    }

    .card {
        width: 320px;
        border-radius: 25px;
        background-color: #fff;
    }

    .image-content,
    .card-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px 14px;
    }

    .image-content {
        position: relative;
        row-gap: 5px;
        padding: 25px 0;
    }

    .overlay {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background-color: #4070F4;
        border-radius: 25px 25px 0 25px;
    }

    .overlay::before,
    .overlay::after {
        content: '';
        position: absolute;
        right: 0;
        bottom: -40px;
        height: 40px;
        width: 40px;
        background-color: #265df2;
    }

    .overlay::after {
        border-radius: 0 25px 0 0;
        background-color: #fff;
    }

    .card-image {
        position: relative;
        height: 150px;
        width: 150px;
        border-radius: 50%;
        background: #fff;
        padding: 3px;
    }

    .card-image .card-img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #4070F4;
    }

    .name {
        font-size: 18px;
        font-weight: 500;
        color: #333;
    }

    .description {
        font-size: 14px;
        color: #707070;
        text-align: center;
    }

    .button {
        border: none;
        font-size: 16px;
        color: #fff;
        padding: 8px 16px;
        background-color: #4070F4;
        border-radius: 6px;
        margin: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .button:hover {
        background: #265df2;
    }
    .swiper-navBtn {
        color: #6e93f7;
        transition: color 0,3s ease;
    }
    .swiper-navBtn:hover {
        color: #4070F4;
    }
    .swiper-navBtn::before,
    .swiper-navBtn::after {
    font-size: 40px;
    }
    .swiper-button-next {
        right: 0;
    }
    .swiper-button-prev {
        left: 0;
    }
    .swiper-pagination-bullet {
        background-color: #6e93f7;
        opacity: 1;
    }
    .swiper-pagination-bullet-active {
        background-color: #4070F4;
    }
    @media screen and (max-width: 768px) {
        .slide-content {
          margin: 0 10px;
        }
        .swiper-navBtn {
          display: none;

        }
    }
</style>

</head>
<body class="bg-light">
  <header class="bg-dark">
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('users.index') }}"><img src="{{ asset('assets/database.png') }}" width="30"> Arkatama Store </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link active" href="#">Dashboard</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="https://www.niagahoster.co.id/blog/contoh-landing-page/">Kategori</a>
                <a class="dropdown-item" href="https://getbootstrap.com/docs/5.3/components/navs-tabs/">Daftar Produk</a>
              </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengguna</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="https://www.niagahoster.co.id/blog/contoh-landing-page/">Grup Pengguna</a>
                  <a class="dropdown-item" href="{{ route('users.index') }}">Daftar Pengguna</a>
                </div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.instagram.com/">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <section class="jumbotron text-center" style="background-image: url('{{ asset('assets/background.png') }}');">
    <div class="container">
      <h1 class="display-4 text-warning">Welcome to our Landing Page</h1>
      <p class="lead text-white">Hello</p>
      <a href="#" class="btn btn-primary btn-lg">Login</a>
    </div>
  </section>

  <div class="slide-container swiper">
    <div class="slide-content">
      <div class="card-wrapper swiper-wrapper">
        <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>
              <div class="card-image">
                <img src="{{ asset('assets/avatar.png') }}" alt="" class="card-img">
              </div>
            </div>
            <div class="card-content">
              <h2 class="name">Arkatama</h2>
              <p class="description">
                Role    : Admin
                <br>
                Address : Malang, Jawa Timur.
              </p>
              <button class="button">View More</button>
            </div>
          </div>
            <div class="card swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="{{ asset('assets/avatar.png') }}" alt="" class="card-img">
                  </div>
                </div>
                <div class="card-content">
                  <h2 class="name">Fadly</h2>
                  <p class="description">
                      Role    : User
                      <br>
                      Address : Jakarta, Jawa Barat.</p>
                  <button class="button">View More</button>
                </div>
              </div>
            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="{{ asset('assets/avatar.png') }}" alt="" class="card-img">
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">Bayu</h2>
                <p class="description">
                    Role    : User
                    <br>
                    Address : Jakarta, Jawa Barat.</p>
                <button class="button">View More</button>
              </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="{{ asset('assets/avatar.png') }}" alt="" class="card-img">
                  </div>
                </div>
                <div class="card-content">
                  <h2 class="name">Digo</h2>
                  <p class="description">
                    Role    : User
                    <br>
                    Address : Padang, Sumatra Barat.</p>
                  <button class="button">View More</button>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="{{ asset('assets/avatar.png') }}" alt="" class="card-img">
                  </div>
                </div>
                <div class="card-content">
                  <h2 class="name">Abdi</h2>
                  <p class="description">
                    Role    : User
                    <br>
                    Address : Makassar, Sulawesi Selatan.</p>
                  <button class="button">View More</button>
                </div>
              </div>
              <div class="card swiper-slide">
                <div class="image-content">
                  <span class="overlay"></span>
                  <div class="card-image">
                    <img src="{{ asset('assets/avatar.png') }}" alt="" class="card-img">
                  </div>
                </div>
                <div class="card-content">
                  <h2 class="name">Wina</h2>
                  <p class="description">
                    Role    : User
                    <br>
                    Address : Palembang, Sumatra Selatan.</p>
                  <button class="button">View More</button>
                </div>
              </div>
        </div>
      </div>
    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
  </div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.slide-content', {
      slidesPerView: 3,
      spaceBetween: 25,
      loop: true,
      centerSlide: 'true',
      fade: 'true',
      grabCursor: 'true',
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
      },
    });
  </script>

  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2023 Your Company. All rights reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
