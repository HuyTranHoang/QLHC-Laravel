<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChucVuFactory extends Factory
{

    public function definition()
    {
        return [
            'chucVu' => $this->faker->jobTitle,
        ];
    }
}
