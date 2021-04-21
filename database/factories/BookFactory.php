<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title' =>$this->faker->text(50),
            'ISBS' =>$this->faker->text(20),
            'author' => $this-> faker->text(50),
            'caratula' => $this -> faker->text(50)

        ];
    }
}
