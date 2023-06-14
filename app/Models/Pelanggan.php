<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID_PELANGGAN';

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'ID_PELANGGAN');
    }
}
