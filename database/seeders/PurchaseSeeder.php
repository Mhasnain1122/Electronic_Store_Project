<?php

namespace Database\Seeders;

use App\Models\Purchase;
use Illuminate\Database\Seeder;

class PurchaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create 20 purchase records
        for ($i = 1; $i <= 20; $i++) {
            Purchase::create([
                'supplier_id'   => rand(1, 20), // random supplier between 1–20
                'invoice_no'    => 'PUR-' . str_pad($i, 4, '0', STR_PAD_LEFT), // PUR-0001, PUR-0002...
                'purchase_date' => now()->subDays(rand(0, 30)), // random date within last 30 days
                'total_amount'  => rand(500, 5000), // random amount between 500–5000
            ]);
        }
    }
}
