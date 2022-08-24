<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->jobTitle,
            'description' => $this->faker->sentence,
            'img' => $this->faker->imageUrl,
            'places' => $this->faker->numberBetween($min = 1, $max = 20),
        ];
    }
}
