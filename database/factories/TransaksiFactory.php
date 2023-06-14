<?php

namespace Database\Factories;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    protected $model = Transaksi::class;

    public function definition()
    {
        return [
            'Tanggal Transaksi' => $this->faker->date(),
            'Id_Pelanggan' => function () {
                return \App\Models\Pelanggan::factory()->create()->ID_PELANGGAN;
            },
            'Total_Harga' => $this->faker->randomNumber(6),
        ];
    }
}
