@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a	href="{{	route('produk.create')	}}"	class="btn	btn-primary my-2">Tambah Produk</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Name</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Harga Beli</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Dibuat pada</th>
                    <th scope="col">Diedit pada</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $i => $p)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$p->nama}}</td>
                        <td>{{$p->Kategori->nama}}</td>
                        <td>{{$p->qty}}</td>
                        <td>{{$p->harga_beli}}</td>
                        <td>{{$p->harga_jual}}</td>
                        <td>{{$p->created_at}}</td>
                        <td>{{$p->updated_at}}</td>
                        <td>
                            <a href="{{route('produk.show', $p->id)}}" class="btn btn-warning float-right">Detail</a>
                            <a href="{{route('produk.edit', $p->id)}}" class="btn btn-success float-right">Edit</a>
                            <form action="{{route('produk.destroy', $p->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger float-right">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection





