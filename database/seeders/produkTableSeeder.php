<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\barang;

class produkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = barang::create(['nama' => 'Meja', 'id_kategori' => '1', 'qty' => '12', 'harga_beli' => '50000', 'harga_jual' => '540000', ],['nama' => 'Kursi', 'id_kategori' => '1', 'qty' => '12', 'harga_beli' => '40000', 'harga_jual' => '450000', ] );
    }
}
