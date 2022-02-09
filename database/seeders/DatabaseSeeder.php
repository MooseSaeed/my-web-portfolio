<?php

namespace Database\Seeders;

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
        \App\Models\User::factory()->create([
            'name' => 'Mostafa Said',
            'id' => '1'
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Frontend',
            'id' => '1'
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'Backend',
            'id' => '2'
        ]);

        \App\Models\Category::factory()->create([
            'name' => 'General',
            'id' => '3'
        ]);

        \App\Models\Post::factory(4)->create([
            'category_id' => 1,
            'user_id' => 1,
        ]);
        \App\Models\Post::factory(4)->create([
            'category_id' => 2,
            'user_id' => 1,
        ]);
        \App\Models\Post::factory(4)->create([
            'category_id' => 3,
            'user_id' => 1,
        ]);
    }
}
