<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{

    protected $model = \App\Models\Book::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Book_ISPN' => $this->faker->unique()->isbn13(),
            'Book_title' => $this->faker->sentence(3), // Random title
            'Book_Price' => $this->faker->randomFloat(2, 5, 100), // Random price between 5 and 100
            'Book_publication_date' => $this->faker->date(),
            'Book_cover_image' => $this->faker->imageUrl(200, 300, 'books', true), // Random image URL
            'Book_Description' => $this->faker->paragraph(),
            'Book_Edition' => $this->faker->numberBetween(1, 5) . 'th Edition',
            'Book_Publisher' => $this->faker->company(),
            'book_qty' => $this->faker->numberBetween(1, 20),
            'Book_Author' => $this->faker->name(),
            'book_number_Of_pages' => $this->faker->numberBetween(100, 1000),
        ];
    }
}
