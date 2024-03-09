<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//relasi -1 one to one 
Route::get('relasi1', function () {
    $mahasiswa = App\Models\Mahasiswa::where('nim', '=','D112111001')->first();

    return $mahasiswa->wali->nama;
});

//relasi one to many 
Route::get('relasi2', function () {
    $mahasiswa = App\Models\Mahasiswa::where('nim', '=','D112111001')->first();

    return $mahasiswa->dosen->nama;
});

Route::get('relasi3', function () {
    $dosen = App\Models\Dosen::where('nama','=','Eko')->first();

    foreach($dosen->mahasiswa as $temp){
        echo '<li> Nama : '.$temp->nama. '<strong>'.$temp->nim. '</strong></li>';
    }
});
