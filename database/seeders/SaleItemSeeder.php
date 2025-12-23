<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleItem;
use Illuminate\Database\Seeder;

class SaleItemSeeder extends Seeder
{
    public function run(): void
    {
        // SAFETY CHECK
        if (Sale::count() === 0 || Product::count() === 0) {
            return;
        }

        // Only fetch products that are available (stock > 0)
        $availableProducts = Product::where('stock_qty', '>', 0)->pluck('id')->toArray();
        $availableSales    = Sale::pluck('id')->toArray();

        if (empty($availableProducts) || empty($availableSales)) {
            $this->command?->warn('SaleItemSeeder skipped: no available products or sales.');
            return;
        }

        // Create 20 records
        for ($i = 0; $i < 20; $i++) {
            $saleId    = $availableSales[array_rand($availableSales)];
            $productId = $availableProducts[array_rand($availableProducts)];

            $product = Product::find($productId);

            if (!$product) {
                continue;
            }

            $qty = rand(1, min(5, $product->stock_qty)); // don’t exceed stock
            $subtotal = $product->sale_price * $qty;

            SaleItem::create([
                'sale_id'    => $saleId,
                'product_id' => $productId,
                'qty'        => $qty,
                'price'      => $product->sale_price,
                'subtotal'   => $subtotal,
            ]);

            // Optionally reduce stock after sale
            $product->decrement('stock_qty', $qty);
        }
    }
}