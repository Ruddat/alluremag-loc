<?php

namespace Database\Factories;
use App\Models\NewsPost;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsPost>
 */
class NewsPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'category_id' => $this->faker->boolean(),
            'subcategory_id' => $this->faker->boolean(),
//            $table->integer('user_id');
            'user_id' => $this->faker->randomDigit(),
            'news_title_slug' => $this->faker->slug(),
            'news_title' => $this->faker->realText($maxNbChars = 100, $indexSize = 2),
            'news_headline' => $this->faker->realTextBetween($minNbChars = 160, $maxNbChars = 300, $indexSize = 1),
            'breacking_news_title' => $this->faker->realText($maxNbChars = 100, $indexSize = 3),



            'view_count' => $this->faker->randomNumber(5, true),


  //          $table->string('news_title_slug');
    //        $table->string('image');
              'image' => $this->faker->imageUrl(360, 360, 'animals', true, 'dogs', true),
              'news_details' => $this->faker->realTextBetween($minNbChars = 160, $maxNbChars = 2200, $indexSize = 2),
              'tags' => $this->faker->sentence(3),
              'breaking_news' => $this->faker->boolean(),
              'top_slider' => $this->faker->boolean(),
              'first_section_three' => $this->faker->boolean(),
              'first_section_nine' => $this->faker->boolean(),
              'post_date' => $this->faker->dateTimeThisYear('+2 months'),
              'post_month' => $this->faker->monthName(),

              'status' => $this->faker->boolean(),

              //         $table->text('tags');
   //         $table->integer('breaking_news');
   //         $table->integer('top_slider');
    //        $table->integer('first_section_three');
     //       $table->integer('first_section_nine');
     //       $table->string('post_date');
     //       $table->string('post_month');
     //       $table->integer('status')->default(1);
      //      'status' => $this->faker->status(1),
        ];
    }
}
