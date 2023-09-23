<?php

use App\Models\Subcategory;
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
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('subcategory_name');
            $table->string('subcategory_slug');
            $table->timestamps();
        });

        Subcategory::create([
            'category_id' => '4',
            'subcategory_name' => 'Foods',
            'subcategory_slug' => 'foods',

        ]);


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategories');
    }
};
