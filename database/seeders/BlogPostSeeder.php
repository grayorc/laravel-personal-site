<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\BlogPost;

class BlogPostSeeder extends Seeder
{
    public function run()
    {
        // Ensure you have some users
        if (User::count() === 0) {
            User::factory()->count(10)->create(); // Adjust the number as needed
        }

        // Create blog posts
        BlogPost::factory()->count(20)->create(); // Adjust the number as needed
    }
}
