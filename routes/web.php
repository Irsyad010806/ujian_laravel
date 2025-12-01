<?php

use Illuminate\Support\Facades\Route;
use App\Models\Barang; // tambahkan baris ini

Route::get('/', function () {
    $barang = Barang::all();
    return view('welcome', compact('barang'));
});
