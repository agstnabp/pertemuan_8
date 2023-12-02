
@extends('layouts.main2')

@section('title', 'Pemain')

@section('content')
@include('header')
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama Pemain</th>
            <th>Nomor Punggung</th>
            <th>Posisi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_pemain as $pemain)
            <tr>
                <td>{{ $pemain->id }}</td>
                <td>{{ $pemain->nama_pemain }}</td>
                <td>{{ $pemain->no_punggung}}</td>
                <td>{{ $pemain->posisi }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
