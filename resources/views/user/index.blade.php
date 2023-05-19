<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css"/>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
  <style>
      .container-custom {
        width: 97%; /* Atur lebar container sesuai kebutuhan */
        margin: 0 auto; /* Pusatkan container secara horizontal */
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark Shadow-lg Sticky-top">
        <div class="container-custom">
            <h1 style="color:white"><img src="{{ asset('assets/database.png') }}" width="30" alt=""> Data Pengguna </h1>
          </div>
        </nav>
        <br>
        <!-- Tampilkan Data -->
        <div class="container-custom">
          <table id="myTable" class="table-striped">
            <thead>
            <div>
              <a href="create.php" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
        <br>
              <tr>
                <th>#</th>
                <th>Aksi</th>
                <th>Avatar</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
              </tr>
              @foreach ($users as $u)
            </thead>
            <tbody>
                <tr>
                  <td>{{$u->id}}</td>
                  <td>
                    <a href="detail.blade.php?id=<?= $u['id'] ?>" class="btn btn-primary btn-sm">Detail</a>
                    <a href="edit.php?id=<?= $u['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form method="post" style="display: inline;">
                            <button type="submit" name="delete" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                  </td>
                  <td><img src="{{ asset('assets/avatar.png') }}" alt="Avatar" width="50"></td>
                  <td>{{$u->name}}</td>
                  <td>{{$u->email}}</td>
                  <td>{{$u->phone}}</td>
                  <td>{{$u->role}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
          <a href="login.php" class="btn btn-primary btn-sm float-right">Kembali</a>
        </div>

        <!-- Inisialisasi DataTables -->
        <script>
          $(document).ready(function () {
            $('#myTable').DataTable();
        });
        </script>

        </body>
        </html>
</head>
<body>

</body>
</html>
