@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="fw-bold mb-4">Dashboard</h3>

    <div class="row g-4">
        <!-- Card Kategori -->
        <div class="col-md-4">
            <div class="card p-4 text-center">
                <i class="bi bi-folder-fill fs-1 text-primary mb-3"></i>
                <h5 class="fw-bold">Total Kategori</h5>
                <h2 class="fw-bolder">{{ $totalKategori ?? 0 }}</h2>
            </div>
        </div>

        <!-- Card Barang -->
        <div class="col-md-4">
            <div class="card p-4 text-center">
                <i class="bi bi-box-seam-fill fs-1 text-success mb-3"></i>
                <h5 class="fw-bold">Total Barang</h5>
                <h2 class="fw-bolder">{{ $totalBarang ?? 0 }}</h2>
            </div>
        </div>

        <!-- Card User -->
        <div class="col-md-4">
            <div class="card p-4 text-center">
                <i class="bi bi-person-circle fs-1 text-warning mb-3"></i>
                <h5 class="fw-bold">Login Sebagai</h5>
                <h2 class="fw-bolder">{{ Auth::user()->name }}</h2>
            </div>
        </div>
    </div>
</div>
@endsection
