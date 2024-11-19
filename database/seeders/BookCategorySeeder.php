<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookCategory;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate 50 random BookCategory entries
        BookCategory::factory(50)->create();
    }
}
