<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function halo(){
        $data = 1;
        return view('halo',compact(['data']));
    }

    function index(){
        $data = User::whereId(1)->first();
        // dd($data);
        return view('user',compact(['data']));
    }

    function tambah_data(){
        return view('tambah_user');
    }

    function input_data(Request $request){
        $user = new user();
        $user->nama = $request->nama;
        $user->kelas = $request->kelas;
        $user->nis = $request->nis;
        $user->save();
        return redirect('/tampil_data');
    }

    function tampil_data(){
        $data = User::all();
        return view('data_siswa',compact(['data']));
    }

    function hapus_data($id){
        // dd($id);
        $data = User::whereId($id)->delete();
        return redirect('/tampil_data');
    }

    function edit_data($id){
        $data = User::whereId($id)->first();
        return view('edit_data',compact(['data']));
    }

    function update_data($id,  Request $request){
        $data = User::whereId($id)->first();
        $data->nama = $request->nama;
        $data->kelas = $request->kelas;
        $data->nis = $request->nis;
        $data->save();
        return redirect('/tampil_data');
    }
}
