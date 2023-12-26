<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comments;
use App\Models\User;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Comments::class;

    public function definition()
    {
        return [
            'post_id'=> Post::get()->random()->id,
            'author_id'=> User::get()->random()->id,
            'body'=> fake()->text(1000),
            'image' => fake()->imageUrl(),
            'like' => random_int(0, 100),
            'dislike' => random_int(0, 100),
        ];
    }
}
