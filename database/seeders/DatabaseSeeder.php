<?php

namespace Database\Seeders;

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

        Post::factory(10)->create();

        /* 
        $frontend = Category::factory()->create([
            'name' => 'Frontend',
            'slug' => 'frontend'
        ]);
        $backend = Category::factory()->create([
            'name' => 'Backend',
            'slug' => 'backend'
        ]);
        $general = Category::factory()->create([
            'name' => 'General',
            'slug' => 'general'
        ]);

        Post::factory(3)->create([
            'user_id' => $user->id,
            'category_id' => $frontend->id
        ]);
        Post::factory(3)->create([
            'user_id' => $user->id,
            'category_id' => $backend->id
        ]);
        Post::factory(3)->create([
            'user_id' => $user->id,
            'category_id' => $general->id
        ]); */
    }
}
