<?php

namespace Database\Factories;

use App\Models\BookCategory;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookCategoryFactory extends Factory
{
    protected $model = BookCategory::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'book_id' => Book::inRandomOrder()->first()->id ?? Book::factory(),
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(),
        ];
    }
}
