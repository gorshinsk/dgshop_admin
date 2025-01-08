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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('article');
            $table->text('description');
            $table->text('content');
            $table->text('properties');
            $table->string('preview_image');

            $table->integer('price');
            $table->integer('quantity');
            $table->boolean('is_published')->default(true);

            $table->foreignId('category_id')->nullable()->index()->constrained('categories');
            $table->foreignId('color_id')->nullable()->index()->constrained('colors');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
