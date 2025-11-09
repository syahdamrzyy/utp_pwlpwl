<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kategori</title>
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
        .top-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .btn {
            text-decoration: none;
            border: 1px solid #000;
            padding: 5px 10px;
            color: black;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            border: 1px solid #000;
            padding: 6px;
            text-align: left;
        }
        th {
            background: #f0f0f0;
        }
        .alert {
            border: 1px solid #000;
            padding: 5px;
            margin-bottom: 10px;
        }
        footer {
            text-align: center;
            font-size: 12px;
            color: #555;
            margin-top: 30px;
            padding: 10px;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>

<header>
    <h2>Data Kategori</h2>
    <a href="#">Logout</a>
</header>

<div class="container">
    <div class="top-bar">
        <h3>📂 Data Kategori</h3>
        <a href="{{ route('kategori.create') }}" class="btn">+ Tambah Kategori</a>
    </div>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategoris as $kategori)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kategori->nama_kategori }}</td>
                <td>{{ $kategori->keterangan }}</td>
                <td>
                    <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn">Edit</a>
                    <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



</body>
</html>
