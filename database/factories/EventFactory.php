<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentences(rand(2, 3));

        return [
            'title' => $title,
            'slug' =>Str::slug($title),
            'content' => $this->faker->sentences(rand(2, 3)),
            'premium' => $this->faker->boolean(25),
            'starts_at' => $this->faker->dateTimeBetween('now', '+2months'),
            'ends_at' => $this->faker->dateTimeBetween('+3months', '+4months'),
        ];
    }
}
