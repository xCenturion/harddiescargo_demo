<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengirimanBarang extends Model
{
    protected $table = 'pengiriman_barang';
    protected $fillable = ['asal','tujuan','nama_layanan','jenis_kiriman','jalur','tarif','minimum_charge','estimasi','keterangan'];
}
