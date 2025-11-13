<?php

namespace Database\Seeders;

use App\Models\barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barangs = [
            ['nama_barang' => 'Padi', 'berat' => 10.13, 'keterangan' => 'Hasil panen', 'foto' => 'padi.jpg', 'storage_id' => 1],
            ['nama_barang' => 'Jagung', 'berat' => 8.25, 'keterangan' => 'Hasil ladang', 'foto' => 'jagung.jpg', 'storage_id' => 2],
            ['nama_barang' => 'Kedelai', 'berat' => 12.50, 'keterangan' => 'Untuk bahan tempe', 'foto' => 'kedelai.jpg', 'storage_id' => 4],
            ['nama_barang' => 'Gandum', 'berat' => 7.89, 'keterangan' => 'Bahan roti', 'foto' => 'gandum.jpg', 'storage_id' => 2],
            ['nama_barang' => 'Kentang', 'berat' => 15.75, 'keterangan' => 'Umbi segar', 'foto' => 'kentang.jpg', 'storage_id' => 1],
            ['nama_barang' => 'Tomat', 'berat' => 9.40, 'keterangan' => 'Segar dari kebun', 'foto' => 'tomat.jpg', 'storage_id' => 1],
            ['nama_barang' => 'Cabai', 'berat' => 6.30, 'keterangan' => 'Pedas mantap', 'foto' => 'cabai.jpg', 'storage_id' => 4],
            ['nama_barang' => 'Bawang Merah', 'berat' => 11.60, 'keterangan' => 'Bumbu dapur', 'foto' => 'bawang_merah.jpg', 'storage_id' => 7],
            ['nama_barang' => 'Wortel', 'berat' => 5.85, 'keterangan' => 'Sayur vitamin A', 'foto' => 'wortel.jpg', 'storage_id' => 2],
            ['nama_barang' => 'Ubi Jalar', 'berat' => 14.22, 'keterangan' => 'Untuk camilan', 'foto' => 'ubi.jpg', 'storage_id' => 5],
        ];

        foreach ($barangs as $barang) {
            Barang::create($barang);
        }
    }
}
