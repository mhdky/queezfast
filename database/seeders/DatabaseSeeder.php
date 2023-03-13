<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Post;
use App\Models\Social;
use App\Models\Sponsor;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'muhammad RIZKI',
            'username' => 'muhammadrizki433',
            'password' => Hash::make('password')
        ]);

        Post::factory(200)->create();

        Category::create([
            'name' => 'Css',
            'slug' => 'css',
            'color' => 'blue-css',
        ]);

        Category::create([
            'name' => 'Tailwind Css',
            'slug' => 'tailwindcss',
            'color' => 'blue-tailwind',
        ]);

        Category::create([
            'name' => 'Javascript',
            'slug' => 'javascript',
            'color' => 'yellow-js',
        ]);

        Category::create([
            'name' => 'Php',
            'slug' => 'php',
            'color' => 'blue-php',
        ]);

        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
            'color' => 'red-laravel',
        ]);

        Social::create([
            'name' => 'Home Page',
            'url' => 'https://mhdrizki.com'
        ]);

        Social::create([
            'name' => 'Instagram',
            'url' => 'https://instagram.com/rizki_sr_my'
        ]);

        Social::create([
            'name' => 'LinkedIn',
            'url' => 'https://www.linkedin.com/in/muhammad-rizki-335851226/'
        ]);

        Social::create([
            'name' => 'Github',
            'url' => 'https://github.com/mhdky'
        ]);

        Social::create([
            'name' => 'Email',
            'url' => 'mailto:mhdky502@gmail.com'
        ]);

        Blog::create([
            'name' => 'Lupa Kode',
            'url' => 'https://lupakode.com/'
        ]);

        Sponsor::create([
            'name' => 'Lupa Kode',
            'url' => 'https://lupakode.com/'
        ]);

        Sponsor::create([
            'name' => 'Muhammad Rizki',
            'url' => 'https://github.com/mhdky'
        ]);

        Sponsor::create([
            'name' => 'Effenril Agung',
            'url' => 'https://github.com/effenrilagung'
        ]);
    }
}
