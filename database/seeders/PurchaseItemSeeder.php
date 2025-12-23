<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\PurchaseItem;
use Illuminate\Database\Seeder;

class PurchaseItemSeeder extends Seeder
{
    public function run(): void
    {
        // Safety check: make sure we have purchases and products
        if (Purchase::count() === 0 || Product::count() === 0) {
            $this->command?->warn('PurchaseItemSeeder skipped: missing purchases or products.');
            return;
        }

        // Create 20 records
        for ($i = 1; $i <= 20; $i++) {
            $purchaseId = rand(1, 20);   // random purchase_id between 1–20
            $productId  = rand(1, 20);   // random product_id between 1–20

            $product = Product::find($productId);

            // Skip if product not found
            if (!$product) {
                continue;
            }

            $qty  = rand(1, 10); // random quantity
            $cost = $product->cost_price;

            PurchaseItem::create([
                'purchase_id' => $purchaseId,
                'product_id'  => $productId,
                'qty'         => $qty,
                'cost_price'  => $cost,
                'subtotal'    => $qty * $cost,
            ]);
        }
    }
}