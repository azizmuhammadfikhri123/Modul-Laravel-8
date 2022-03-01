@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Produk
                    </div>
                    <div class="card-body">
                        <form action="{{route('produk.store')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" id="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kategori" class="col-sm-2 col-form-label">Kategori Produk</label>
                                <div class="col-sm-10">
                                    <select name="kategori" id="kategori" class="form-control">
                                        <option value="">Pilih...</option>
                                        @foreach ($kategori as $k)

                                        @endforeach
                                        <option value="{{$k->id}}">{{$k->nama}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="qty" class="col-sm-2 col-form-label">Qty Awal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="qty" id="qty">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="harga_jual" class="col-sm-2 col-form-label">Harga Jual</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="harga_jual" id="harga_jual">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="harga_beli" class="col-sm-2 col-form-label">Harga Beli</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="harga_beli" id="harga_beli">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
