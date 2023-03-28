<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => Hash::make('john123'),
                'role' => 'pegawai'
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'janedoe@example.com',
                'password' => Hash::make('jane123'),
                'role' => 'pegawai'
            ],
            [
                'name' => 'Jake Doe',
                'email' => 'jakedoe@example.com',
                'password' => Hash::make('jake123'),
                'role' => 'pegawai'
            ],
        ]);
    }
}
