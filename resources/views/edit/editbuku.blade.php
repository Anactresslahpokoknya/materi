{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/icons/bootstrap-icons.min.css">
</head>
<body class="bg-body-danger">
    @yield('name')
    <div class="container">
        <div class="card shadow mt-4">
            <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
                <h4 class="card-title">Data</h4>
                <a href="{{url('siswa/tambah')}}" class="btn btn-light">
                    <i class="bi bi-plus-circle-fill"></i> Tambah
                </a>
            </div>
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>BukuID</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th >Penerbit</th>
                            <th >Tahun Terbit</th>
                            <th >aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku as $faizal)
                        <tr>
                            <td>{{$faizal->BukuID}}</td>
                            <td>{{$faizal->Judul}}</td>
                            <td>{{$faizal->Penulis}}</td>
                            <td>{{$faizal->Penerbit}}</td>
                            <td>{{$faizal->TahunTerbit}}</td>
                            <td >
                                <a href="#" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html> --}}