<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Article::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 200; $i++) {
            Article::create([
                'title' => $faker->sentence,
                'author' => $faker->numberBetween(1, 10),
                'published' => $faker->date('Y-m-d', 'now'),
                'content' => $faker->paragraph,
                'image' => $faker->word,
                'category' => $faker->numberBetween(1, 5),
            ]);
        }
    }
}
