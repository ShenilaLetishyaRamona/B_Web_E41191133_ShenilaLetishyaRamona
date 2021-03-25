<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        // return 'Ini Profil Controller';
        $nama = "Shenila Letishya Ramona";
        
        $pelajaran = array('Algoritma & Pemrograman","Kalkulus","Pemrograman Web" ');

        return view('home',compact('nama','pelajaran'));
    }

    public function create()
    {
         return 'Method Ini Nantinya Untuk Digunakan Untuk Menampilkan Form Data User'; 
    }


    public function store(Request $request)
    {
         return 'Method Ini Nantinya Untuk Digunakan Untuk Menciptakan Data User Yang Baru'; 
    }

    public function show($id)
    {
        return 'Method Ini Mestinya Akan Digunakan Untuk Mengambil Satu Data User Dengan Id '.$id;
    }
    public function edit($id)
    {
        return 'Method Ini Nantinya Akan Digunakan Untuk Menampilkan Form Untuk Mengubah Data Edit Dengan Id '.$id;
    }
}
