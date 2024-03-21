<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pendaftaran Peminjam</title>
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
    
    .container {
      max-width: 500px;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    
    .btn-block {
      display: block;
    }
    </style>
</head>
<body>

<!-- Main Content -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center mb-4">Form Pendaftaran Peminjam</h2>
      <form action="{{ url('logikaaa') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="id">UserID</label>
          <input type="text" class="form-control" id="UserID" name="UserID" placeholder="Masukkan nama lengkap" required>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="Username" name="Username" placeholder="Masukkan username" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="Password" name="Password" placeholder="Masukkan password" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="Email" name="Email" placeholder="Masukkan email" required>
        </div>
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" class="form-control" id="NamaLengkap" name="NamaLengkap" placeholder="Nama lengkap" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Alamat" required>
          </div>
        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
