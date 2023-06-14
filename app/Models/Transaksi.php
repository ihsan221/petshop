<?php

namespace App\Models;

use Dotenv\Repository\Adapter\GuardedWriter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID_TRANSAKSI';

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'ID_PELANGGAN');
    }

    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'ID_TRANSAKSI');
    }
}
