<?php

namespace Database\Seeders;

use App\Models\StockAdjustment;
use Illuminate\Database\Seeder;

class StockAdjustmentSeeder extends Seeder
{
    public function run(): void
    {
        $adjustments = [
            ['product_id' => 1, 'user_id' => 1, 'type' => 'increase', 'qty' => 5, 'reason' => 'Initial stock correction'],
            ['product_id' => 2, 'user_id' => 1, 'type' => 'increase', 'qty' => 10, 'reason' => 'New shipment received'],
            ['product_id' => 3, 'user_id' => 2, 'type' => 'decrease', 'qty' => 3, 'reason' => 'Damaged items removed'],
            ['product_id' => 4, 'user_id' => 2, 'type' => 'increase', 'qty' => 15, 'reason' => 'Restock from supplier'],
            ['product_id' => 5, 'user_id' => 3, 'type' => 'decrease', 'qty' => 2, 'reason' => 'Customer return processed'],
            ['product_id' => 6, 'user_id' => 3, 'type' => 'increase', 'qty' => 8, 'reason' => 'Inventory adjustment after audit'],
            ['product_id' => 7, 'user_id' => 4, 'type' => 'increase', 'qty' => 20, 'reason' => 'Bulk purchase order received'],
            ['product_id' => 8, 'user_id' => 4, 'type' => 'decrease', 'qty' => 4, 'reason' => 'Expired items discarded'],
            ['product_id' => 9, 'user_id' => 5, 'type' => 'increase', 'qty' => 12, 'reason' => 'Supplier delivery'],
            ['product_id' => 10, 'user_id' => 5, 'type' => 'decrease', 'qty' => 1, 'reason' => 'Lost item during transfer'],
            ['product_id' => 11, 'user_id' => 6, 'type' => 'increase', 'qty' => 7, 'reason' => 'Correction after miscount'],
            ['product_id' => 12, 'user_id' => 6, 'type' => 'decrease', 'qty' => 5, 'reason' => 'Defective batch removed'],
            ['product_id' => 13, 'user_id' => 7, 'type' => 'increase', 'qty' => 9, 'reason' => 'Stock replenishment'],
            ['product_id' => 14, 'user_id' => 7, 'type' => 'decrease', 'qty' => 2, 'reason' => 'Sample items taken'],
            ['product_id' => 15, 'user_id' => 8, 'type' => 'increase', 'qty' => 25, 'reason' => 'Seasonal restock'],
            ['product_id' => 16, 'user_id' => 8, 'type' => 'decrease', 'qty' => 6, 'reason' => 'Damaged in transit'],
            ['product_id' => 17, 'user_id' => 9, 'type' => 'increase', 'qty' => 14, 'reason' => 'Supplier delivery'],
            ['product_id' => 18, 'user_id' => 9, 'type' => 'decrease', 'qty' => 3, 'reason' => 'Spoiled goods removed'],
            ['product_id' => 19, 'user_id' => 10, 'type' => 'increase', 'qty' => 11, 'reason' => 'Inventory correction'],
            ['product_id' => 20, 'user_id' => 10, 'type' => 'decrease', 'qty' => 2, 'reason' => 'Customer complaint replacement'],
        ];

        // Loop through and use create() so timestamps are automatically added
        foreach ($adjustments as $adj) {
            StockAdjustment::create($adj);
        }
    }
}