<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Barang</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background: #fff;
        }
        header {
            background: #eee;
            padding: 10px;
        }
        header h2 {
            margin: 0;
            display: inline-block;
        }
        header a {
            float: right;
            text-decoration: none;
            color: black;
            padding: 5px 10px;
            border: 1px solid #aaa;
        }
        .container {
            width: 90%;
            margin: 20px auto;
        }
        h2 {
            margin-bottom: 10px;
        }
        .btn {
            text-decoration: none;
            border: 1px solid #000;
            padding: 5px 10px;
            color: black;
            background: #f9f9f9;
            display: inline-block;
            margin-bottom: 10px;
        }
        .alert {
            border: 1px solid #000;
            padding: 5px;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
        }
        th, td {
            border: 1px solid #000;
            padding: 6px;
            text-align: left;
        }
        th {
            background: #f0f0f0;
        }
        footer {
            text-align: center;
            font-size: 12px;
            color: #555;
            margin-top: 30px;
            padding: 10px;
            border-top: 1px solid #ddd;
        }
        form {
            display: inline;
        }
    </style>
</head>
<body>

<header>
    <h2>Kelola Barang</h2>
    <a href="#">Logout</a>
</header>

<div class="container">
    <h3>📦 Data Barang</h3>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <a href="{{ route('barang.create') }}" class="btn">+ Tambah Barang</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangs as $b)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $b->nama_barang }}</td>
                <td>{{ $b->kategori->nama_kategori }}</td>
                <td>Rp {{ number_format($b->harga, 0, ',', '.') }}</td>
                <td>{{ $b->stok }}</td>
                <td>
                    <a href="{{ route('barang.edit', $b->id) }}" class="btn">Edit</a>
                    <form action="{{ route('barang.destroy', $b->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus barang ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


</body>
</html>
