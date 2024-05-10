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
            $table->string('title');
            $table->string('author');
            $table->string('publisher')->nullable();
            $table->integer('price');
            $table->foreignId('main_classification_id')->constrained('main_classifications')->nullable();
            $table->foreignId('sub_classification_id')->constrained('sub_classifications')->nullable();
            $table->foreignId('favorite_id')->constrained('favorites_classifications')->nullable();
            $table->foreignId('rate_id')->constrained('rates')->nullable();
            $table->foreignId('review_id')->constrained('reviews')->nullable();
            $table->softDeletes();
            $table->timestamps();
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
