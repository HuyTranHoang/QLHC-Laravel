<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhongBanFactory extends Factory
{

    public function definition()
    {
        return [
            'tenPhong' => $this->faker->jobTitle,
            'vietTat' => 'VT',
            'ghiChu' => $this->faker->paragraph
        ];
    }
}
