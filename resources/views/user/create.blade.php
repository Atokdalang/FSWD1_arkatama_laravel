<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
      .container-custom {
        width: 97%; /* untuk mengatur lebar container sesuai kebutuhan */
        margin: 0 auto; /* untuk memusatkan container secara horizontal */
      }
    </style>
    <title>Tambah Pengguna</title>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark Shadow-lg Sticky-top">
<div class="container-custom">
  <h1 style="color:white"><img src="{{ asset('assets/database.png') }}" width="30" alt=""> Tambah Pengguna </h1>
  </div>
</nav>
<br>
<form method="post" action="{{ url('/users') }}" enctype="multipart/form-data">
    @csrf
    <div class="col-md-11 mx-auto">
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" required>
        </div>
        <div class="row align-items-end">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="">Pilih Role Pengguna</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                        <button class="btn btn-primary" type="button" id="password-addon"><i class="bi bi-eye"></i> Lihat</button>
                    </div>
                </div>
                <script>
                    function togglePasswordVisibility() {
                        const passwordInput = document.querySelector('#password');
                        const passwordAddon = document.querySelector('#password-addon');
                        const passwordText = document.querySelector('#password-text');
                        passwordAddon.addEventListener("click", function(){
                            if (passwordInput.type === 'password') {
                                passwordInput.type = 'text';
                                passwordText.textContent = ' Sembunyikan Password';
                            } else {
                                passwordInput.type = 'password';
                                passwordText.textContent = ' Lihat';
                            }
                        });
                    }
    togglePasswordVisibility();
            </script>
        </div>
    </div>
    <div class="row align-items-end">
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone" class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Masukkan Nomor Telepon Anda" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="address">Alamat Lengkap</label>
        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="avatar">Unggah Foto:</label><br>
        <input type="file" name="avatar" id="avatar" required><br><br>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Batal</a>
</div>
</form>
</body>
</html>
