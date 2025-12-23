<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $categories = [];

        // Example pool of category names and descriptions
        $names = [
            'Laptops', 'Mobiles', 'Accessories', 'Tablets', 'Monitors',
            'Printers', 'Networking', 'Storage Devices', 'Software', 'Gaming',
            'Smartwatches', 'Headphones', 'Speakers', 'Cameras', 'drones',
            'Home Appliances', 'Office Supplies', 'furniture', 'Wearables', 'Power Banks'
        ];

        $descriptions = [
            'High performance laptops',
            'Latest smartphones',
            'Keyboards, mice, and more',
            'Portable tablets for work and play',
            'HD and 4K monitors',
            'Printers and scanners',
            'Routers, switches, and more',
            'Hard drives and SSDs',
            'Licensed software tools',
            'Gaming consoles and accessories',
            'Smart wearable devices',
            'Noise-cancelling headphones',
            'Bluetooth speakers',
            'Digital cameras',
            'Flying drones',
            'Smart home appliances',
            'Stationery and office essentials',
            'Office and home furniture',
            'Fitness wearables',
            'Portable charging devices'
        ];

        for ($i = 0; $i < 20; $i++) {
            $categories[] = [
                'name'        => $names[$i],
                'description' => $descriptions[$i],
                'image'       => 'categories/' . strtolower(str_replace(' ', '_', $names[$i])) . '.jpg',
                'created_at'  => $now,
                'updated_at'  => $now,
            ];
        }

        Category::insert($categories);
    }
}