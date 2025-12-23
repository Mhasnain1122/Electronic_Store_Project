<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        Supplier::insert([
            [
                'name' => 'Global Tech Supply',
                'phone' => '123-555-0101',
                'email' => 'contact@global.com',
                'address' => 'USA',
            ],
            [
                'name' => 'Mega Components Inc',
                'phone' => '987-555-0202',
                'email' => 'sales@mega.com',
                'address' => 'Germany',
            ],
            [
                'name' => 'Prime Electronics Ltd',
                'phone' => '555-111-2233',
                'email' => 'info@primeelectronics.com',
                'address' => 'UK',
            ],
            [
                'name' => 'Asia Hardware Co',
                'phone' => '555-222-3344',
                'email' => 'support@asiahardware.com',
                'address' => 'China',
            ],
            [
                'name' => 'Euro Parts GmbH',
                'phone' => '555-333-4455',
                'email' => 'sales@europarts.de',
                'address' => 'Germany',
            ],
            [
                'name' => 'Pacific Supplies',
                'phone' => '555-444-5566',
                'email' => 'contact@pacificsupplies.com',
                'address' => 'Japan',
            ],
            [
                'name' => 'NorthStar Distributors',
                'phone' => '555-555-6677',
                'email' => 'hello@northstar.com',
                'address' => 'Canada',
            ],
            [
                'name' => 'TechnoWorld Traders',
                'phone' => '555-666-7788',
                'email' => 'sales@technoworld.com',
                'address' => 'India',
            ],
            [
                'name' => 'Global Connect Ltd',
                'phone' => '555-777-8899',
                'email' => 'info@globalconnect.com',
                'address' => 'Singapore',
            ],
            [
                'name' => 'Bright Future Supply',
                'phone' => '555-888-9900',
                'email' => 'contact@brightfuture.com',
                'address' => 'Australia',
            ],
            [
                'name' => 'NextGen Components',
                'phone' => '555-999-0011',
                'email' => 'sales@nextgen.com',
                'address' => 'USA',
            ],
            [
                'name' => 'Smart Solutions Co',
                'phone' => '555-101-1122',
                'email' => 'info@smartsolutions.com',
                'address' => 'UK',
            ],
            [
                'name' => 'Infinity Traders',
                'phone' => '555-121-3141',
                'email' => 'support@infinity.com',
                'address' => 'UAE',
            ],
            [
                'name' => 'Vision Electronics',
                'phone' => '555-141-5161',
                'email' => 'sales@visionelectronics.com',
                'address' => 'France',
            ],
            [
                'name' => 'Alpha Supply Chain',
                'phone' => '555-161-7181',
                'email' => 'contact@alphasupply.com',
                'address' => 'USA',
            ],
            [
                'name' => 'Delta Components',
                'phone' => '555-181-9202',
                'email' => 'sales@deltacomponents.com',
                'address' => 'Brazil',
            ],
            [
                'name' => 'Matrix Hardware',
                'phone' => '555-202-1222',
                'email' => 'info@matrixhardware.com',
                'address' => 'South Korea',
            ],
            [
                'name' => 'Zenith Supplies',
                'phone' => '555-222-3242',
                'email' => 'support@zenithsupplies.com',
                'address' => 'Italy',
            ],
            [
                'name' => 'Atlas Distribution',
                'phone' => '555-242-5262',
                'email' => 'contact@atlasdistribution.com',
                'address' => 'Spain',
            ],
            [
                'name' => 'Nova Components',
                'phone' => '555-262-7282',
                'email' => 'sales@novacomponents.com',
                'address' => 'Mexico',
            ],
        ]);
    }
}