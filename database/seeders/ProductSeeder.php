<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Смартфон',
            'sku' => 'EL-001',
            'category_id' => 1
        ]);
    }
}
