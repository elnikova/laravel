<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(5, true),
            'short_content' => $this->faker->paragraphs(1, true),
            'content' => $this->faker->paragraphs(3, true),
            'img' => null,
            'user_id' => User::factory(),
            'slug' => $this->faker->slug,
        ];
    }
}
