<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        Barang::create([
            'kode_barang' => 'BRG001',
            'nama' => 'Parfum Paris',
            'harga' => 10000000000,
        ]);

        Barang::create([
            'kode_barang' => 'BRG002',
            'nama' => 'Jam Tangan Rolex',
            'harga' => 20000000000,
        ]);
    }
}
