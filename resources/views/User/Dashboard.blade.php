<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perpustakaan Online</title>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
  <style>/* Custom CSS */
    body {
      background-color: #f8f9fa;
    }
    
    .navbar-brand {
      font-weight: bold;
    }
    
    .container {
      max-width: 800px;
    }
    
    h2 {
      color: #007bff;
    }
    
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
      transition: 0.3s;
    }
    
    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }
    </style>
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
        <li class="nav-item">
          <a class="nav-link" href="{{ url('profil/pengguna') }}">Profil</a>
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
  <h2 class="text-center mb-4">Selamat datang di Perpustakaan Online</h2>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card">
        {{-- @foreach ($bolo as $item) --}}
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQre-zjypIgAK3RSPmre60JxEM-TnPIihDENzgxigwYKa36bb-BGleIUliLt8xDyAlIKoA&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Buku 1</h5>
          <p class="card-text">Deskripsi singkat buku 1.</p>
          <a href="#" class="btn btn-primary btn-sm">Pinjam</a>
        </div>
      </div>
      {{-- @endforeach --}}
    </div>
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="https://thebedtimeguardians.com/wp-content/uploads/2019/11/Bernard-The-Bedroom-Guardian-Board-Book-800-%C3%97-800-px-300x300.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Buku 2</h5>
          <p class="card-text">Deskripsi singkat buku 2.</p>
          <a href="#" class="btn btn-primary btn-sm">Pinjam</a>
        </div>
      </div>
    </div>
    <!-- Tambahkan card buku lainnya sesuai kebutuhan -->
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
