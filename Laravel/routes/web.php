<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $nama = "Shenila Letishya Ramona";
        
    $pelajaran = array('Algoritma & Pemrograman","Kalkulus","Pemrograman Web" ');
    return view('home',compact('nama','pelajaran'));
});

// Route::get('users','ManagementUserController@index');

Route::resource('user','ManagementUserController');