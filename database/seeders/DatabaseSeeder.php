<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Team;
use App\Models\User;
use App\Models\Pointer;
use App\Models\Setting;
use App\Models\Wilayah;
use App\Models\Pernyataan;
use App\Models\PertanyaanSesi3;
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
                "pernyataan" => "Pendidikan Online Lebih Efektif daripada Pendidikan Tatap Muka.",
                "sisi" => "Pro"
            ],
            [
                "pernyataan" => "Energi Nuklir Harus Menjadi Sumber Energi Utama di Masa Depan.",
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
                'pernyataan_id' => 1,
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

        PertanyaanSesi3::insert([
            [
                "pertanyaan" => "Pemerintah menetapkan Hari Lahir Pancasila Setiap tanggal 1 Juni. Dasar hukum penetapan hari kelahiran Pancasila 1 Juni adalah?",
                "jawaban" => "Keputusan Presiden Nomor 24 Tahun 2016.",
            ], [
                "pertanyaan" => "Sebutkan Lembaga-Lembaga Negara yang dibentuk berdasarkan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "1. MPR RI 2. Presiden 3. DPR RI 4. DPD RI 5.BPK 6. Mahkamah Konstitusi 7. Mahkamah Agung 8. Komisi Yudisial.",
            ], [
                "pertanyaan" => "Sebutkan Pasal terkait keadaan bahaya dan ihwal kegentingan yang memaksa menurut Undang-Undang Dasar NRI Tahun 1945?",
                "jawaban" => "Pasal 12 dan 22 ayat (1).",
            ], [
                "pertanyaan" => "Berdasarkan Ketetapan MPR Nomor I/MPR/2003, ketentuan dari pemberlakuan Ketetapan Majelis Permusyawaratan Rakyat Sementara Republik   Indonesia Nomor XXV/MPRS/1966 adalah?",
                "jawaban" => "Seluruh ketentuan dalam Ketetapan Majelis Permusyawaratan Rakyat Sementara Republik Indonesia Nomor XXV/MPRS/1966 ini, ke depan diberlakukan dengan berkeadilan dan menghormati hukum, prinsip demokrasi dan hak asasi manusia.",
            ], [
                "pertanyaan" => "Siapakah Konseptor Lambang Garuda Pancasila?",
                "jawaban" => "Sultan Hamid II.",
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 2 ayat (1) adalah?",
                "jawaban" => "Majelis Permusyawaratan Rakyat terdiri atas anggota Dewan Perwakilan Rakyat dan anggota Dewan Perwakilan Daerah yang dipilih melalui pemilihan umum dan diatur lebih lanjut dengan undang-undang.",
            ], [
                "pertanyaan" => "Pahlawan nasional yang bernama Halim Perdana Kusuma merupakan tokoh masyarakat berasal dari Provinsi?",
                "jawaban" => "Jawa Timur.",
            ], [
                "pertanyaan" => "Bunyi Sila Pertama Pancasila yaitu Ketuhanan Yang Maha Esa. Pada Alinea keberapa Pembukaan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 terdapat kalimat tersebut?",
                "jawaban" => "Alinea ke-4.",
            ], [
                "pertanyaan" => "Pencipta lagu nasional Himne Guru adalah?",
                "jawaban" => "Sartono.",
            ], [
                "pertanyaan" => "Prolegnas merupakan skala prioritas program pembentukan Undang-Undang dalam rangka mewujudkan sistem hukum nasional. Sebutkan kepanjangan dari Prolegnas.",
                "jawaban" => "Program Legislasi Nasional.",
            ],
        ]);
    }
}
