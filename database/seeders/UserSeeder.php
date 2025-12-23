<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@store.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'John Smith',
                'email' => 'john.smith@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'Emily Johnson',
                'email' => 'emily.johnson@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michael.brown@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'Sarah Davis',
                'email' => 'sarah.davis@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'David Wilson',
                'email' => 'david.wilson@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'Laura Martinez',
                'email' => 'laura.martinez@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'James Anderson',
                'email' => 'james.anderson@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'Olivia Thomas',
                'email' => 'olivia.thomas@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'Daniel Taylor',
                'email' => 'daniel.taylor@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'Sophia Moore',
                'email' => 'sophia.moore@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'Christopher Jackson',
                'email' => 'chris.jackson@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'Isabella White',
                'email' => 'isabella.white@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'Matthew Harris',
                'email' => 'matthew.harris@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'Grace Clark',
                'email' => 'grace.clark@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'Andrew Lewis',
                'email' => 'andrew.lewis@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'Chloe Walker',
                'email' => 'chloe.walker@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'Joshua Hall',
                'email' => 'joshua.hall@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'Mia Allen',
                'email' => 'mia.allen@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
            [
                'name' => 'Ethan Young',
                'email' => 'ethan.young@store.com',
                'password' => Hash::make('password'),
                'role' => 'cashier',
            ],
        ]);
    }
}