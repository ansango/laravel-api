<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array('National', 'International', 'Sports', 'Finance', 'Society',);

        foreach ($categories as &$category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
