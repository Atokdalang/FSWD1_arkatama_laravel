<html>
  <head>
    <title>Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>

    <style>
      .container-custom {
        width: 97%; /* untuk mengatur lebar container sesuai kebutuhan */
        margin: 0 auto; /* untuk memusatkan container secara horizontal */
      }
    </style>
  </head>
  <body>
<nav class="navbar navbar-expand-lg bg-dark Shadow-lg Sticky-top">
<div class="container">
<h1 style="color:white"><img src="{{ asset('assets/database.png') }}" width="30" alt=""> Data Pengguna </h1>
<div><a href="{{ route('users.index') }}" class="btn btn-secondary float-right">Kembali</a></div>
  </div>
</nav>
<br>
    <!-- Tampilkan Data -->
    <div class="container-custom">
      <table id="myTable" class="table-striped">
        <thead>
          <tr>
            <th>#</th>
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
              <td><?= $u['id'] ?></td>
              <td><img src="{{ asset('assets/' . $u['avatar']) }}" alt="Avatar" width="50"></td>
              <td><?= $u['name'] ?></td>
              <td><?= $u['email'] ?></td>
              <td><?= $u['phone'] ?></td>
              <td><?= $u['role'] ?></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <!-- Inisialisasi DataTables -->
    <script>
      $(document).ready(function () {
        $('#myTable').DataTable();
      });
    </script>
  </body>
</html>
