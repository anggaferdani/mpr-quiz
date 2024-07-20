<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\PertanyaanKotaSemarangSeeder;

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
                'name' => 'Tim A',
            ],
            [
                'name' => 'Tim B',
            ],
            [
                'name' => 'Tim C',
            ],
            [
                'name' => 'Tim D',
            ],
            [
                'name' => 'Tim E',
            ],
            [
                'name' => 'Tim F',
            ],
            [
                'name' => 'Tim G',
            ],
            [
                'name' => 'Tim H',
            ],
            [
                'name' => 'Tim I',
            ],
        ];

        foreach ($Team as $key => $seed) {
            Team::create($seed);
        }

        $this->call(PertanyaanKotaSemarangSeeder::class);
    }
}
