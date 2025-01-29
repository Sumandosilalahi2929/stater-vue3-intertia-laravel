<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title = rtrim(fake()->realText(50), '.'),
            'slug' => str($title)->slug(),
            'body' => fake()->realText(500),
            'views_count' => fake()->randomNumber(2),
            'answers_count' => fake()->randomNumber(1),
            'votes_count' => fake()->randomNumber(1),

        ];
    }
}
