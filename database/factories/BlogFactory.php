<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->paragraph($nbSentences = 1, $variableNbSentences = true),
            'type' => array_rand(array_flip(['Blog','Media','Panzi-hébdo','Panzi-hébdo'])),
            'article' =>$this->faker->paragraph($nbSentences = 30, $variableNbSentences = true),
            'tag' => $this->faker->paragraph($nbSentences = 2, $variableNbSentences = true),
            'state' => rand(0,1),
            'img' => 'https://via.placeholder.com/350x150',
            'editeur' => rand(1,5)
        ];
    }
}
