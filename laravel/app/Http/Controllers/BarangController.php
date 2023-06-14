<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function tambah_barang(){
        return view('tambah_barang');
    }

    function input_barang(Request $request){
        $barang = new barang();
        $barang->nama = $request->nama;
        $barang->kode = $request->kode;
        $barang->harga = $request->harga;
        $barang->save();
        return redirect('/tampil_barang');
    }

    function tampil_barang(){
        $data = Barang::all();
        return view('data_barang',compact(['data']));
    }

    function hapus_barang($id){
        // dd($id);
        $data = Barang::whereId($id)->delete();
        return redirect('/tampil_barang');
    }

    function edit_barang($id){
        $data = Barang::whereId($id)->first();
        return view('edit_barang',compact(['data']));
    }

    function update_barang($id,  Request $request){
        $data = Barang::whereId($id)->first();
        $data->nama = $request->nama;
        $data->kode = $request->kode;
        $data->harga = $request->harga;
        $data->save();
        return redirect('/tampil_barang');
    }
}
