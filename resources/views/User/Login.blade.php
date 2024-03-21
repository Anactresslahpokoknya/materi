<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Peminjam</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .login-container {
      max-width: 400px;
      margin: 100px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      background-color: #fff;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="login-container">
    <h2 class="text-center mb-4">Login Peminjam</h2>
    <form action="{{ url('logikaa') }}" method="POST">
        @csrf
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="Username" name="Username" placeholder="Masukkan username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="Password" name="Password" placeholder="Masukkan password">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
