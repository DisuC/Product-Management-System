<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Sample Product 1',
            'description' => 'This is a sample description for product 1.',
            'price' => 99.99,
            'stock' => 100,
        ]);

        Product::create([
            'name' => 'Sample Product 2',
            'description' => 'This is a sample description for product 2.',
            'price' => 59.99,
            'stock' => 50,
        ]);
    }
}
