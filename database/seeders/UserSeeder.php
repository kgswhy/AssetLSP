<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminadmin'),
            'role' => 'admin',
            'nis' => 002011211
        ]);

        User::create([
            'name' => 'petugas',
            'email' => 'petugas@user.com',
            'password' => bcrypt('petugas123'),
            'role' => 'petugas',
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('user123'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'Kgswahyu',
            'email' => 'kgs@gmail.com',
            'password' => bcrypt('zaindev'),
            'role' => 'user',
            'nis' => 539211223,
            'kelas' => 'XII Tel 13',
        ]);
    }
}
