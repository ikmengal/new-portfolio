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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('degree')->nullable();
            $table->string('title')->nullable();
            $table->string('university')->nullable();
            $table->longText('description')->nullable();
            $table->string('start_date');
            $table->string('end_date')->nullable();
            $table->string('City')->nullable()->comment('e.g: tokoyo');
            $table->string('company')->nullable();
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
        Schema::dropIfExists('education');
    }
};
