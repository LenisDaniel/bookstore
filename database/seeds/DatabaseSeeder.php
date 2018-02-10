<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        Model::unguard();

        User::truncate();
        Category::truncate();

        factory(User::class, 1)->create();
        $this->call(CategoriesSeeder::class);
        Model::reguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
