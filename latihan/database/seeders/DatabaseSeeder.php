<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ]);

        // insert data mahasiswa menggunakan query builder
        DB::table('mahasiswa')->insert([
            'npm' => '2428250074',
            'nama_mahasiswa' => 'Krisna Pramudya',
            'tempat_lahir' => 'Palembang',
            'tanggal_lahir' => '2001-07-15',
            'alamat' => 'Palembang'
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('mahasiswa')
        -> where("npm", "2428250074")
        -> update(["npm", "2428250074P"])
    }
}
