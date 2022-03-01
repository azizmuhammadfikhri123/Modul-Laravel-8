<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barangController extends Controller
{
    public function index ()
    {
        // return 'Mengakses Fungsi di Controller menggunakan route';
        // $produk = 'Aqua 400ML';
        $produk = ['buku', 'meja', 'kursi', 'sepatu'];
        return view('barang.index', compact('produk'));

    }

    public function show()
    {
        $produk = ['Aqua 115 ML','Minuman Bersoda','Buku Sejarah','Mouse','CPU'];
        return view('barang.show', compact('produk'));
    }


}
