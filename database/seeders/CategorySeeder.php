<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => $name = 'Handphone',
            'slug' => Str::slug($name),
            'color' => 'red'
        ]);

        Category::create([
            'name' => $name = 'Laptops',
            'slug' => Str::slug($name),
            'color' => 'green'
        ]);

        Category::create([
            'name' => $name = 'Smartwatches',
            'slug' => Str::slug($name),
            'color' => 'blue'
        ]);

        Category::create([
            'name' => $name = 'Tablets',
            'slug' => Str::slug($name),
            'color' => 'yellow'
        ]);

        Category::create([
            'name' => $name = 'LoremIpsum',
            'slug' => Str::slug($name),
            'color' => 'orange'
        ]);
    }
}
