<?php

namespace Database\Seeders;

use App\Models\storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class storageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        storage::create([
            'brand' => 'Rak A001',
            'user_id' => 1,
            'icon_id' => 1,
        ]);

        storage::create([
            'brand' => 'Rak A002',
            'user_id' => 2,
            'icon_id' => 2,
        ]);

        storage::create([
            'brand' => 'Rak A002',
            'user_id' => 2,
            'icon_id' => 2,
        ]);

        storage::create([
            'brand' => 'Rak A003',
            'user_id' => 3,
            'icon_id' => 3,
        ]);

        storage::create([
            'brand' => 'Rak A004',
            'user_id' => 4,
            'icon_id' => 4,
        ]);

        storage::create([
            'brand' => 'Rak A005',
            'user_id' => 5,
            'icon_id' => 5,
        ]);

        storage::create([
            'brand' => 'Rak A006',
            'user_id' => 6,
            'icon_id' => 6,
        ]);

        storage::create([
            'brand' => 'Rak A007',
            'user_id' => 7,
            'icon_id' => 7,
        ]);

        storage::create([
            'brand' => 'Rak A008',
            'user_id' => 8,
            'icon_id' => 7,
        ]);

        storage::create([
            'brand' => 'Rak A009',
            'user_id' => 9,
            'icon_id' => 7,
        ]);

        storage::create([
            'brand' => 'Rak A010',
            'user_id' => 10,
            'icon_id' => 10,
        ]);
    }
}
