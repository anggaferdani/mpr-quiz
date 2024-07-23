<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Setting;
use App\Models\Team;
use App\Models\User;
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
    }
}
