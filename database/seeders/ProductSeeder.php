<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'product_name' => 'paksi',
            'product_photo_filename' => '',
            'product_price' => 45000,
        ]);

        Product::create([
            'product_name' => 'ipan',
            'product_photo_filename' => '',
            'product_price' => 50000,
        ]);

        Product::create([
            'product_name' => 'husni',
            'product_photo_filename' => '',
            'product_price' => 60000,
        ]);
    }
}
