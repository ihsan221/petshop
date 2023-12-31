<?php

namespace Database\Factories;

use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PelangganFactory extends Factory
{
    protected $model = Pelanggan::class;

    public function definition()
    {
        return [
            'NoTelp' => $this->faker->phoneNumber,
            'Nama' => $this->faker->name,
            'Alamat' => $this->faker->address,
        ];
    }
}
