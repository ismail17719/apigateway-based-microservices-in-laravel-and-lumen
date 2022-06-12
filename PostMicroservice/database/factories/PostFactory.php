<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'slug' => str()->slug($title),
            'body' => $this->faker->paragraph().$this->faker->paragraph().$this->faker->paragraph().$this->faker->paragraph(),
            'status' => 'published',
            'hearts' => mt_rand(0, 500),
            'views' => mt_rand(0, 1000),
            'user_id' => mt_rand(1, 5),
        ];
    }
}
