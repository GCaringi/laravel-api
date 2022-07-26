<?php

use App\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $users = factory(App\User::class, 3)->make();

        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);

        $this->call(PostsTableSeeder::class);


    }
}
