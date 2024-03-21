<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Peminjam</title>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Perpustakaan Online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('tampilan/pengguna') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('dashboard/pengguna') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Buku Dipinjam</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('profil/pengguna') }}">Profil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('login/pengguna') }}">Keluar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2 class="text-center mb-4">Profil Peminjam</h2>
      <table class="table">
        <tbody>
            @foreach ($profil as $item)
          <tr>
            <th>UserID</th>
            <td>{{ $item->UserID }}</td>
          </tr>
          <tr>
            <th>Username</th>
            <td>{{ $item->Username }}</td>
          </tr>
          <tr>
            <th>Password</th>
            <td>{{ $item->Password }}</td>
          </tr>
          <tr>
            <th>Email</th>
            <td>{{ $item->Email }}</td>
          </tr>
          <tr>
            <th>Nama Lengkap</th>
            <td>{{ $item->NamaLengkap }}</td>
          </tr>
          <tr>
            <th>Alamat</th>
            <td>{{ $item->Alamat }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <button type="button" class="btn btn-primary btn-block">Edit Profil</button>
    </div>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
