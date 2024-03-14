<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data | Buku</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
</head>

<body>
    <div class="container mt-5 ">
        <div class="card">
            <div class="card-header">
                <span class="card-title h4 text-black-50">Data Buku</span>
            </div>
            <div class="card-body">
                <table id="table-movie" class="table table-sm table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Buku ID</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku as $item)
                            <tr>
                                <td>{{ $item->BukuID }}</td>
                                <td>{{ $item->Judul }}</td>
                                <td>{{ $item->Penulis }}</td>
                                <td>{{ $item->Penerbit }}</td>
                                <td>{{ $item->TahunTerbit }}</td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $buku->onEachSide(5)->links() }}
            </div>
        </div>
    </div>
    {{-- <x-alert /> --}}
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
