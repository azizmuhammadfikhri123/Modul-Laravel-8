{{-- <!DOCTYPE html>
<html>
    <head>
        <title>Laravel Saya</title>
    </head>
    <body>
        <h1>Produk : {{ $produk }}</h1>
        <h1>Produk : {{ isset($produk) ? $produk : 'Barang Kosong' }}</h1>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel saya</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>no</th>
            <th>Nama barang</th>
        </thead>
        <tbody>
            @foreach ($produk as $i => $v)
                <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$v}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
