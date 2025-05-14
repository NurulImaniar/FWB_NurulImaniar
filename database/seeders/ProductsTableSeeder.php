<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Ficus',
            'category_id' => 1,
            'price' => 15000,
            'stock' => 100,
            'image' => 'ficus.jpg',
            'description' => 'A beautiful indoor plant',
        ]);

        Product::create([
            'name' => 'Rose',
            'category_id' => 2,
            'price' => 20000,
            'stock' => 50,
            'image' => 'rose.jpg',
            'description' => 'A popular outdoor flowering plant',
        ]);
    }
}
