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
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Sebutkan Lembaga-Lembaga Negara yang dibentuk berdasarkan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "1. MPR RI 2. Presiden 3. DPR RI 4. DPD RI 5.BPK 6. Mahkamah Konstitusi 7. Mahkamah Agung 8. Komisi Yudisial.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Sebutkan Pasal terkait keadaan bahaya dan ihwal kegentingan yang memaksa menurut Undang-Undang Dasar NRI Tahun 1945?",
                "jawaban" => "Pasal 12 dan 22 ayat (1).",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Berdasarkan Ketetapan MPR Nomor I/MPR/2003, ketentuan dari pemberlakuan Ketetapan Majelis Permusyawaratan Rakyat Sementara Republik   Indonesia Nomor XXV/MPRS/1966 adalah?",
                "jawaban" => "Seluruh ketentuan dalam Ketetapan Majelis Permusyawaratan Rakyat Sementara Republik Indonesia Nomor XXV/MPRS/1966 ini, ke depan diberlakukan dengan berkeadilan dan menghormati hukum, prinsip demokrasi dan hak asasi manusia.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Siapakah Konseptor Lambang Garuda Pancasila?",
                "jawaban" => "Sultan Hamid II.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 2 ayat (1) adalah?",
                "jawaban" => "Majelis Permusyawaratan Rakyat terdiri atas anggota Dewan Perwakilan Rakyat dan anggota Dewan Perwakilan Daerah yang dipilih melalui pemilihan umum dan diatur lebih lanjut dengan undang-undang.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Pahlawan nasional yang bernama Halim Perdana Kusuma merupakan tokoh masyarakat berasal dari Provinsi?",
                "jawaban" => "Jawa Timur.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Bunyi Sila Pertama Pancasila yaitu Ketuhanan Yang Maha Esa. Pada Alinea keberapa Pembukaan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 terdapat kalimat tersebut?",
                "jawaban" => "Alinea ke-4.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Pencipta lagu nasional Himne Guru adalah?",
                "jawaban" => "Sartono.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Prolegnas merupakan skala prioritas program pembentukan Undang-Undang dalam rangka mewujudkan sistem hukum nasional. Sebutkan kepanjangan dari Prolegnas.",
                "jawaban" => "Program Legislasi Nasional.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Suku yang berada di wilayah gunung Bromo yang terletak di kabupaten Probolinggo Provinsi Jawa Timur adalah?",
                "jawaban" => "Suku Tengger.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 23 ayat (3) adalah?",
                "jawaban" => "Apabila Dewan Perwakilan Rakyat tidak menyetujui rancangan anggaran pendapatan dan belanja negara yang diusulkan oleh Presiden, Pemerintah menjalankan Anggaran Pendapatan dan Belanja Negara tahun yang lalu.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Pada pidato 1 Juni 1945, Ir. Soekarno memberikan alternatif selain lima sila, ada ekasila yaitu?",
                "jawaban" => "Gotong royong.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Martha Christina Tiahahu adalah pahlawan nasional yang merupakan tokoh masyarakat berasal dari Provinsi?",
                "jawaban" => "Maluku.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Menurut Pasal 8 Ayat (3) Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 “Jika Presiden dan Wakil Presiden berhalangan tetap, pelaksanaan tugas Kepresidenan dilakukan secara bersamaan oleh?",
                "jawaban" => "Menteri Luar Negeri, Menteri Dalam Negeri dan Menteri Pertahanan.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Dasar hukum peninjauan ketetapan MPRS/MPR oleh MPR adalah?",
                "jawaban" => "Pasal I Aturan Tambahan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Tema Hari Ulang Tahun Kemerdekaan Republik Indonesia ke-79 Adalah Nusantara Maju, Indonesia Baru. Apa dasar hukum pembentukan Ibu Kota Nusantara? ",
                "jawaban" => "Undang-Undang Nomor 3 Tahun 2022 diubah dengan Undang-Undang Nomor 21 Tahun 2023 Tentang Ibu Kota Negara.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Dalam hal tidak ada pasangan calon Presiden dan Wakil Presiden terpilih, dua pasangan calon yang memperoleh suara terbanyak pertama dan kedua dalam pemilihan umum dipilih oleh rakyat secara langsung dan pasangan yang memperoleh suara rakyat terbanyak dilantik sebagai Presiden dan Wakil Presiden. Ketentuan tersebut merupakan rumusan Pasal 6A ayat (4) yang ditetapkan dalam Sidang Majelis Permusyawaran Rakyat Tahun berapa?",
                "jawaban" => "2002",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 8 ayat (2) adalah?",
                "jawaban" => "Dalam hal terjadi kekosongan Wakil Presiden, selambat-lambatnya dalam waktu enam puluh hari, Majelis Permusyawaratan Rakyat menyelenggarakan sidang untuk memilih Wakil Presiden dari dua calon yang diusulkan oleh Presiden.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Lagu nasional Garuda Pancasila diciptakan oleh?",
                "jawaban" => "Sudharnoto.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "1.	Salah satu nama Bandar Udara di Indonesia menggunakan nama pahlawan nasional yaitu Radin Inten II, yang merupakan tokoh masyarakat berasal dari Provinsi?",
                "jawaban" => "Lampung.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Cabang-cabang produksi yang penting bagi negara dan yang menguasai hajat hidup orang banyak dikuasai oleh negara. Pernyataan tersebut merupakan rumusan Pasal dan Ayat berapa dalam Undang Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "Pasal 33 ayat (2).",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Etika Kehidupan Berbangsa diatur dalam Ketetapan MPR RI Nomor?",
                "jawaban" => "Nomor VI/MPR/2001.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Jumlah bab, pasal, dan ayat Undang Undang Dasar Negara Republik Indonesia Tahun 1945 setelah diubah tahun 1999-2002 adalah 21 bab, 73 pasal, 170 ayat, 3 pasal aturan peralihan, dan 2 pasal aturan tambahan. Perubahan Undang-Undang Dasar Negara Republik Indonesia tahun 1945 pada tahun 1999 – 2002 dilakukan dengan cara?",
                "jawaban" => "Adendum.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Dalam Pidato Bung Karno Tanggal 1 Juni 1945 mengusulkan alternatif rumusan Dasar Negara dalam tiga sila (Trisila) sebutkan?",
                "jawaban" => "Sosionasionalisme, Sosiodemokrasi, dan Ketuhanan",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 31 ayat (3) adalah?",
                "jawaban" => "Pemerintah mengusahakan dan menyelenggarakan satu sistem pendidikan nasional, yang meningkatkan keimanan dan ketakwaan serta akhlak mulia dalam rangka mencerdaskan kehidupan bangsa, yang diatur dengan undang-undang.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Terwujudnya penghormatan terhadap martabat kemanusiaan, merupakan salah satu indikator dari Visi Indonesia Masa Depan tentang religius. Ketetapan Majelis Permusyawaratan Rakyat Republik Indonesia tentang visi Indonesia masa depan adalah nomor?",
                "jawaban" => "Nomor VII/MPR/2001.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Lagu nasional terima kasih kepada pahlawanku diciptakan oleh?",
                "jawaban" => "Husein Mutahar.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Perubahan kedua Undang Undang Dasar Negara Republik Indonesia Tahun 1945 ditetapkan pada Sidang Tahunan MPR Tahun 2000. Salah satu hasil perubahan kedua adalah ditetapkannya BAB IXA (sembilan A) Undang Undang Dasar Negara Republik Indonesia Tahun 1945 yaitu tentang?",
                "jawaban" => "Wilayah Negara.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 28C ayat (2) adalah?",
                "jawaban" => "Setiap orang berhak untuk memajukan dirinya dalam memperjuangkan haknya secara kolektif untuk membangun masyarakat, bangsa, dan negaranya.",
                'wilayah_id' => 1,
            ],
        ]);
    }
}
