<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pernyataan;
use App\Models\Setting;
use App\Models\Team;
use App\Models\User;
use App\Models\Wilayah;
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
                'name' => 'Group A',
            ],
            [
                'name' => 'Group B',
            ],
            [
                'name' => 'Group C',
            ],
            [
                'name' => 'Group D',
            ],
            [
                'name' => 'Group E',
            ],
            [
                'name' => 'Group F',
            ],
            [
                'name' => 'Group G',
            ],
            [
                'name' => 'Group H',
            ],
            [
                'name' => 'Group I',
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
            ]
        );
    }
}
