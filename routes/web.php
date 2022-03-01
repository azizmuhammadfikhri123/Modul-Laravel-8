<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\pelangganController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    echo "Welcome";
});

Route::get('/index', function () {
    echo "Uji Coba route dengan method GET";
});

Route::post('/store', function () {
    // sintak untuk menyimpan data
});

Route::put('/update', function () {
    // sintak untuk upadte data
});

Route::delete('/delete', function () {
    // sintak untuk menghapus data
});

Route::get('/show/{id}', function ($id) {
    echo "Nilai Parameter Adalah ".$id;
});

Route::get('/show/{id?}', function ($id=1) {
    echo "Nilai Parameter Adalah ".$id;
});

Route::get('/edit/{nama}', function ($nama) {
    echo "Nilai Parameter Adalah ".$nama;
})->where('nama','[A-Za-z]+');

Route::get('/index', function () {
    echo "<a href='".route('create')."'>Akses Route dengan nama </a>";
});

Route::get('/create', function () {
    echo "Route diakses menggunakan nama";
    })->name('create');


// Route::get('/barang', [barangController::class, 'index']);
// Route::get('/barang/show', [barangController::class, 'show']);

Route::get('/halaman',function(){
    $title = 'Harry Pooter';
    $konten = 'harry potter and the deathly hallows: part 2';
    return view('konten.halaman',compact('title','konten'));
});

Route::get('/pelanggan', [pelangganController::class, 'index']);


Route::resource('/barang', barangController::class);




Route::resource('produk', produkController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
