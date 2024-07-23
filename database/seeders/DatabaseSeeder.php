<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Team;
use App\Models\User;
use App\Models\Pointer;
use App\Models\Setting;
use App\Models\Wilayah;
use App\Models\Pernyataan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Operator',
                'email' => 'operator@mprquiz.id',
                'password' => bcrypt('op12345678'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

        $Team = [
            [
                'name' => 'Grup A',
            ],
            [
                'name' => 'Grup B',
            ],
            [
                'name' => 'Grup C',
            ],
            [
                'name' => 'Grup D',
            ],
            [
                'name' => 'Grup E',
            ],
            [
                'name' => 'Grup F',
            ],
            [
                'name' => 'Grup G',
            ],
            [
                'name' => 'Grup H',
            ],
            [
                'name' => 'Grup I',
            ],
        ];

        foreach ($Team as $key => $seed) {
            Team::create($seed);
        }

        Setting::create([
            'run' => 1
        ]);

        $this->call(PertanyaanKotaSemarangSeeder::class);

        $wilayahs = [
            'Semarang',
        ];

        foreach ($wilayahs as $role) {
            Wilayah::create([
                'nama_wilayah' => $role,
            ]);
        }


        Pernyataan::insert([
                [
                    "pernyataan" => "Badan Penyelidik Usaha-usaha Persiapan Kemerdekaan atau yang dikenal dengan BPUPKI dibentuk pada masa pendudukan Jepang di Indonesia. Sebutkan tugas-tugas yang diberikan kepada BPUPKI saat melaksanakan persidangan pada tanggal 29 Mei sampai 01 Juni 1945 dan 10 sampai 17 Juli 1945!",
                    "sisi" => "Pro"
                ],
                [
                    "pernyataan" => "BPUPKI dibentuk pada masa pendudukan Jepang di Indonesia. Sebutkan tugas-tugas yang diberikan kepada BPUPKI saat melaksanakan persidangan pada tanggal 29 Mei sampai 01 Juni 1945 ",
                    "sisi" => "Kontra"
                ],
        ]);

        Pointer::insert([
            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Aksesibilitas',
                'sisi' => 'pro'
            ],
            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Fleksibilitas Waktu',
                'sisi' => 'pro'
            ],
            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Interaksi Sosial',
                'sisi' => 'kontra'
            ],
            [
                'pernyataan_id' => 2,
                'penjelasan' => 'Kedisiplinan dan Motivasi',
                'sisi' => 'kontra'
            ],
            [
                'pernyataan_id' => 2,
                'penjelasan' => 'Efisiensi Energi',
                'sisi' => 'pro'
            ],
            [
                'pernyataan_id' => 2,
                'penjelasan' => 'Emisi Karbon Rendah',
                'sisi' => 'pro'
            ],
            [
                'pernyataan_id' => 2,
                'penjelasan' => 'Keselamatan dan Risiko',
                'sisi' => 'kontra'
            ],
            [
                'pernyataan_id' => 2,
                'penjelasan' => 'Limbah Nuklir',
                'sisi' => 'kontra'
            ]
        ]);
    }
}
