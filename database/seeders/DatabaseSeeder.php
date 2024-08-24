<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Customer_Support;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Staff;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed Blogs
        Blog::factory()->count(5)->create();
        // Seed Customer Supports
        Customer_Support::factory()->count(5)->create();
        // Seed Staff
        Staff::factory()->count(5)->create();
        // Seed Galleries
        Gallery::factory()->count(5)->create();
        // Seed Services
        Service::factory()->count(5)->create();

    }
}
