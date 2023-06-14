<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $primaryKey = 'ID_BARANG';

    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'ID_BARANG');
    }
}
