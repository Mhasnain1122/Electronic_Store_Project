<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [];

        for ($i = 1; $i <= 20; $i++) {
            $products[] = [
                'category_id'     => rand(1, 5), // random category between 1–5
                'supplier_id'     => rand(1, 20), // random supplier between 1–20
                'name'            => 'Product ' . $i,
                'barcode'         => 'BARCODE' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'cost_price'      => rand(50, 1000), // random cost
                'sale_price'      => rand(100, 1500), // random sale price
                'stock_qty'       => rand(0, 100), // random stock availability
                'min_stock'       => rand(1, 10), // random minimum stock threshold
                'warranty_months' => rand(0, 24), // random warranty period
            ];
        }

        Product::insert($products);
    }
}