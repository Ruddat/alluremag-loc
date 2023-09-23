<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name');
            $table->string('category_slug');
            $table->softDeletes();
            $table->timestamps();
        });

        Category::create([
            'category_name' => 'Politics',
            'category_slug' => 'politics',

        ]);

        Category::create([
            'category_name' => 'World',
            'category_slug' => 'world',

        ]);

        Category::create([
            'category_name' => 'Sports',
            'category_slug' => 'sports',

        ]);

        Category::create([
            'category_name' => 'Restaurant',
            'category_slug' => 'restaurant',

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
