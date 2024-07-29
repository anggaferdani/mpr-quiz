<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pernyataan;
use App\Models\PertanyaanSesi3;
use App\Models\Pointer;
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
                'name' => 'SMA Unggulan CT Foundation',
                'run' => 1,
            ],
            [
                'name' => 'SMAN 1 Matauli Pandan',
                'run' => 1,

            ],
            [
                'name' => 'SMAN 1 Sunggal',
                'run' => 1,

            ],
            [
                'name' => 'SMA Methodist Pematang Siantar',
                'run' => 2,

            ],
            [
                'name' => 'SMAN 1 Medan',
                'run' => 2,

            ],
            [
                'name' => 'SMAN 1 Binjai',
                'run' => 2,

            ],
            [
                'name' => 'SMAN 2 Plus Penyabungan',
                'run' => 3,

            ],
            [
                'name' => 'SMAN Lintongnihuta',
                'run' => 3,

            ],
            [
                'name' => 'SMAN 2 Balige',
                'run' => 3,

            ],
            [
                'name' => 'SMAN-1',
                'run' => 4,

            ],
            [
                'name' => 'SMAN-1',
                'run' => 4,

            ],
            [
                'name' => 'SMAN-1',
                'run' => 4,

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
                "pernyataan" => "Indonesia Yang Demokratis sebagaimana diamanatkan Ketetapan MPR RI Nomor VII/MPR/2001 tentang Visi Indonesia belum sesuai harapan",
                "run" => 1
            ], [
                "pernyataan" => "Pemerintah sudah secara memadai memberikan perlindungan, pemajuan, penegakan, dan pemenuhan hak asasi manusia.",
                "run" => 1
            ], [
                "pernyataan" => "Hak setiap orang untuk hidup sejahtera lahir dan batin, bertempat tinggal, dan mendapatkan lingkungan hidup yang baik dan sehat serta berhak memperoleh pelayanan kesehatan sudah berjalan dengan baik.",
                "run" => 1
            ], [
                "pernyataan" => "Indonesia Yang Religius sebagaimana diamanatkan Ketetapan MPR RI Nomor VII/MPR/2001 tentang Visi Indonesia belum sesuai harapan.",
                "run" => 1
            ], [
                "pernyataan" => "Perlindungan Pemerintah terhadap warga negara yang berada/bekerja di luar negeri sudah baik.",
                "run" => 1
            ], [
                "pernyataan" => "Kewenangan Pemerintah untuk melakukan pemblokiran situs tertentu",
                "run" => 1
            ], [
                "pernyataan" => "Penegasan Negara Indonesia adalah negara hukum sudah berjalan baik.",
                "run" => 1
            ], [
                "pernyataan" => "Hak warga negara untuk mendapat pendidikan di Indonesia sudah berjalan baik.",
                "run" => 1
            ], [
                "pernyataan" => "Tanggung jawab negara untuk memelihara fakir miskin dan anak-anak terlantar sudah berjalan baik.",
                "run" => 1
            ], [
                "pernyataan" => "Indonesia belum siap untuk berdemokrasi.",
                "run" => 1
            ], [
                "pernyataan" => "Untuk mencapai kemandirian ekonomi, Indonesia tidak boleh mengadakan utang baru kepada negara lain.",
                "run" => 1
            ], [
                "pernyataan" => "Majelis Permusyawaratan Rakyat (MPR) perlu diberikan kembali wewenang untuk menetapkan Garis-garis Besar Haluan Negara (GBHN).",
                "run" => 1
            ],
        ]);

        Pointer::insert([
            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Setiap pemilihan umum dan pemilihan kepala daerah sering terjadi ketegangan bahkan menjurus pertikaian',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                    'penjelasan' => 'Masih banyak masyarakat yang belum sadar menggunakan hak pilihnya dalam pemilihan umum maupun pemilihan kepala daerah.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                    'penjelasan' => 'Banyak organisasi kemasyarakatan yang dibentuk tetapi belum berfungsi sebagai organisasi yang menjembatani kepentingan antara masyarakat dan pemerintah.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                    'penjelasan' => 'Fungsi partai politik yang masih belum berjalan mengenai rekrutmen.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                    'penjelasan' => 'Sudah banyak dibentuk peraturan-peraturan yang memuat pengaturan keseimbangan kekuasaan antara lembaga penyelenggara negara dan hubungan kekuasaan antara pemerintahan nasional dan daerah.',
                    'sisi' => 'kontra'
                ], [
                    'pernyataan_id' => 1,
                    'penjelasan' => 'Partisipasi rakyat dalam pemilihan umum dan pemilihan kepala daerah yang telah dilaksanakan sangat tinggi. Ini merupakan bahwa partisipasi politik sebagai perwujudan kedaulatan rakyat sudah menguat.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                    'penjelasan' => 'Organisasi sosial, organisasi kemasyarakatan, dan organisasi politik  yang bersifat terbuka telah banyak dibentuk baik di daerah maupun dipusat.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                    'penjelasan' => 'Mekanisme pengawasan masyarakat terhadap penyelenggaraan pemerintahan sangat tinggi dan terbuka. Ini membuktikan bahwa kontrol di dalam kehidupan berbangsa dan bernegara telah terwujud.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                    'penjelasan' => 'Munculnya kepala daerah yang merupakan kehendak rakyat.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 2,
                    'penjelasan' => 'Pemerintah sudah secara memadai memberikan perlindungan, pemajuan, penegakan, dan pemenuhan hak asasi manusia.',
                    'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 2,
                    'penjelasan' => 'Peraturan tentang jaminan HAM sudah masuk dalam UUD dan peraturan pelaksananya.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                    'penjelasan' => 'Banyak organ pemerintah yang bergerak dalam perlindungan HAM.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                    'penjelasan' => 'Sudah ada pengadilan tentang HAM.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                    'penjelasan' => 'Negara sudah mengeluarkan banyak kebijakan tentang pemenuhan hak warga negara.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                    'penjelasan' => 'Pengaturan HAM dalam UUD ternyata tidak diikuti dengan implementasinya dan tidak ada sanksi bagi yang melanggarnya.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 2,
                    'penjelasan' => 'Masih banyak pelanggaran HAM yang pelanggarnya tidak dihukum sesuai dengan jenis pelanggarannya.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 2,
                    'penjelasan' => 'Banyaknya pelanggaran HAM dalam pemenuhan kesetaraan hak warga negara, misalnya dalam perlindungan warga yang tidak mampu.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                    'penjelasan' => 'UU Nomor 23 tahun 1997 tentang Lingkungan Hidup dan UU Nomor 32 Tahun 2009 tentang Perlindungan dan Pengelolaan Lingkungan Hidup dilakukan untuk melestarikan fungsi lingkungan dan mencegah terjadinya pencemaran.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                    'penjelasan' => 'Konsep ekonomi hijau dan pembangunan rendah karbon sudah menjadi kampanye pembangunan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                    'penjelasan' => 'Mendorong masyarakat untuk hidup sederhana, menanam dan memelihara pohon, mengurangi kendaraan bermotor, serta pengelolaan sampah.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                    'penjelasan' => 'UU RI Nomor 17 Tahun 2023 tentang Kesehatan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                    'penjelasan' => 'Praktek korupsi dan kolusi dalam pengelolaan sumber daya dan kekerasan sering digunakan untuk melanggengkan penguasaan SDA.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                    'penjelasan' => 'Bisnis korporasi yang ekstra aktif mengakibatkan bencana ekologis.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                    'penjelasan' => 'Pembangunan masih diarahkan pada bidang ekonomi dan bukan lingkungan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                    'penjelasan' => 'Aktivitas manusia dalam meningkatkan taraf hidup seringkali mengabaikan tanggung jawab dan merusak alam.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                    'penjelasan' => 'Banyak kasus perhutani yang menembak warga karena dianggap merusak hutan lalu dikriminalisasi.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 4,
                    'penjelasan' => 'Masih adanya kejadian pembakaran serta intimidasi bagi orang yang ingin melaksanakan ibadah menurut agama dan kepercayaannya.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                    'penjelasan' => 'Masih adanya perilaku sekelompok orang yang tidak berperilaku toleran akibat adanya perbedaan agama, antara lain masih ada pertentangan yang berujung kekerasan yang muncul pada saat seseorang melaksanakan keyakinannya.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                    'penjelasan' => 'Masih terjadi adanya pelecehan terhadap martabat kemanusiaan yang disebabkan oleh warga negara misalnya masih banyak perilaku menyimpang dalam hubungan antar orang (penganiayaan, pemerkosaan, penipuan, dan lain-lain).',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                    'penjelasan' => 'Masyarakat yang beriman, bertakwa, berakhlak mulia sehingga ajaran agama, khususnya yang bersifat universal dan nilai-nilai luhur budaya, terutama kejujuran, dihayati dan diamalkan dalam perilaku kesehariannya telah tercermin dalam pola interaksi antar warga negara. Dan banyak peraturan yang memuat tentang kehidupan beragama di Indonesia.',
                    'sisi' => 'kontra'
                ], [
                    'pernyataan_id' => 4,
                    'penjelasan' => 'Toleransi antar dan antara umat beragama telah terwujud dalam kehidupan bermasyarakat. Tidak terjadinya kerusuhan yang sangat luas akibat perbedaan agama, selain itu ditegakkannya aturan hukum (sanksi) terhadap orang yang merusak hubungan antar agama.',
                    'sisi' => 'kontra'
                ], [
                    'pernyataan_id' => 4,
                    'penjelasan' => 'Penghormatan terhadap martabat kemanusiaan sangat dijunjung tinggi antara lain dibentuknya peraturan-peraturan yang memuat sanksi bagi para pelaku kejahatan kemanusiaan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 4,
                    'penjelasan' => 'Di Bali dan Manado hidup rukun umat beragama yang dapat dijadikan contoh bagi daerah lain.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 5,
                    'penjelasan' => 'Sudah diatur dalam UU Nomor 13 Tahun 2003 tentang ketenagakerjaan dan UU Nomor 39 tahun 2004 tentang Penempatan dan Perlindungan TKI.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 5,
                    'penjelasan' => 'TKI mendapat perlindungan dari Pra penempatan, masa penempatan, dan purna penempatan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 5,
                    'penjelasan' => 'Adanya BNP2TKI.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 5,
                    'penjelasan' => 'TKI minimal ijazah SLTP, sehingga dianggap dapat berfikir rasional dan memiliki pengetahuan memadai.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 5,
                    'penjelasan' => 'UU Belum bisa melindungi TKI dari banyak persoalan, baik dengan perusahaan pengirim maupun majikannya, mulai dari ijazah, pungutan biaya, pemalsuan dokumen, penyiksaan, dan lain-lain.',
                    'sisi' => 'kontra'
                ], [
                    'pernyataan_id' => 5,
                    'penjelasan' => 'Belum ada perlindungan hukum dalam upaya mewujudkan kesejahteraan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 5,
                    'penjelasan' => 'Masih terjadi pungutan liar yang harus dikeluarkan calon TKI.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 5,
                    'penjelasan' => 'Masih banyak TKI yang tidak dapat gaji karena ulah PJTKI.',
                    'sisi' => 'kontra'
                ], [
                    'pernyataan_id' => 5,
                    'penjelasan' => 'Tidak adanya jaminan kesehatan bagi TKI.',
                    'sisi' => 'kontra'
                ], [
                    'pernyataan_id' => 5,
                    'penjelasan' => 'Perlakuan terhadap TKI yang bekerja diluar waktu yang wajar, tidak diberikan asuransi, perlindungan hukum yang memadai maupun jaminan perlindungan lainnya.',
                    'sisi' => 'kontra'
                ], [
                    'pernyataan_id' => 5,
                    'penjelasan' => 'Tidak adanya upaya pemerintah untuk meningkatkan kualitas SDM, informasi tentang bekerja di LN tidak memadai.',
                    'sisi' => 'kontra'
                ], [
                    'pernyataan_id' => 5,
                    'penjelasan' => 'Harusnya ada kerja sama dengan negara lain dalam rangka kontrol TKI.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                    'penjelasan' => 'Penggunaan situs harus dilaksanakan secara tertib dan bertanggung jawab dengan pertimbangan moral, nilai-nilai agama, keamanan dan ketertiban umum.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                    'penjelasan' => 'Peraturan Menteri Komunikasi dan Informatika Nomor 19 tahun 2014 tentang penanganan situs internet bermuatan negatif, sebagai dasar hukum positif dan harus dilaksanakan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                    'penjelasan' => 'Penutupan atau pemblokiran situs tertentu dimungkinkan untuk menjaga keamanan dan sifat nasionalisme.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                    'penjelasan' => 'Pemblokiran tidak dilakukan untuk melanggar hak asasi manusia dalam mendapatkan informasi karena yang diblok adalah situs yang bertentangan dengan nilai-nilai norma, agama dan membahayakan negara.',
                    'sisi' => 'pro'
                ], [
                    'pernyataan_id' => 6,
                    'penjelasan' => 'Pemblokiran tidak dapat dilakukan semena-mena namun harus dengan persetujuan dari pengadilan.',
                    'sisi' => 'pro'
                ], [
                    'pernyataan_id' => 6,
                    'penjelasan' => 'Pemblokiran menutup akses memperoleh informasi yang luas.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                    'penjelasan' => 'Kebebasan memperoleh informasi untuk mengembangkan pribadi dijamin oleh undang-undang dasar sebagai hak setiap orang.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                    'penjelasan' => 'Setiap orang memiliki kepentingan dan penggunaan yang berbeda terhadap informasi yang diperoleh sehingga pemblokiran membatasi ruang informasi.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                    'penjelasan' => 'Perkembangan teknologi merupakan kebutuhan global sehingga informasi yang berkembang sebagai akibat dari teknologi tersebut juga tidak dibatasi.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                    'penjelasan' => 'UUD NRI Tahun 1945 dan peraturan perundang-undangan menjamin tegaknya Indonesia sebagai negara hukum.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                    'penjelasan' => 'Proses hukum sebagai ruang penyelesaian terganggunya pelaksanaan hak dan kewajiban warga negara telah berjalan dengan baik.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                    'penjelasan' => 'Adanya peradilan konstitusi selain peradilan umum.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                    'penjelasan' => 'Perangkat penegakan hukum telah dibentuk sesuai dengan kebutuhan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                    'penjelasan' => 'Semua warga negara bebas menyampaikan tuntutan penegakan hukum.',
                    'sisi' => 'pro'
                ], [
                    'pernyataan_id' => 7,
                    'penjelasan' => 'Masih adanya beberapa putusan pengadilan yang menimbulkan ketidakpuasan para pencari peradilan.',
                    'sisi' => 'kontra'
                ], [
                    'pernyataan_id' => 7,
                    'penjelasan' => 'Sumber daya manusia yang bertugas sebagai penegak hukum masih relatif kurang.',
                    'sisi' => 'kontra'
                ], [
                    'pernyataan_id' => 7,
                    'penjelasan' => 'Masih ditemukan adanya putusan pengadilan yang menguntungkan pihak tertentu.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                    'penjelasan' => 'Perangkat aturan terkait penegakan hukum sudah lengkap tetapi dalam implementasinya belum tercermin.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                    'penjelasan' => 'Masih ada Penyelesaian hukum dalam peradilan yang berlarut-larut.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                    'penjelasan' => 'Anggaran dialokasi dalam APBN lebih 20%.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                    'penjelasan' => 'Adanya peningkatan fasilitas pendidikan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                    'penjelasan' => 'Kurikulum yang disesuaikan dengan perkembangan kebutuhan untuk membentuk SDM berkualitas.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                    'penjelasan' => 'Tumbuhnya penyelenggara pendidikan sehingga membuka kesempatan luas bagi masyarakat untuk mengenyam pendidikan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                    'penjelasan' => 'Adanya sinergi pemerintah, institusi pendidikan, dan masyarakat dalam melaksanakan pendidikan.',
                    'sisi' => 'pro'
                ], [
                    'pernyataan_id' => 8,
                    'penjelasan' => 'Tingkat kualitas SDM masih rendah.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                    'penjelasan' => 'Perubahan kurikulum pendidikan yang sangat cepat.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                    'penjelasan' => 'Kebijakan pemerintah tentang pengelolaan pendidikan yang belum didukung dengan penyediaan perangkat pelaksana serta sarana dan prasarana.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                    'penjelasan' => 'Fenomena biaya pendidikan tinggi untuk sekolah yang favorite membatasi kesempatan yang sama untuk semua warga negara.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 9,
                    'penjelasan' => 'UU tentang jaminan sosial.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                    'penjelasan' => 'Berbagai kebijakan pemerintah untuk memberdayakan fakir miskin dan anak terlantar.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                    'penjelasan' => 'Program-program pemerintah memberikan bantuan langsung pada fakir miskin dan anak terlantar.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                    'penjelasan' => 'Penyediaan lapangan pekerjaan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                    'penjelasan' => 'Kebijakan pemerintah tidak tepat sasaran',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 9,
                    'penjelasan' => 'Faktanya fakir miskin dan anak terlantar makin banyak',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                    'penjelasan' => 'Tingkat pendidikan yang tidak merata.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                    'penjelasan' => 'Masih banyak kelompok yang sulit untuk menerima perbedaan dan kekalahan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                    'penjelasan' => 'Beranekaragamnya nilai-nilai kedaerahan yang mewarnai kehidupan dalam berbagai bidang.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                    'penjelasan' => 'Budaya paternalistik yang cenderung menumbuhkan sikap fanatisme golongan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                    'penjelasan' => 'Pancasila disepakati sebagai ideologi bangsa dan UUD 1945 sebagai hukum tertinggi.',
                    'sisi' => 'kontra'
                ], [
                    'pernyataan_id' => 10,
                    'penjelasan' => 'Pemilu presiden dan pileg serta pilkada secara langsung oleh rakyat menegaskan bahwa Indonesia telah siap dalam berdemokrasi.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                    'penjelasan' => 'Pemilu dapat dilaksanakan tanpa ada kekacauan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                    'penjelasan' => 'Banyaknya partai politik dan organisasi massa menegaskan bahwa demokrasi telah hidup.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                    'penjelasan' => 'Seluruh kebijakan dalam rangka pelaksanaan wewenang lembaga dan penyelenggara negara dilaksanakan dan dihormati sesuai mekanisme yang berlaku.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 11,
                    'penjelasan' => 'Mengoptimalkan potensi pendapatan negara dari pajak, keuntungan BUMN, dan potensi daerah.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                    'penjelasan' => 'Utang justru memunculkan dampak negatif daripada positif.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                    'penjelasan' => 'Utang sering dicemarkan dengan kepentingan politik sehingga mengganggu stabilitas demokrasi.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                    'penjelasan' => 'Utang dapat diperalat sebagai perpanjangan sistem liberal sehingga dimanfaatkan untuk eksploitasi SDA dan perolehan tenaga kerja murah.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                    'penjelasan' => 'Utang tidak disertai dengan panduan penggunaannya dan cenderung mengarah pada syarat politik atau kepentingan bisnis pemberi bantuan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                    'penjelasan' => 'Utang masih merupakan bagian dari investasi yang berdampak pada pertumbuhan ekonomi.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 11,
                    'penjelasan' => 'Untuk pembangunan, nyatanya masih memerlukan utang untuk pemerataan di beberapa daerah dan sektor.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 11,
                    'penjelasan' => 'Indonesia adalah negara berkembang dan rendahnya kemampuan masyarakat mengelola uang sendiri berdampak pada sedikitnya dana pembiayaan negara.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 11,
                    'penjelasan' => 'Pengalokasiannya saja yang diperjelas.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 12,
                    'penjelasan' => 'GBHN diperlukan dalam menjalankan roda pemerintahan dan manfaatnya untuk rakyat, sehingga dengan kewenangan itu tidak mengharuskan diikuti dengan perubahan kedudukan MPR sebagai lembaga tertinggi negara.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                    'penjelasan' => 'MPR mencerminkan masyarakat Indonesia dalam melakukan proses kedaulatan rakyat',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                    'penjelasan' => 'GBHN memuat tentang rencana pembangunan. Dengan adanya rencana pembangunan para penyelenggara negara mempunyai pegangan dan sasaran serta target yang harus dicapainya dalam kurun waktu tertentu. Dengan demikian harapan dan kenyataan yang didapatkan bisa dengan mudah diukur dengan referensi dokumen tersebut.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                    'penjelasan' => 'Adanya jaminan kesinambungan pembangunan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                    'penjelasan' => 'Adanya inkonsistensi alasan dihilangkannya GBHN karena Presiden sudah dipilih langsung oleh rakyat yang memiliki visi dan misinya sendiri dan penetapan RPJPM yang akan mengikat Presiden terpilih dan faktanya diabaikan. ',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                    'penjelasan' => 'Rencana Pembangunan Jangka Panjang (RPJP) telah dijabarkan dalam Rencana Pembangunan Jangka Menengah (RPJM) yang ditetapkan dalam sebuah undang-undang, jadi fungsi itu sudah ada.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 12,
                    'penjelasan' => 'Adanya Pemilihan Presiden langsung oleh rakyat berimplikasi bahwa seluruh pembangunan disesuaikan dengan visi dan misi Presiden pada saat Tahapan PILPRES.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 12,
                    'penjelasan' => 'Dengan adanya GBHN bisa dijadikan alat politik di MPR sebagai celah untuk mencari kesalahan Presiden, sehingga Presiden merasa terbebani.',
                'sisi' => 'kontra'


                ]
            ]
        );

        PertanyaanSesi3::insert([
            [
                "pertanyaan" => "Perubahan pertama Undang Undang Dasar Negara Republik Indonesia Tahun 1945 ditempatkan pada lembaran negara Nomor 11 Tahun 2006, dan ditetapkan pada Sidang Umum MPR tahun?",
                "jawaban" => "Tahun 1999.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Perubahan kedua Undang Undang Dasar Negara Republik Indonesia Tahun 1945 ditetapkan pada Sidang Tahunan MPR Tahun 2000, dan ditempatkan pada lembaran negara nomor?",
                "jawaban" => "Nomor 12 Tahun 2006.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Perubahan ketiga Undang Undang Dasar Negara Republik Indonesia Tahun 1945 ditetapkan pada Sidang Tahunan MPR Tahun 2001, dan ditempatkan pada lembaran negara nomor?",
                "jawaban" => "Nomor 13 Tahun 2006.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Kedaulatan berada di tangan rakyat dan dilaksanakan menurut Undang-Undang Dasar. Pernyataan tersebut merupakan rumusan Pasal dan Ayat berapa dalam Undang Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "Pasal 1 ayat (2).",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Majelis Permusyawaratan Rakyat bersidang sedikitnya sekali dalam lima tahun di ibukota negara. Pernyataan tersebut merupakan rumusan Pasal dan Ayat berapa dalam Undang Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "Pasal 2 ayat (2).",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Salah satu kesepakatan dasar dalam perubahan undang-undang dasar adalah perubahan dilakukan dengan cara ‘adendum’, yaitu tetap mempertahankan naskah asli Undang Undang Dasar Negara Republik Indonesia Tahun 1945, dan naskah perubahan dilekatkan pada naskah asli. Yang dimaksud dengan naskah asli Undang Undang Dasar Negara Republik Indonesia Tahun 1945  adalah?",
                "jawaban" => "Naskah Undang Undang Dasar Negara Republik Indonesia Tahun 1945 yang ditetapkan pada tanggal 18 Agustus 1945 dan diberlakukan kembali dengan Dekrit Presiden 5 Juli 1959, serta dikukuhkan secara aklamasi pada tanggal 22 Juli 1959 oleh Dewan Perwakilan Rakyat (sebagaimana tercantum dalam Lembaran Negara Nomor 75 Tahun 1959).",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Yang dimaksud dengan rehabilitasi adalah?",
                "jawaban" => "Pemulihan nama baik yang diberikan oleh Presiden kepada seseorang yang telah dinyatakan bersalah oleh pengadilan, tetapi di kemudian hari ternyata terdapat kekeliruan dalam putusan pengadilan tersebut.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Hak Interpelasi adalah?",
                "jawaban" => "Adalah hak DPR untuk meminta keterangan kepada Pemerintah mengenai kebijakan Pemerintah yang penting dan strategis serta berdampak luas pada kehidupan bermasyarakat dan bernegara.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Kebebasan Beragama dijamin oleh dua Pasal dalam Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, sebutkan!",
                "jawaban" => "Pasal 28 E ayat (1) dan Pasal 29 ayat (2).",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Gunung Bromo adalah salah satu gunung di Indonesia yang terletak di Provinsi ….",
                "jawaban" => "Jawa Timur.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 8 ayat (2) adalah?",
                "jawaban" => "Dalam hal terjadi kekosongan Wakil Presiden, selambat-lambatnya dalam waktu enam puluh hari, Majelis Permusyawaratan Rakyat menyelenggarakan sidang untuk memilih Wakil Presiden dari dua calon yang diusulkan oleh Presiden.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Muhammad Amiruddin adalah pahlawan nasional yang merupakan tokoh masyarakat berasal dari Provinsi?",
                "jawaban" => "Maluku Utara.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 5 ayat (1) adalah?",
                "jawaban" => "Presiden berhak mengajukan rancangan undang-undang kepada Dewan Perwakilan Rakyat.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Bab VI Undang Undang Dasar Negara Republik Indonesia Tahun 1945 mengatur tentang Pemerintahan Daerah. Rumusan Pasal 18 ayat (2) Undang Undang Dasar Negara Republik Indonesia Tahun 1945 adalah?",
                "jawaban" => "Pemerintahan daerah provinsi, daerah kabupaten, dan kota mengatur dan mengurus sendiri urusan pemerintahan menurut asas otonomi dan tugas pembantuan.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Menurut Undang-Undang Nomor 12 Tahun 2011 Sumber segala sumber hukum negara adalah?",
                "jawaban" => "Pancasila",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Perubahan kedua Undang Undang Dasar Negara Republik Indonesia Tahun 1945 ditetapkan pada Sidang Tahunan MPR Tahun 2000. Salah satu hasil perubahan kedua adalah ditetapkannya BAB IXA (sembilan A) Undang Undang Dasar Negara Republik Indonesia Tahun 1945 yaitu tentang?",
                "jawaban" => "Wilayah Negara.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Sesuai ketentuan Undang Undang Dasar Negara Republik Indonesia Tahun 1945 Pasal 2 Ayat (1), keanggotaan Majelis Permusyawaratan Rakyat terdiri atas anggota Dewan Perwakilan Rakyat dan anggota Dewan Perwakilan Daerah yang dipilih melalui pemilihan umum dan diatur lebih lanjut dengan undang-undang. Wewenang Majelis Permusyawaratan Rakyat sesuai ketentuan pasal 3 ayat (1) adalah?",
                "jawaban" => "mengubah dan menetapkan Undang-Undang Dasar.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 28C ayat (2) adalah?",
                "jawaban" => "Setiap orang berhak untuk memajukan dirinya dalam memperjuangkan haknya secara kolektif untuk membangun masyarakat, bangsa, dan negaranya.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 7C adalah Presiden tidak dapat membekukan dan/atau membubarkan Dewan Perwakilan Rakyat. Apabila terjadi sengketa kewenangan antara Presiden dan Dewan Perwakilan Rakyat maka hal tersebut dapat di adili oleh?",
                "jawaban" => "Mahkamah Konstitusi.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 28H ayat (1)  adalah?",
                "jawaban" => "Setiap orang berhak hidup sejahtera lahir dan batin, bertempat tinggal, dan mendapatkan lingkungan hidup yang baik dan sehat serta berhak memperoleh pelayanan kesehatan.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Haji Abdul Malik Karim Amrullah adalah pahlawan nasional yang merupakan tokoh masyarakat berasal dari Provinsi Sumatera Barat yang lebih dikenal dengan sebutan?",
                "jawaban" => "Hamka / Buya Hamka.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Penyusunan Program Legislasi Nasional dilaksanakan oleh?",
                "jawaban" => "Dewan Perwakilan Rakyat dan Pemerintah.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 5 ayat (1) adalah?",
                "jawaban" => "Presiden berhak mengajukan rancangan undang-undang kepada Dewan Perwakilan Rakyat.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Pahlawan nasional yang dikenal dengan jasanya menjahit Bendera Pusaka Sang Saka Merah Putih adalah?",
                "jawaban" => "Fatmawati.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Dewan Perwakilan Rakyat memiliki fungsi legislasi, fungsi anggaran, dan fungsi pengawasan. Pernyataan tersebut merupakan rumusan Pasal dan Ayat berapa dalam Undang Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "Pasal 20A ayat (1).",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Pencipta lagu nasional Indonesia Bersatulah adalah?",
                "jawaban" => "Alfred Simanjuntak.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 37 ayat (4) adalah?",
                "jawaban" => "Putusan untuk mengubah pasal-pasal Undang-Undang Dasar dilakukan dengan persetujuan sekurang-kurangnya lima puluh persen ditambah satu anggota dari seluruh anggota Majelis Permusyawaratan Rakyat.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 22E ayat (5) adalah?",
                "jawaban" => "Pemilihan umum diselenggarakan oleh suatu komisi pemilihan umum yang bersifat nasional, tetap, dan mandiri.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Ketetapan Majelis Permusyawaratan Rakyat Republik Indonesia Nomor XVI/MPR/1998 adalah tentang Politik Ekonomi Dalam Rangka Demokrasi Ekonomi. Sesuai dengan ketetapan tersebut yang menjadi pilar utama ekonomi nasional adalah?",
                "jawaban" => "Usaha Kecil, Menengah dan Koperasi.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Lagu daerah Ampar-Ampar Pisang berasal dari Provinsi Kalimantan Selatan sedangkan lagu Cik Cik Periuk berasal dari provinsi?",
                "jawaban" => "Kalimantan Barat.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 28E ayat (1) adalah?",
                "jawaban" => "Setiap orang bebas memeluk agama dan beribadat menurut agamanya, memilih pendidikan dan pengajaran, memilih pekerjaan, memilih kewarganegaraan, memilih tempat tinggal di wilayah negara dan meninggalkannya, serta berhak Kembali.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Ketetapan Majelis Permusyawaratan Rakyat Republik Indonesia Nomor XVI/MPR/1998 adalah tentang Politik Ekonomi dalam rangka Demokrasi Ekonomi. Ketentuan dari pemberlakuan Ketetapan MPR ini adalah?",
                "jawaban" => "Pemerintah berkewajiban mendorong keberpihakan politik ekonomi yang lebih memberikan kesempatan dukungan dan pengembangan ekonomi, usaha kecil menengah, dan koperasi sebagai pilar ekonomi dalam membangkitkan terlaksananya pembangunan nasional dalam rangka demokrasi ekonomi sesuai hakikat Pasal 33 Undang-Undang Dasar Negara Republik Indonesia Tahun 1945.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Kota yang menjadi Ibu Kota Provinsi Kalimantan Utara adalah?",
                "jawaban" => "Tanjung Selor.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Kedaulatan berada di tangan rakyat dan dilaksanakan menurut Undang-Undang Dasar. Sebelum dilakukan perubahan terhadap ketentuan tersebut, kedaulatan adalah ditangan rakyat dan dilakukan sepenuhnya oleh?",
                "jawaban" => "Majelis Permusyawaratan Rakyat.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Ketetapan Majelis Permusyawaratan Rakyat Republik Indonesia Nomor V/MPR/1999 adalah tentang?",
                "jawaban" => "Penentuan Pendapat di Timor Timur.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 8 ayat (3) adalah?",
                "jawaban" => "Jika Presiden dan Wakil Presiden mangkat, berhenti, diberhentikan, atau tidak dapat melakukan kewajibannya dalam masa jabatannya secara bersamaan, pelaksana tugas kepresidenan adalah Menteri Luar Negeri, Menteri Dalam Negeri, dan Menteri Pertahanan secara bersama-sama. Selambat-lambatnya tiga puluh hari setelah itu, Majelis Permusyawaratan Rakyat menyelenggarakan sidang untuk memilih Presiden dan Wakil Presiden dari dua pasangan calon Presiden dan Wakil Presiden yang diusulkan oleh partai politik atau gabungan partai politik yang pasangan calon Presiden dan Wakil Presidennya meraih suara terbanyak pertama dan kedua dalam pemilihan umum sebelumnya, sampai berakhir masa jabatannya.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 23G ayat (2) adalah Ketentuan lebih lanjut mengenai Badan Pemeriksa Keuangan diatur dengan undang-undang. Ketentuan tersebut terdapat pada Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 BAB VIIIA yaitu tentang?",
                "jawaban" => "Badan Pemeriksa Keuangan.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Lagu daerah Anging Mamiri berasal dari provinsi?",
                "jawaban" => "Sulawesi Selatan.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Kota yang menjadi Ibu Kota Provinsi Papua Barat adalah Manokwari, sedangkan Ibu Kota Provinsi Papua adalah?",
                "jawaban" => "Jayapura.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 7B ayat (2) adalah?",
                "jawaban" => "Pendapat Dewan Perwakilan Rakyat bahwa Presiden dan/atau Wakil Presiden telah melakukan pelanggaran hukum tersebut ataupun telah tidak lagi memenuhi syarat sebagai Presiden dan/atau Wakil Presiden adalah dalam rangka pelaksanaan fungsi pengawasan Dewan Perwakilan Rakyat.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Menurut Undang-Undang Nomor 18 Tahun 2011 jumlah Anggota Komisi Yudisial adalah?",
                "jawaban" => "7 (tujuh) orang.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Terbentuknya penyelenggara negara yang peka dan tanggap terhadap kepentingan dan aspirasi rakyat di seluruh wilayah negara termasuk daerah terpencil dan perbatasan, merupakan salah satu indikator dari Visi Indonesia Masa Depan tentang?",
                "jawaban" => "Baik dan Bersih dalam Penyelenggaraan Negara.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "H. Oemar Said Cokroaminoto adalah pahlawan nasional yang merupakan tokoh masyarakat berasal dari Provinsi?",
                "jawaban" => "Jawa Timur",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 28J ayat (2) adalah",
                "jawaban" => "Dalam menjalankan hak dan kebebasannya, setiap orang wajib tunduk kepada pembatasan yang ditetapkan dengan undang-undang dengan maksud semata-mata untuk menjamin pengakuan serta penghormatan atas hak dan kebebasan orang lain dan untuk memenuhi tuntutan yang adil sesuai dengan pertimbangan moral, nilai-nilai agama, keamanan, dan ketertiban umum dalam suatu masyarakat demokratis.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Pemerintah menetapkan Hari Lahir Pancasila Setiap tanggal 1 Juni. Dasar hukum penetapan hari kelahiran Pancasila 1 Juni adalah?",
                "jawaban" => "Keputusan Presiden Nomor 24 Tahun 2016.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Tema Hari Ulang Tahun Kemerdekaan Republik Indonesia ke-79 Adalah Nusantara Maju, Indonesia Baru. Apa dasar hukum pembentukan Ibu Kota Nusantara? ",
                "jawaban" => "Undang-Undang Nomor 3 Tahun 2022 diubah dengan Undang-Undang Nomor 21 Tahun 2023 Tentang Ibu Kota Negara.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Perubahan kedua Undang Undang Dasar Negara Republik Indonesia Tahun 1945 ditetapkan pada Sidang Tahunan MPR Tahun 2000. Salah satu hasil perubahan kedua adalah ditetapkannya BAB IXA (sembilan A) Undang Undang Dasar Negara Republik Indonesia Tahun 1945 yaitu tentang?",
                "jawaban" => "Wilayah Negara.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Dewan Perwakilan Daerah memberikan pertimbangan kepada Dewan Perwakilan Rakyat atas rancangan undang-undang tentang?",
                "jawaban" => "Rancangan undang-undang anggaran pendapatan dan belanja negara dan rancangan undang-undang yang berkaitan dengan pajak, pendidikan, dan agama.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 24 ayat (2) adalah Kekuasaan kehakiman dilakukan oleh sebuah Mahkamah Agung dan badan peradilan yang berada di bawahnya dalam lingkungan peradilan umum, lingkungan peradilan agama, lingkungan peradilan militer, lingkungan peradilan tata usaha negara, dan oleh sebuah Mahkamah Konstitusi. Wewenang Mahkamah Konstitusi menurut ketentuan Pasal 24C ayat (1) adalah?",
                "jawaban" => "Mengadili pada tingkat pertama dan terakhir yang putusannya bersifat final untuk menguji undang-undang terhadap Undang-Undang Dasar, memutus sengketa kewenangan lembaga negara yang kewenangannya diberikan oleh Undang-Undang Dasar, memutus pembubaran partai politik, dan memutus perselisihan tentang hasil pemilihan umum.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Yang dimaksud tidak pernah mengkhianati negara adalah?",
                "jawaban" => "Tidak pernah terlibat gerakan separatis, tidak pernah melakukan gerakan secara inkonstitusional atau dengan kekerasan untuk mengubah dasar negara serta tidak pernah melanggar Undang-Undang Dasar Negara Republik Indonesia Tahun 1945.",
                'wilayah_id' => 1,
            ],
        ]);
    }
}
