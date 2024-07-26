<?php

namespace Database\Seeders;

use App\Models\TemaPertanyaan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TemaPertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $temaPertanyaans = [
            [
                'tema' => 'PANCASILA, UUD NRI Tahun 1945 dan Ketetapan MPR',
                'sesi' => 1
            ], [
                'tema' => 'NKRI dan Bhinneka Tunggal Ika',
                'sesi' => 1
            ], [
                'tema' => 'Pengetahuan Umum',
                'sesi' => 1
            ], [
                'tema' => 'NKRI',
                'sesi' => 2
            ]
        ];

        foreach ($temaPertanyaans as $temaPertanyaan) {
            TemaPertanyaan::create($temaPertanyaan);
        }
    }
}
