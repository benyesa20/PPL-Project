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

        <!-- Tombol Tambah Barang -->
        <div class="mb-3">
            <a href="{{ route('barang.create') }}" class="btn btn-success">Tambah Barang</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Harga (Rp)</th>
                    <th>Stok</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->nama_barang }}</td>
                    <td>{{ $row->kategori }}</td>
                    <td>{{ $row->deskripsi }}</td>
                    <td>{{ number_format($row->harga, 3, ',', '.') }}</td> <!-- Format harga dengan pemisah ribuan -->
                    <td>{{ $row->stok }}</td>
                    <td>{{ $row->status }}</td>
                    <td>
                        <a href="{{ route('barang.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('barang.destroy', $row->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
