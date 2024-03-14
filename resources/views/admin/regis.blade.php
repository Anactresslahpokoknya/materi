<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi | Admin</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <div id="main" class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width: 400px">
                <div class="card-body">
                    <h4 class="h4">Daftarkan diri anda</h4>

                    @if (session('pesan'))
                        <div class="alert alert-success" role="alert">
                            {{ session('pesan') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-success" role="alert">
                            gagal registrasi
                        </div>
                    @endif

                    <form action="{{ url('simpan/registrasi/admin') }}" method="post">
                        @csrf
                        <label for="AdminID" class="form-label">ADMIN ID </label>
                        <input type="text" class="form-control" name="AdminID" id="AdminID"
                            placeholder="Admin ID  ">
                        @error('AdminID')
                            <div class="form-text">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="Username" class="form-label">USERNAME</label>
                            <input type="text" class="form-control" name="Username" id="Username"
                                placeholder="USERNAME">
                        </div>
                        <div class="mb-3">
                            <label for="Password" class="form-label">PASSWORD</label>
                            <input type="password" class="form-control" name="Password" id="Password"
                                placeholder="PASSWORD">
                        </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn form-control btn-primary mb-2">Registrasi</button>
                            <a href="{{ url('dashboard/admin') }}" class="btn form-control btn-danger mb-2">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
