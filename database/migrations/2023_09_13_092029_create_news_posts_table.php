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
        Schema::create('news_posts', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('category_name')->default(0);
            $table->integer('subcategory_id')->nullable();
            $table->integer('user_id');
            $table->boolean('slider')
            ->default(0)
            ->comment('Startseite Oben');
            $table->string('news_title');
            $table->string('news_title_slug');
            $table->string('breaking_news_title')->nullable();
         //   $table->string('image');
            $table->text('news_headline');
            $table->text('news_details');
            $table->text('tags');
            $table->integer('breaking_news');
            $table->integer('top_slider');
            $table->integer('first_section_three');
            $table->integer('first_section_nine');
            $table->string('post_date');
            $table->string('post_month');

            $table->integer('visitor')
            ->default(0)->comment('Nachrichten Besucher = Counter');
            $table->integer('is_share')
            ->default(1)->comment('News kann geteilt werden oder nicht');
            $table->integer('is_comment')
            ->default(0)->comment('News kann kommentiert werden');


            $table->integer('autor_id')->default(0);
            $table->integer('admin_id')->default(0);

            $table->integer('status')->default(1);
            $table->integer('view_count')->default(0);
            $table->integer('comment_count')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_posts');
    }
};
