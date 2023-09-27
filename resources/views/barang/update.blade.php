@extends('layouts.main_layout')
@section('content')

<h1>UPDATE TABEL</h1>
<form method="post" action="{{route('barang.update', $barang->id)}}">
    @csrf
    <div class="mt-4 ms-4 mb-3">
      <label class="form-label">Nama Barang</label>
      <input type="text" name="judul" value="{{$barang->namabarang}}" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 ms-4 ">
        <label class="form-label">Harga</label>
        <input type="text" name="penulis" value="{{$barang->harga}}" aria-describedby="emailHelp">
      </div>
      <div class="mb-3 ms-4 ">
        <label class="form-label">Stok</label>
        <input type="text" name="harga" value="{{$barang->stok}}" aria-describedby="emailHelp">
      </div>
      <div class="mb-3 ms-4 ">
        <label class="form-label">Id Supplier</label>
        <input type="date" name="tgl_terbit" value="{{$barang->id_supplier}}" aria-describedby="emailHelp">
      </div>
    <div  class="mb-3 ms-4 "><button type="submit" class="btn btn-primary">Simpan</button></div>
    <div  class="mb-3 ms-4 "><a href="/barang">Batal</a></div>
</form>
@endsection;
