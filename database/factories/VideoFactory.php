<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'url' => $this->faker->url(),
            'category' => $this->faker->randomElement(['landscapes', 'culture', 'food', 'adventure', 'history']),
            'views' => $this->faker->numberBetween(0, 10000),
            'likes_count' => $this->faker->numberBetween(0, 1000),
            'comments_count' => $this->faker->numberBetween(0, 500),
            'shares_count' => $this->faker->numberBetween(0, 200),
        ];
    }
}