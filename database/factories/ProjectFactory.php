<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'city' => fake()->city,
            'description'=> fake()->paragraph,
            'image_url'=> fake()->imageUrl(640, 480, 'cats', true, 'Faker', true),
            'start_date'=> fake()->dateTime,
            'end_date'=> fake()->dateTime,
        ];
    }
}
