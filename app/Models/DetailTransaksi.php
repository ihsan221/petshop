<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID_DETAIL';

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'ID_TRANSAKSI');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'ID_BARANG');
    }
}
