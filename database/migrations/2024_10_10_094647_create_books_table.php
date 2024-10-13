<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('Book_ISPN')->unique();
            $table->string('Book_title');
            $table->decimal('Book_Price', 8, 2); // Price with 2 decimal points
            $table->date('Book_publication_date');
            $table->string('Book_cover_image')->nullable(); // Cover image URL or path
            $table->text('Book_Description')->nullable();
            $table->string('Book_Edition')->nullable();
            $table->string('Book_Publisher')->nullable();
            $table->integer('book_qty')->default(1); // Quantity of books available
            $table->string('Book_Author');
            $table->integer('book_number_Of_pages')->nullable(); // Number of pages
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
