<?php

namespace App\Http\Controllers;
use App\Models\Apa;
use Illuminate\Http\Request;

class ApaController extends Controller
{
    function tambah_siswaa(){
        return view('tambah_siswaa');
    }

    function input_siswaa(Request $request){
        $apa = new apa();
        $apa->nama = $request->nama;
        $apa->kelas = $request->kelas;
        $apa->nis = $request->nis;
        $apa->alamat = $request->alamat;
        $apa->save();
        return redirect('/tampil_siswaa');
    }

    function tampil_siswaa(){
        $data = Apa::all();
        return view('data_siswaa',compact(['data']));
    }

    function hapus_siswaa($id){
        // dd($id);
        $data = Apa::whereId($id)->delete();
        return redirect('/tampil_siswaa');
    }

    function edit_siswaa($id){
        $data = Apa::whereId($id)->first();
        return view('edit_siswaa',compact(['data']));
    }

    function update_siswaa($id,  Request $request){
        $data = Apa::whereId($id)->first();
        $data->nis = $request->nis;
        $data->nama = $request->nama;
        $data->kelas = $request->kelas;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect('/tampil_siswaa');
    }

}
