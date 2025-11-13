<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'jk' => 'L',
            'no_telp' => '081234567890',
            'alamat' => 'Jl. Merdeka No. 1',
            'photo' => 'admin.jpg',
            'tgl_lahir' => '1990-01-01',
            'username' => 'admin',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        $users = [
            [
                'name' => 'Budiono',
                'email' => 'budiono@gmail.com',
                'jk' => 'L',
                'no_telp' => '08123456782',
                'alamat' => 'Jl. Merdeka No. 2',
                'photo' => 'user1.jpg',
                'tgl_lahir' => '1990-01-01',
                'username' => 'budiono',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Siti Aminah',
                'email' => 'siti@gmail.com',
                'jk' => 'P',
                'no_telp' => '08123456783',
                'alamat' => 'Jl. Diponegoro No. 12',
                'photo' => 'user2.jpg',
                'tgl_lahir' => '1992-03-05',
                'username' => 'siti',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Rudi Hartono',
                'email' => 'rudi@gmail.com',
                'jk' => 'L',
                'no_telp' => '08123456784',
                'alamat' => 'Jl. Sudirman No. 3',
                'photo' => 'user3.jpg',
                'tgl_lahir' => '1988-07-20',
                'username' => 'rudi',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Dewi Lestari',
                'email' => 'dewi@gmail.com',
                'jk' => 'P',
                'no_telp' => '08123456785',
                'alamat' => 'Jl. Kenanga No. 10',
                'photo' => 'user4.jpg',
                'tgl_lahir' => '1995-05-10',
                'username' => 'dewi',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Andi Saputra',
                'email' => 'andi@gmail.com',
                'jk' => 'L',
                'no_telp' => '08123456786',
                'alamat' => 'Jl. Mawar No. 9',
                'photo' => 'user5.jpg',
                'tgl_lahir' => '1991-09-09',
                'username' => 'andi',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Lina Marlina',
                'email' => 'lina@gmail.com',
                'jk' => 'P',
                'no_telp' => '08123456787',
                'alamat' => 'Jl. Melati No. 4',
                'photo' => 'user6.jpg',
                'tgl_lahir' => '1993-02-22',
                'username' => 'lina',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Taufik Hidayat',
                'email' => 'taufik@gmail.com',
                'jk' => 'L',
                'no_telp' => '08123456788',
                'alamat' => 'Jl. Pahlawan No. 7',
                'photo' => 'user7.jpg',
                'tgl_lahir' => '1989-04-15',
                'username' => 'taufik',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Nur Aini',
                'email' => 'aini@gmail.com',
                'jk' => 'P',
                'no_telp' => '08123456789',
                'alamat' => 'Jl. Mawar No. 8',
                'photo' => 'user8.jpg',
                'tgl_lahir' => '1994-06-12',
                'username' => 'aini',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Joko Susilo',
                'email' => 'joko@gmail.com',
                'jk' => 'L',
                'no_telp' => '08123456790',
                'alamat' => 'Jl. Semangka No. 5',
                'photo' => 'user9.jpg',
                'tgl_lahir' => '1996-11-30',
                'username' => 'joko',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Maya Putri',
                'email' => 'maya@gmail.com',
                'jk' => 'P',
                'no_telp' => '08123456791',
                'alamat' => 'Jl. Flamboyan No. 1',
                'photo' => 'user10.jpg',
                'tgl_lahir' => '1997-08-25',
                'username' => 'maya',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
