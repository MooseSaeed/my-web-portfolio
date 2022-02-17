<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        $user = User::factory()->create([
            'name' => 'Mostafa Said',
            'email' => 'mostafasaid1994@gmail.com',
            'password' => '$2y$10$ReKXgbTVLecMg3Hjqwz1KeKb/Nm/QcGvUj7nEWKj3UpJaJKqwDavG',
            'username' => 'MooseS94'
        ]);

        Post::factory(10)->create([
            'user_id' => $user,
            'thumbnail' => 'thumbnails/mKsUjgvkM1Jv2SbiOs6ODVSmQXLtyoq58CFHpwsX.jpg'
        ]);

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
