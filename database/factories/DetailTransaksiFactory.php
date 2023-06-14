<?php

namespace Database\Factories;

use App\Models\DetailTransaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailTransaksiFactory extends Factory
{
    protected $model = DetailTransaksi::class;

    public function definition()
    {
        return [
            'ID_TRANSAKSI'  => mt_rand(1, 5),
            'ID_BARANG' => function () {
                return \App\Models\Barang::factory()->create()->ID_BARANG;
            },
            'JUMLAH' => $this->faker->numberBetween(1, 10),
            'Total_Harga' => $this->faker->randomFloat(2, 100, 1000), // Mengisi Total_Harga dengan nilai acak antara 100 hingga 1000 dengan 2 desimal
        ];
    }
}
