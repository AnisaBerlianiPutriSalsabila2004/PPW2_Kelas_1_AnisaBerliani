@extends('layouts.main_layout')
@section('content')
<form method="post" action="{{route('barang.store')}}">
    @csrf
    <div class="mt-4 ms-4 mb-3">
      <label class="form-label">Nama Barang</label>
      <input type="text" name="namabarang" aria-describedby="emailHelp">
    </div>
    <div class="mb-3 ms-4 ">
        <label class="form-label">Harga</label>
        <input type="text" name="harga" aria-describedby="emailHelp">
      </div>
      <div class="mb-3 ms-4 ">
        <label class="form-label">Stok</label>
        <input type="text" name="stok" aria-describedby="emailHelp">
      </div>
      <div class="mb-3 ms-4 ">
        <label class="form-label">Id Supplier</label>
        <input type="text" name="id_supplier" aria-describedby="emailHelp">
      </div>
    <div  class="mb-3 ms-4 "><button type="submit" class="btn btn-primary">Simpan</button></div>
    <div  class="mb-3 ms-4 "><a href="/barang">Batal</a></div>
</form>
@endsection


















@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Data Barang</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>ID Supplier</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->stok }}</td>
                        <td>{{ $item->id_supplier }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
