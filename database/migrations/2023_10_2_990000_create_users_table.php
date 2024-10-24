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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobile')->nullable();
            $table->string('role')->default('user');
            $table->string('photo')->nullable();
            $table->text('address')->nullable();
            
            $table->unsignedBigInteger('membership_id')->nullable(); // Foreign key

            // Foreign key constraint for membership_id (assuming you have a memberships table)
            $table->foreign('membership_id')->references('id')->on('memberships')->onDelete('set null');
    
            $table->timestamps();// created_at, updated_at
        });
    }

      

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
