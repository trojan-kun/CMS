<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
Use App\Models\Post;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => fake()->sentence(10),
            'author_id' => User::get()->random()->id,
            'body' => fake()->text(2000),
            'image' => fake()->imageUrl(),
            'like' => random_int(0, 100),
            'dislike' => random_int(0, 100),
        ];
    }
}
