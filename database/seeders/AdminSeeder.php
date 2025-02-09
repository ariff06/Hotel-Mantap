<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;


class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'nama'     => 'Atmin',
            'username'    => 'admin',
            'role'    => 'admin',
            'password' => bcrypt('1234'),
        ]);

        Admin::create([
            'nama'     => 'arip',
            'username'    => 'arif',
            'role'    => 'admin',
            'password' => bcrypt('qwe'),
        ]);
    
        Admin::create([
            'nama'     => 'resepsionis',
            'username'    => 'resepsionis',
            'role'    => 'resepsionis',
            'password' => bcrypt('123'),
        ]);
    
        Admin::create([
            'nama'     => 'Arip',
            'Username'    => 'arip',
            'role'    => 'resepsionis',
            'password' => bcrypt('12345'),
        ]);
    }
}
