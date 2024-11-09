<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph(5),
                'thumbnail' => 'https://via.placeholder.com/150'
            ]);
        }
    }
}
