<?php

namespace Database\Seeders;

use App\Models\Posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // You can use the PostFactory to create posts


        // Or you can create a specific post
        Posts::factory()->create([
            'title' => 'Sample Post Title',
            'content' => 'This is the content of the sample post.',
        ]);
        Posts::factory(10)->create();
    }
}
