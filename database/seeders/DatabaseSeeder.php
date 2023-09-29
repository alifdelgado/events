<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\Country;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@email.com',
        ]);

        Country::insert([
            ['name' => 'Rusia'],
            ['name' => 'China']
        ]);

        City::insert([
            ['name' => 'Moscow', 'country_id' => 1],
            ['name' => 'Saint-Petersburg', 'country_id' => 1],
            ['name' => 'Shanghai', 'country_id' => 2],
            ['name' => 'Beijing', 'country_id' => 2]
        ]);

        Tag::insert([
            ['name' => 'Laravel', 'slug' => 'laravel'],
            ['name' => 'Vue', 'slug' => 'vue'],
            ['name' => 'React', 'slug' => 'react'],
            ['name' => 'JavaScript', 'slug' => 'javascript'],
            ['name' => 'PHP', 'slug' => 'php'],
            ['name' => 'Livewire', 'slug' => 'livewire'],
        ]);
    }
}
