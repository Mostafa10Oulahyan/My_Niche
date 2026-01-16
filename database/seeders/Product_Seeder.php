<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Delete all existing products before seeding
        // Product::truncate();

        $faker = Faker::create();
        for ($i = 0; $i < 15; $i++) {
            Product::create([
                'nom' => $faker->word(),
                'prix' => $faker->randomFloat(2, 10, 1000),
                'categorie' => $faker->text(12),
                'image' => 'https://picsum.photos/400/400?random=' . $i
            ]);
        }
    }
}
