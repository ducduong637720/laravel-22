<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(5);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker->text(),
            'user_created_id' => rand(1,5),
            'user_updated_id' => rand(1,5),
            'status' => rand(0,2),
            'view_count' => rand(50,100),
            'category_id' => rand(1,5),
        ];
    }
}
