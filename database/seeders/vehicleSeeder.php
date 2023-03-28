<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicles')->insert([
            [
                'name' => 'truk fuso',
                'type' => 'angkutan barang',
                'ownership' => 'sewa',
                'fuel_capacity' => 100,
                'service_date' => date('Y-m-d H:i:s',time()),
                'last_used' => date('Y-m-d H:i:s',time()),
                'is_use' => true
            ],
            [
                'name' => 'truk merci',
                'type' => 'angkutan barang',
                'ownership' => 'perusahaan',
                'fuel_capacity' => 200,
                'service_date' => date('Y-m-d H:i:s',time()),
                'last_used' => date('Y-m-d H:i:s',time()),
                'is_use' => false
            ],
        ]);
    }
}
