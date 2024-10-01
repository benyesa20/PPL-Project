<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang Unib Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Daftar Barang Unib Store</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>no</th>
                    <th>nama_barang</th>
                    <th>kategori</th>
                    <th>deskripsi</th>
                    <th>harga</th>
                    <th>stok</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->nama_barang }}</td>
                    <td>{{ $row->kategori }}</td>
                    <td>{{ $row->deskripsi }}</td>
                    <td>{{ number_format($row->harga, 3, ',', '.') }}</td> <!-- Format harga -->
                    <td>{{ $row->stok }}</td>
                    <td>{{ $row->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
