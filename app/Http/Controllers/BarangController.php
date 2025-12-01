<?php
public function index()
{
    $barang = \App\Models\Barang::all();
    return view('welcome', compact('barang'));
}