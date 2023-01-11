<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Decide if the Comment is a comment on a Post or another Comment
        $postId = NULL;
        $commentId = NULL;
        if (rand(0, 1)) {
            $postId = Post::all()->random();
        } else {
            $commentId = rand(1, 20);
        }
        return [
            "user_id" => User::all()->random(),
            "post_id" => $postId,
            "comment_id" => $commentId,
            "content" => $this->faker->sentence(12),
        ];
    }
}
