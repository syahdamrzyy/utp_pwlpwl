@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Kelola Barang</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">+ Tambah Barang</a>

    <table class="table table-bordered">
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
                        <a href="{{ route('barang.edit', $b->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('barang.destroy', $b->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus barang ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
