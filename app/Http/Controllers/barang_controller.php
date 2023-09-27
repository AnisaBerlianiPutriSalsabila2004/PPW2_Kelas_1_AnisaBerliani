<?php

namespace App\Http\Controllers;

use App\Models\barang_models;
use App\Models\book_models;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class barang_controller extends Controller
{
    //
    public function index(){
        $data_barang =  barang_models::all();
        $no = 0;
        $stok = barang_models::all()->count();
        $total_harga = DB::table('barang')->sum('harga');
        return view('barang.index', compact('datanama_barang', 'total_harga', 'stok', 'id_supplier'));
    }

    public function create(){
        return view('barang.create');
    }

    public function store(Request $req){
        $barang = new barang_models;
        $barang->namabarang = $req->namabarang;
        $barang->harga = $req->harga;
        $barang->stok = $req->stok;
        $barang->id_supplier = $req->id_supplier;
        $barang->save();
        return redirect('/barang');
    }

    public function destroy($id){
        $barang = barang_models::find($id);
        $barang->delete();
        return redirect('/barang');
    }

    public function edit($id){
        $barang = barang_models::find($id);
        return view('barang.update', compact('barang'));
    }

    public function update(Request $req, $id){
        $barang = barang_models::find($id);
        $barang->namabarang = $req->namabarang;
        $barang->harga = $req->harga;
        $barang->stok = $req->stok;
        $barang->id_supplier = $req->id_supplier;
        $barang->save();
        return redirect('/barang');
    }
}
