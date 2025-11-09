<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Barang;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Ambil total kategori & barang dari database
        $totalKategori = Kategori::count();
        $totalBarang = Barang::count();

        // Kirim ke view
        return view('home', compact('totalKategori', 'totalBarang'));
    }
}
