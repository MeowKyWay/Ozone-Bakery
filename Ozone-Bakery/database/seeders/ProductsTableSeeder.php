<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Product A',
                'price' => 25,
                'image_path' => 'public/image/product/clinkers-cake-173208-2.jpg',
                'description' => 'Hey! Nice piece cake',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product B',
                'price' => 35,
                'image_path' => 'public/image/product/clinkers-cake-173208-2.jpg',
                'description' => 'Hey! Nice piece cake',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more product data as needed
        ];

        // Insert the data into the products table
        Product::insert($data);
    }
}
