<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->realText($maxNbChars = 20, $indexSize = 2),
            'description'=>$this->faker->realText($maxNbChars = 60, $indexSize = 2),
            'pages'=>$this->faker->numberBetween($min = 30, $max = 900),
            'genre_id'=>$this->faker->numberBetween($min = 1, $max = 30),
            'writer_id'=>$this->faker->numberBetween($min = 1, $max = 30),
            'img'=>$this->faker->imageUrl($width=320, $height=540, 'book')
        ];
    }
}
