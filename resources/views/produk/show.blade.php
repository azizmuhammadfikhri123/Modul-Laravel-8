@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Detail Produk
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Produk</label>
                            <div class="col-sm-10">
                                {{$produk->nama}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kategori" class="col-sm-2 col-form-label">Kategori Produk</label>
                            <div class="col-sm-10">
                                {{$produk->kategori->nama}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="qty" class="col-sm-2 col-form-label">Qty Awal</label>
                            <div class="col-sm-10">
                                {{$produk->qty}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga_jual" class="col-sm-2 col-form-label">Harga Jual</label>
                            <div class="col-sm-10">
                                {{$produk->harga_jual}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga_beli" class="col-sm-2 col-form-label">Harga Beli</label>
                            <div class="col-sm-10">
                                {{$produk->harga_beli}}
                            </div>
                        </div>
                        <div>
                            <a href="{{route('produk.index')}}" class="btn btn-primary float-right">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
