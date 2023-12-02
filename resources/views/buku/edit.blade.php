@extends('layouts.main')
@section('content')

<h1>Update Table</h1>
<form method="post" action="{{route('buku.edit', $buku->id)}}">
@csrf
<div class="mt-4 ms-4 mb-3">
    <label class="form-label">Judul</label>
    <input type="text" name="judul" value="{{$buku->judul}}" aria-describedby="emailHelp">
</div>
<div class="mb-3 ms-4">
    <label class="form-label">Penulis</label>
    <input type="text" name="penulis" value="{{$buku->penulis}}" aria-describedby="emailHelp">
</div>
<div class="mb-3 ms-4">
    <label class="form-label">Harga</label>
    <input type="number" name="harga" value="{{$buku->harga}}" aria-describedby="emailHelp">
</div>
<div class="mb-3 ms-4">
    <label class="form-label">Tanggal Terbit</label>
    <input type="date" name="tgl_terbit" value="{{$buku->tgl_terbit}}" aria-describedby="emailHelp">
</div>
<div class="mb-3 ms-4"><button type="submit" class="btn btn-primary">Simpan</button></div>
<div class="mb-3 ms-4"><a href="/buku">Batal</a></div>
</form>
@endsection