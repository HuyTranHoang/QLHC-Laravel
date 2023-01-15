<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NhanVienFactory extends Factory
{
    public function definition(): array
    {
        return [
            'tenNV' => $this->faker->name,
            'userName' => $this->faker->userName,
            'password' => $this->faker->password,
            'gioiTinh' => $this->faker->numberBetween(0,1),
            'ngaySinh' => $this->faker->date,
            'hinh' => 'hinhs/default.jpg',

            'maCV' => $this->faker->numberBetween(1,5),
            'maPhong' => $this->faker->numberBetween(1,5)

        ];
    }
}
