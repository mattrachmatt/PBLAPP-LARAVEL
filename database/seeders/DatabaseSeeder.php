<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create(
            [
                'name' => 'Admin',
                'email' => 'admin@coba.com',
                'password'=> bcrypt('rahasia123'),
                'role'=> '99'
            ]
        );

        \App\Models\User::factory()->create(
            [
                'name' => 'Mahasiswa',
                'email' => 'mhs@coba.com',
                'password'=> bcrypt('rahasia123'),
                'role'=> '1'
            ]
        );
    }
}
