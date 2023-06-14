<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index(){
        $data = "halaman1";
        return view('bebas',compact(['data']));
    }
    function halaman2(){
        $dataa = "halaman2";
        return view('halaman2',compact(['dataa']));
    }
    // function konten(){
    //     $data ={
    //         ['judul' => 'judul pertama', 'subject' => 'halo'],
    //         ['judul' => 'judul kedua', 'subject' => 'hai'],
    //         ['judul' => 'judul ketiga', 'subject' => 'gararetek']

    //     };
    //     return view('konten',compact(['data']));
    // }
}
