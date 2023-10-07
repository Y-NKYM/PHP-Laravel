<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //Fakerを使用
            'title' => $this->faker->realText(10),
            'content' => $this->faker->realText(50),
            'created_at' => date('Y-m-d H:i:s'),
        ];
    }
}
