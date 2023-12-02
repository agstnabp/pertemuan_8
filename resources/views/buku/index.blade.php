@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Latihan</title>
</head>
<body>
    <table class = "table table-striped">
        <thead>
            <tr>
                <th>no</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tgl. Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_buku as $buku)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.') }}</td>
                    <td>{{ Carbon::parse($buku->tgl_terbit)->format('d/m/Y') }}</td>
                    <td>
                        <form action="{{ route('buku.destroy', $buku->id)}}" method="post">
                            @csrf
                            <button onClick="return confirm('Yakin mau dihapus?')">Hapus</button>
                        </form>
                    </td>
                    <td>
                        <div><a href="{{route('buku.edit', $buku->id)}}">Update</a></div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h2>banyak data =  {{$banyak_data}} </h2>
    <h2>total harga =  {{$total_harga}} </h2>
    <p align="left"><a href="{{ route('buku.create') }}">Tambah Buku</a></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>