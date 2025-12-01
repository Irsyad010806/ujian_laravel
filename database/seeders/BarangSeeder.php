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
            'nama' => 'BMW M4',
            'harga' => 3000000000,
        ]);

        Barang::create([
            'kode_barang' => 'BRG002',
            'nama' => 'Mercedes-Benz C300',
            'harga' => 3500000000,
        ]);

        Barang::create([
            'kode_barang' => 'BRG003',
            'nama' => 'Audi A6',
            'harga' => 800000000,
        ]);
    }
}
