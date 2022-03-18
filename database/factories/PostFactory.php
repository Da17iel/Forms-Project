<?php

namespace Database\Factories;

use App\Models\categorie;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->words(3, true),
            "user_id" => User::all()->random(),
            "description" => $this->faker->sentence(6),
            "content" => $this->faker->paragraph(),
            "replies" => $this->faker->numberBetween(0, 200),
            "category_id" => categorie::all()->random(),
        ];
    }
}
