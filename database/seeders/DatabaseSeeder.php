<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
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
        User::create([
            'name' => 'Fatur Rahman',
            'username' => 'admin',
            'email' => 'fatur14022@gmail.com',
            'password' => bcrypt('111111'),
        ]);
        User::create([
            'name' => 'Wahid',
            'username' => 'hid',
            'email' => 'wahid@gmail.com',
            'password' => bcrypt('111111'),
        ]);

        Category::create([

            'name' => 'Wisata',
            'slug' => 'wisata',

        ]);
        Category::create([
            'name' => 'Paket Wisata',
            'slug' => 'paket-wisata',

        ]);
        Category::create([
            'name' => 'Berita',
            'slug' => 'berita',
        ]);
    }
}