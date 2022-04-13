<?php

namespace Database\Factories;

use App\Models\Category;
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
        $SamplePictures = array("img/SamplePicture1.ico", "img/SamplePicture2.ico", "img/SamplePicture3.ico", "img/SamplePicture4.ico");
        $ArrayKey = array_rand($SamplePictures);

        return [
            "IconPath" => $SamplePictures[$ArrayKey],
            "title" => $this->faker->words(3, true),
            "user_id" => User::all()->random(),
            "description" => $this->faker->sentence(6),
            "content" => $this->faker->paragraph(),
            "replies" => $this->faker->numberBetween(0, 15),
            "views" => $this->faker->numberBetween(0, 500),
            "category_id" => Category::all()->random(),
            "creationDate" => date("Y.m.d"),
        ];
    }
}
