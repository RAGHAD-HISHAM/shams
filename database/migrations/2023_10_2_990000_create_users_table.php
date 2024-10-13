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
            $table->string('user_firstname');
            $table->string('user_surname');
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->string('user_mobile')->nullable();
            $table->string('user_role')->default('user');
            $table->string('user_photo')->nullable();
            $table->text('user_address')->nullable();
            
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
