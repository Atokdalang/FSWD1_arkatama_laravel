<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Pesan Kesalahan Gagal Login -->
        @error('email')
        <div class="alert alert-danger text-center">
            {{ $message }}
        </div>
        @enderror
            <!-- Pesan Berakhir -->
    <div class="wrapper">
        <div class="logo">
            <img src="{{asset('assets/Gadget.png')}}" alt="logo">
        </div>
        <br>
        <div class="text-center mt-4 name">
            Bird Gadget Store
        </div>
        <form class="p-3 mt-3" action="{{url('/login')}}" method="post">
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" name="email" placeholder="Masukkan Email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn mt-3">Login</button>
        </form>
        <br>
        <div class="text-center">
            <a href="{{url('/reset')}}">Forget password?</a> or <a href="{{url('/register')}}">Sign up</a>
        </div>
    </div>
</body>
<!--Javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
