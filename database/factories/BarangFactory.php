<?php

namespace Database\Factories;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarangFactory extends Factory
{
    protected $model = Barang::class;

    public function definition()
    {
        return [
            'NAMA BARANG' => $this->faker->word,
            'Harga Satuan' => $this->faker->randomNumber(5),
            'Stok' => $this->faker->randomNumber(2),
        ];
    }
}
