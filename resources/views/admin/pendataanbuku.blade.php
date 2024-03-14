<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi | Buku</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
    <style>body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
      }
      
      .container {
        max-width: 400px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      
      form {
        display: flex;
        flex-direction: column;
      }
      
      h2 {
        text-align: center;
      }
      
      .book-cover {
        text-align: center;
        margin-bottom: 20px;
      }
      
      .book-cover img {
        max-width: 100%;
        height: auto;
        border-radius: 4px;
      }
      
      label {
        margin-top: 10px;
      }
      
      input {
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }
      
      button {
        background-color: #007BFF;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      
      button:hover {
        background-color: #0056b3;
      }
      </style>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Formulir Buku</title>
</head>
<body>
  <div class="container">
    <form action="{{ url('simpan/registrasi/buku') }}" method="post" id="bookForm">
        @csrf
      <h2>Formulir Buku</h2>
      <div class="book-cover">
        <img src="https://ilmu-pendidikan.net/wp-content/uploads/2014/09/Buku-Perpustakaan-Sekolah.jpg" alt="Book Cover">
      </div>

      <label for="BukuID">Buku ID:</label>
      <input type="text" id="BukuID" name="BukuID" required>

      <label for="Judul">Judul:</label>
      <input type="text" id="Judul" name="Judul" required>

      <label for="Penulis">Penulis:</label>
      <input type="text" id="Penulis" name="Penulis" required>

      <label for="Penerbit">Penerbit:</label>
      <input type="text" id="Penerbit" name="Penerbit" required>

      <label for="TahunTerbit">Tahun Terbit:</label>
      <input type="date" id="TahunTerbit" name="TahunTerbit" required>

      <button type="submit">Kirim</button>
      <br><br>
      <a href="{{ url('dashboard/admin') }}" class="btn btn-danger">Kembali</a>
    </form>
  </div>
</body>
</html>

</body>
</html>