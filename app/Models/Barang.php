<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $primary_key = 'id';
    protected $fillable =[
        'kode_barang',
        'nama_barang',
        'jenis_varian',
        'qty',
        'harga_jual',
        'total_harga',
        'diskon',
        'harga_setelah_diskon',
    ];
}
