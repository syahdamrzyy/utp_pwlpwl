<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris'; // ✅ ini yang benar
    protected $fillable = ['nama_kategori'];

    public function barangs()
    {
        return $this->hasMany(Barang::class);
    }
}
