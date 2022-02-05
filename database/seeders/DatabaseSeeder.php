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
            'category_id' => 1
        ]);
        \App\Models\Post::factory(4)->create([
            'category_id' => 2
        ]);
        \App\Models\Post::factory(4)->create([
            'category_id' => 3
        ]);
    }
}
