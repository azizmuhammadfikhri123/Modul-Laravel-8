<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pelangganController extends Controller
{
    public function dataPelanggan()
    {
        $pelanggan = ['Ina','Ani','Ita','Indra'];
        return $pelanggan;
    }

    public function index()
    {
        // echo "ini index dari controller";
        $pelanggan = $this->dataPelanggan();
        return view('pelanggan.index', compact('pelanggan'));
    }
}
