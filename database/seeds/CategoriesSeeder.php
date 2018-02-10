<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories_arr = [
            ['category_name' => 'English', 'category_descr' => 'English Category Books'],
            ['category_name' => 'Mathematics', 'category_descr' => 'Mathematics Category Books'],
            ['category_name' => 'Administration', 'category_descr' => 'Administration Category Books'],
            ['category_name' => 'Biology', 'category_descr' => 'Biology Category Books'],
            ['category_name' => 'Electronics', 'category_descr' => 'Electronics Category Books'],
            ['category_name' => 'Physical Education', 'category_descr' => 'Physical Education Category Books'],
        ];

        foreach ($categories_arr as $name)
        {
            Category::create([
                'category_name' => $name['category_name'],
                'category_descr' => $name['category_descr'],
                '_token' => str_random(40),
            ]);
        }

    }
}
