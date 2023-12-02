
@extends('layouts.main')

@section('title', 'Gudang Barang')

@section('content')
<h1>Gudang Barang</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Id Supplier</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_barang as $barang)
            <tr>
                <td>{{ $barang->id }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ "Rp ".number_format($barang->harga, 2, ',', '.') }}</td>
                <td>{{ $barang->stok }}</td>
                <td>{{ $barang->id_supplier }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
