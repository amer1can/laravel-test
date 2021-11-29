<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ArticleModel::factory(20)->create();

//        DB::table('article_models')->insert([
//            'title' => $faker->name(),
//            'text' => $faker->text(100),
//            'views' => $faker->numberBetween(10,1000),
//            'likes' => $faker->numberBetween(5,50),
//            'min_image' => $faker->imageUrl($width = 300, $height = 300, 'cats'),
//            'image' => $faker->imageUrl($width = 1100, $height = 400, 'cats'),
//            'created_at' => now(),
//            'updated_at' => now(),
//
//        ]);
    }
}
