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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('birthday')->nullable();
            $table->text('website')->nullable();
            $table->string('Phone')->nullable();
            $table->string('City')->nullable()->comment('e.g: tokoyo');
            $table->string('Age')->nullable()->comment('e.g: 35');
            $table->string('Degree')->nullable()->comment('e.g: Bachelors');
            $table->string('Email')->nullable();
            $table->string('Freelance')->nullable();
            $table->enum('status', ['Active', 'De-Active'])->nullable()->default('Active');
            $table->softDeletes();
            $table->timestamps();

            // Foreign Key Constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
