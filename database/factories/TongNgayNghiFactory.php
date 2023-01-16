<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TongNgayNghi>
 */
class TongNgayNghiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'soNgayHienTai' => $this->faker->numberBetween(0,5),
            'tongSoNgay' => $this->faker->numberBetween(5,10),
            'nam' => $this->faker->numberBetween(2020,2023),
            'ghiChu' => $this->faker->text,
            'maNV' => $this->faker->numberBetween(1,5),

        ];
    }
}
