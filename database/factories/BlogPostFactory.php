<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->numberBetween(1, 1),
            'title' => fake()->sentence,
            'content' => implode("\n", fake()->paragraphs),
            'thumbnail' => "https://picsum.photos/id/".fake()->numberBetween(1, 1050)."/330/224",
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

}
