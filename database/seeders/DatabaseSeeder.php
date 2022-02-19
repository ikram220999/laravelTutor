<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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

        User::truncate();
        Category::truncate();
        Post::truncate();

         $user = User::factory()->create();

        $personal = Category::create([

            'name' => 'Personal',
            'slug' => 'personal'

         ]);

         $family = Category::create([

            'name' => 'Family',
            'slug' => 'family'

         ]);

         $work = Category::create([

            'name' => 'Work',
            'slug' => 'work'

         ]);


         Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'myfamilypost',
            'excerpt' => 'Lorem Ipsum is simply dummy text of the printing',
            'body' => 'Generate Lorem Ipsum placeholder text for use in your graphic, print and web layouts, and discover plugins for your favorite writing, design and blogging tools. Explore the origins, history and meanin'

         ]);

         Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'myworkpost',
            'excerpt' => 'Lorem Ipsum is simply dummy text of the printing',
            'body' => 'Generate Lorem Ipsum placeholder text for use in your graphic, print and web layouts, and discover plugins for your favorite writing, design and blogging tools. Explore the origins, history and meanin'

         ]);


    }
}
