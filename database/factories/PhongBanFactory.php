<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhongBan>
 */
class PhongBanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tenPhong' => $this->faker->jobTitle,
            'vietTat' => 'VT',
            'ghiChu' => $this->faker->paragraph
        ];
    }
}
