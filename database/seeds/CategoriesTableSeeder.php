<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();
        for ($i = 1; $i < rand(2, 5); $i++) {
            $cate = Category::create([
                'name' => $faker->name
            ]);
            for ($j = 1; $j < rand(1, 5); $j++) {
                $subCate = Category::create([
                    'name' => $faker->name,
                    'parent_id' => $cate->id
                ]);
            }
        }
    }
}
