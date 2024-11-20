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
                'name' => 'SMAN 2 NEGARA',
                'run' => 1,
            ],
            [
                'name' => 'SMAN 1 SINGARAJA',
                'run' => 1,

            ],
            [
                'name' => 'SMAN 1 KUTA UTARA',
                'run' => 1,

            ],
            [
                'name' => 'SMKN 1 AMLAPURA',
                'run' => 2,

            ],
            [
                'name' => 'SMAN 1 BANGLI',
                'run' => 2,

            ],
            [
                'name' => 'SMAN 1 UBUD',
                'run' => 2,

            ],
            [
                'name' => 'SMAN 1 TABANAN',
                'run' => 3,

            ],
            [
                'name' => 'SMAN 2 SEMARAPURA',
                'run' => 3,

            ],
            [
                'name' => 'SMAN 3 DENPASAR',
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
                "pernyataan" => "Pemerintah sudah secara memadai memberikan perlindungan, pemajuan, penegakan dan pemenuhan hak asasi manusia.",
                "run" => 1
            ], [
                "pernyataan" => "Majelis Permusyawaratan Rakyat (MPR) perlu diberikan kembali wewenang untuk menetapkan Garis-garis Besar Haluan Negara (GBHN).",
                "run" => 1
            ], [
                "pernyataan" => "Putusan Mahkamah Konstitusi bersifat final.",
                "run" => 1
            ], [
                "pernyataan" => "Hak interpelasi, hak angket dan hak menyatakan pendapat sudah tepat merupakan hak Dewan Perwakilan Rakyat dalam menerapkan sistem checks and balances.",
                "run" => 2
            ], [
                "pernyataan" => "Menggunakan dan membawa alat komunikasi genggam (handphone) ke sekolah.",
                "run" => 2
            ], [
                "pernyataan" => "Penggunaan Tenaga Kerja Asing di perusahaan Indonesia.",
                "run" => 2
            ], [
                "pernyataan" => "Penegasan dan implementasi negara Indonesia adalah negara hukum sudah berjalan baik.",
                "run" => 3
            ], [
                "pernyataan" => "Adanya persyaratan untuk mengakomodasi putra daerah dalam proses pemilihan kepala daerah",
                "run" => 3
            ], [
                "pernyataan" => "Penyelenggaraan pendidikan bela negara di Indonesia.",
                "run" => 3
            ], [
                "pernyataan" => "Presiden dan Wakil Presiden memegang jabatan selama lima tahun, dan sesudahnya dapat dipilih kembali dalam jabatan yang sama, hanya untuk satu kali masa jabatan.",
                "run" => 4
            ], [
                "pernyataan" => "Pelaksanaan pembangunan proyek infrastruktur negara dengan sumber dana berasal dari biaya asing",
                "run" => 4
            ], [
                "pernyataan" => "Pembatasan masa jabatan Anggota DPR selama 2 (dua) periode perlu diatur dalam Undang-Undang.",
                "run" => 4
            ],

        ]);
        Pointer::insert([
            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Kerangka Hukum yang Kuat Indonesia telah menetapkan berbagai undang-undang dan peraturan yang memberikan landasan hukum bagi perlindungan hak asasi manusia, menunjukkan komitmen untuk memajukan dan menegakkan hak-hak tersebut.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Partisipasi dalam Konvensi Internasional seperti International Covenant on Civil and Political Rights (ICCPR) dan International Covenant on Economic, Social and Cultural Rights (ICESCR), yang menunjukkan niat baik untuk melindungi dan memajukan hak asasi manusia.`',
                'sisi' => 'pro'
            ],
//            [
//                'pernyataan_id' => 1,
//                'penjelasan' => 'MPR mencerminkan masyarakat Indonesia dalam melakukan proses kedaulatan rakyat',
//                'sisi' => 'pro'
//            ],

            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Lembaga Perlindungan seperti Komnas HAM (Komisi Nasional Hak Asasi Manusia) yang berfungsi untuk memantau, meneliti, dan memberikan rekomendasi terkait perlindungan hak asasi manusia, menunjukkan bahwa pemerintah telah membentuk mekanisme untuk penegakan hak tersebut.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Kebijakan dan Program Pemerintah dengan berbagai program dan kebijakan yang bertujuan untuk meningkatkan kesejahteraan rakyat, termasuk program-program yang fokus pada pengurangan kemiskinan, pendidikan, dan kesehatan, yang merupakan bagian dari pemenuhan hak asasi manusia.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Pendidikan dan Sosialisasi untuk meningkatkan kesadaran masyarakat tentang hak asasi manusia melalui pendidikan dan sosialisasi, termasuk program-program di sekolah dan lembaga pendidikan, menunjukkan komitmen pemerintah dalam memajukan pemahaman hak asasi manusia.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Pasal 28I menegaskan bahwa setiap orang berhak atas perlindungan hak asasi manusia, termasuk hak untuk hidup, hak untuk tidak disiksa, dan hak untuk tidak diperlakukan secara sewenang-wenang.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Undang-Undang Nomor 39 Tahun 1999 tentang Hak Asasi Manusia yang mengatur secara rinci tentang pengakuan, perlindungan, dan pemenuhan hak asasi manusia di Indonesia. Undang-undang ini menunjukkan komitmen pemerintah untuk memberikan perlindungan terhadap hak asasi manusia.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Perlindungan yang Tidak Merata, pemerintah belum secara memadai memberikan perlindungan, pemajuan, penegakan dan pemenuhan hak asasi manusia, khususnya bagi kelompok rentan seperti masyarakat adat, pekerja migran, dan kelompok minoritas seksual. Undang-Undang Nomor 39 Tahun 1999 tentang Hak Asasi Manusia Pasal 1 angka 1 menyebutkan bahwa HAM adalah sekumpulan hak yang melekat pada hakikat dan keberadaan manusia sebagai ciptaan Tuhan Yang Maha Esa.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Pelanggaran HAM terhadap masyarakat adat konflik agraria yang berujung pada penggusuran paksa, pelanggaran hak atas tanah, dan kriminalisasi aktivis. Pelanggaran HAM terhadap pekerja migran seperti perdagangan orang, eksploitasi, dan penyiksaan di negara tujuan. Pelanggaran HAM terhadap kelompok minoritas seksual seperti diskriminasi, kekerasan, dan penolakan akses terhadap pelayanan kesehatan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Pemerintah belum efektif dalam melakukan edukasi dan sosialisasi mengenai HAM kepada masyarakat luas, sehingga kesadaran akan pentingnya HAM masih rendah.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Anggaran negara yang dialokasikan untuk perlindungan dan pemajuan HAM masih belum memadai, sehingga menghambat upaya-upaya konkret di lapangan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Pemerintah belum konsisten dalam menegakkan hukum bagi pelaku pelanggaran HAM, sehingga menimbulkan impunitas dan mengurangi kepercayaan masyarakat terhadap sistem hukum.',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Kepastian Arah Pembangunan, GBHN memberikan arah dan tujuan yang jelas bagi pembangunan nasional. Kembalinya wewenang MPR untuk menetapkan GBHN akan membantu memastikan bahwa setiap kebijakan pemerintah selaras dengan visi dan misi yang telah disepakati secara nasional.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Koordinasi dan Sinergi Kebijakan dengan adanya GBHN, berbagai sektor dan kebijakan diharapkan dapat terkoordinasi dengan baik, mengurangi tumpang tindih dan konflik kebijakan yang sering terjadi ketika tidak ada pedoman yang jelas.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Partisipasi Publik dalam proses penyusunan GBHN melibatkan berbagai elemen masyarakat, sehingga dapat mencerminkan aspirasi rakyat secara lebih luas. Ini akan meningkatkan legitimasi kebijakan yang diambil pemerintah.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Stabilitas Politik dengan adanya GBHN yang disepakati, akan tercipta stabilitas politik yang lebih baik. Hal ini penting untuk mendukung kontinuitas dalam pembangunan, meskipun terjadi pergantian pemerintahan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Akuntabilitas Pemerintah, GBHN berfungsi sebagai alat untuk mengukur kinerja pemerintah. Dengan adanya pedoman yang jelas, masyarakat dapat lebih mudah menilai apakah kebijakan yang diambil sudah sesuai dengan garis besar yang telah ditetapkan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Pasal 2 ayat (1) menyatakan bahwa MPR terdiri atas anggota Dewan Perwakilan Rakyat dan anggota Dewan Perwakilan Daerah. Kewenangan MPR untuk menetapkan GBHN adalah bagian dari fungsi legislatif dan perwakilan rakyat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Ketetapan MPR Nomor IV/MPR/1999 tentang GBHN yang pernah berlaku menunjukkan bahwa MPR memiliki legitimasi untuk menetapkan GBHN. Meskipun saat ini tidak diatur secara eksplisit, kembali memberikan wewenang ini sesuai dengan semangat desentralisasi kekuasaan.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Rencana Pembangunan Jangka Panjang (RPJP) telah dijabarkan dalam Rencana Pembangunan Jangka Menengah (RPJM) yang ditetapkan dalam sebuah undang-undang, jadi fungsi itu sudah ada.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Adanya Pemilihan Presiden langsung oleh rakyat berimplikasi bahwa seluruh pembangunan disesuaikan dengan visi dan misi Presiden pada saat Tahapan PILPRES.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Dengan adanya GBHN bisa dijadikan alat politik di MPR sebagai celah untuk mencari kesalahan Presiden, sehingga Presiden merasa terbebani.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Kepastian Hukum putusan Mahkamah Konstitusi (MK) sebagai lembaga peradilan tertinggi dalam hal hukum konstitusi memberikan kepastian hukum. Dengan putusan yang bersifat final, masyarakat dan pihak terkait dapat menjalani kehidupan hukum yang jelas tanpa keraguan tentang keabsahan putusan tersebut',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Stabilitas Politik putusan MK yang final membantu menjaga stabilitas politik di negara. Ketika sengketa konstitusi atau hukum diselesaikan secara definitif, hal ini mengurangi potensi konflik dan ketidakpastian dalam sistem pemerintahan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Mencegah Penundaan Keadilan dengan memberikan sifat final pada putusan, MK mencegah adanya penundaan keadilan yang bisa terjadi jika putusan masih bisa digugat atau diulang. Ini penting untuk menjamin hak-hak konstitusional masyarakat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Pengakuan Internasional banyak sistem hukum di negara lain mengakui finalitas keputusan lembaga peradilan konstitusi, sehingga mengedepankan prinsip bahwa lembaga tersebut merupakan penjaga konstitusi yang tidak dapat dipertanyakan kembali.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Pasal 24C ayat (1) menyatakan bahwa "Mahkamah Konstitusi berwenang untuk memutus perkara yang berkaitan dengan konstitusi." Dalam konteks ini, putusan MK bersifat final dan mengikat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Undang-Undang Nomor 24 Tahun 2003 tentang Mahkamah Konstitusi pada Pasal 47: Menegaskan bahwa putusan Mahkamah Konstitusi bersifat final, mengikat, dan tidak dapat diganggu gugat. Hal ini memberikan legitimasi hukum terhadap finalitas putusan yang diambil oleh MK.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'UUD 1945 sebagai hukum dasar, UUD 1945 menjadi landasan utama bagi seluruh peraturan perundang-undangan di Indonesia, termasuk putusan MK.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Undang-Undang Nomor 24 Tahun 2003 tentang Mahkamah Konstitusi undang-undang ini secara khusus mengatur tentang kewenangan, prosedur, dan efektivitas putusan MK.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Yurisprudensi putusan-putusan MK sebelumnya dapat dijadikan rujukan untuk menginterpretasikan putusan MK yang baru.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Perubahan konstitusi, jika terjadi perubahan terhadap UUD 1945, maka putusan MK yang bertentangan dengan amandemen UUD tersebut dapat menjadi tidak berlaku.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Putusan MK yang baru putusan MK yang lebih baru dapat mengubah atau membatalkan putusan MK sebelumnya, terutama jika terdapat perubahan dalam interpretasi hukum atau fakta-fakta yang relevan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Perubahan Undang-Undang menjadi dasar pertimbangan putusan MK dapat mempengaruhi keabsolutan putusan tersebut.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Putusan MK mengenai suatu perkara dapat berubah jika terdapat perubahan dalam interpretasi hukum yang relevan oleh Mahkamah Agung atau lembaga peradilan lainnya.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Jika suatu putusan MK bertentangan dengan norma-norma hukum internasional yang mengikat, maka penerapannya dapat dibatasi atau dibatalkan.',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Pemeriksaan dan Pengawasan hak interpelasi, hak angket, dan hak menyatakan pendapat memberikan alat kepada DPR untuk mengawasi dan memeriksa kebijakan serta tindakan pemerintah. Ini penting untuk memastikan transparansi dan akuntabilitas dalam pemerintahan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Representasi Rakyat, DPR sebagai wakil rakyat memiliki tanggung jawab untuk menyuarakan aspirasi dan kepentingan masyarakat. Melalui hak-hak tersebut, DPR dapat menyampaikan keprihatinan atau kritik terhadap kebijakan pemerintah yang dianggap merugikan rakyat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Stabilitas Demokrasi dengan adanya hak-hak ini, DPR berperan aktif dalam menjaga keseimbangan kekuasaan antara legislatif dan eksekutif. Hal ini mencegah dominasi salah satu lembaga dan mendukung praktik demokrasi yang sehat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Mendorong Responsivitas Pemerintah hak-hak tersebut mendorong pemerintah untuk lebih responsif terhadap isu-isu yang dihadapi masyarakat. Ketika pemerintah tahu bahwa kebijakan mereka akan diperiksa, mereka cenderung lebih berhati-hati dalam pengambilan keputusan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Peningkatan Kualitas Kebijakan, proses interpelasi dan angket dapat menjadi forum untuk diskusi yang lebih mendalam, meningkatkan kualitas kebijakan yang dihasilkan dan mengurangi potensi kebijakan yang kontroversial atau tidak efektif.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Pasal 20A ayat (1) menyatakan bahwa DPR memiliki hak untuk mengawasi pelaksanaan undang-undang dan melakukan fungsi kontrol terhadap kebijakan pemerintah.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Pasal 22D menegaskan hak DPR untuk melakukan interpelasi, yang berarti DPR dapat meminta keterangan kepada pemerintah tentang kebijakan tertentu.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Undang-Undang Nomor 17 Tahun 2014 tentang MPR, DPR, DPD, dan DPRD pada Pasal 79 mengatur hak interpelasi sebagai hak untuk meminta penjelasan dari pemerintah terkait kebijakan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Pasal 80 mengatur hak angket sebagai hak untuk melakukan penyelidikan terhadap kebijakan pemerintah.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Pasal 81 mengatur hak menyatakan pendapat, yang memungkinkan DPR untuk menyampaikan pandangan terhadap kebijakan pemerintah.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Penyalahgunaan Wewenang terdapat potensi penyalahgunaan wewenang oleh DPR dalam menggunakan hak-hak tersebut. Misalnya, hak angket dapat disalahgunakan untuk tujuan politis atau untuk menyerang pihak tertentu tanpa dasar yang kuat.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Efisiensi dan Efektivitas penggunaan hak-hak tersebut terkadang tidak efisien dan efektif dalam menyelesaikan masalah. Prosesnya yang panjang dan birokrasi yang kompleks dapat menghambat penyelesaian masalah yang mendesak',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Kualitas Anggota DPR kualitas anggota DPR yang rendah dapat mempengaruhi kualitas penggunaan hak-hak tersebut. Anggota DPR yang tidak memiliki kapasitas dan kompetensi yang memadai dapat membuat keputusan yang tidak rasional dan merugikan kepentingan rakyat',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Undang-Undang Nomor 36 Tahun 1999 tentang Telekomunikasi Undang-undang ini mengatur tentang penggunaan teknologi informasi dan komunikasi, termasuk penggunaan handphone. Selama pandemi COVID-19, handphone menjadi alat utama bagi siswa untuk mengikuti pembelajaran daring',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Aplikasi Edukatif banyak aplikasi edukatif yang dapat diunduh secara gratis atau berbayar melalui handphone. Aplikasi ini dapat digunakan untuk belajar matematika, bahasa asing, sejarah, dan mata pelajaran lainnya dengan cara yang lebih interaktif dan menarik.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Penggunaan handphone di sekolah sejalan dengan amanat Undang-Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional, yang bertujuan untuk mengembangkan potensi peserta didik. Dengan adanya berbagai aplikasi edukatif dan kemudahan akses informasi, handphone dapat menjadi alat bantu yang efektif dalam meningkatkan kualitas pembelajaran.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Distraksi dalam Proses Belajar, handphone dapat mengalihkan perhatian siswa dari kegiatan belajar mengajar. Penggunaan handphone di kelas sering kali mengganggu konsentrasi dan mengurangi efektivitas pembelajaran.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Penyebaran Konten Negatif dengan akses internet melalui handphone memungkinkan siswa terpapar pada konten yang tidak sesuai, seperti kekerasan, pornografi, atau informasi yang menyesatkan, yang dapat mempengaruhi perkembangan mental dan moral mereka.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Penyalahgunaan dan Bullying, penggunaan handphone dapat memicu perilaku negatif, seperti cyberbullying. Siswa dapat menggunakan perangkat tersebut untuk melakukan intimidasi atau menyebarkan rumor, yang dapat menciptakan lingkungan sekolah yang tidak aman.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Ketidakadilan Sosial, tidak semua siswa memiliki handphone yang sama, dan hal ini dapat menciptakan ketidaksetaraan. Siswa yang tidak memiliki akses yang sama dapat merasa terpinggirkan atau kurang berharga di lingkungan sekolah.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Pengaruh Terhadap Interaksi Sosial. kehadiran handphone dapat mengurangi interaksi sosial antar siswa. Siswa mungkin lebih memilih berkomunikasi melalui pesan teks daripada berinteraksi secara langsung, yang penting untuk pengembangan keterampilan sosial.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Undang-Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasiona pada Pasal 3 menyatakan bahwa pendidikan berfungsi untuk mengembangkan potensi peserta didik agar menjadi insan yang beriman, bertaqwa, dan berakhlak mulia. Penggunaan handphone di sekolah dapat bertentangan dengan tujuan ini jika berdampak negatif pada karakter siswa.',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Penggunaan tenaga kerja asing (TKA) di perusahaan Indonesia dapat memberikan manfaat positif bagi perekonomian dan perkembangan industri, jika dilakukan sesuai dengan Undang-undang (UU) Nomor 6 Tahun 2023 tentang Penetapan Peraturan Pemerintah Pengganti Undang-Undang Nomor 2 Tahun 2022 tentang Cipta Kerja menjadi Undang-Undang.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'TKA dengan keahlian khusus dapat mempercepat alih teknologi dan pengetahuan kepada tenaga kerja lokal. Ini membantu meningkatkan kualitas SDM Indonesia dalam jangka panjang, seperti yang terjadi di sektor teknologi dan manufaktur. Kehadiran TKA di industri elektronik telah membantu karyawan lokal di Batam menguasai keterampilan perakitan perangkat elektronik berstandar internasional.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Dalam beberapa sektor, keterampilan tertentu belum banyak dikuasai oleh tenaga kerja dalam negeri. Penggunaan TKA memungkinkan perusahaan untuk memenuhi kebutuhan khusus ini dan mendorong peningkatan daya saing industri nasional. Pada proyek kereta cepat Jakarta-Bandung, tenaga kerja asing dari China digunakan karena mereka memiliki pengalaman spesifik dalam pembangunan infrastruktur kereta cepat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Keterlibatan TKA, terutama dalam proyek-proyek strategis, menarik investasi asing dan mendorong pertumbuhan ekonomi. Investor merasa lebih percaya diri berinvestasi jika mereka bisa membawa ahli dari negara asal mereka untuk memastikan kelancaran operasional di fase awal. Beberapa perusahaan multinasional di sektor pertambangan di Kalimantan membutuhkan TKA pada tahap awal untuk memulai produksi sebelum merekrut dan melatih pekerja lokal.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Pengangguran Domestik dengan menggunakan tenaga kerja asing dapat memperburuk masalah pengangguran di Indonesia. Dalam situasi di mana banyak warga negara masih mencari pekerjaan, kehadiran tenaga kerja asing dapat mengurangi peluang kerja bagi penduduk lokal.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Transfer Teknologi yang Terbatas, tenaga kerja asing sering kali tidak berkontribusi pada transfer teknologi dan pengetahuan kepada tenaga kerja lokal. Ini menghambat pengembangan keterampilan dan kemampuan tenaga kerja Indonesia, yang penting untuk daya saing jangka panjang.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Ketidakadilan dalam Pasar Kerja, penggunaan tenaga kerja asing dapat menciptakan ketidakadilan dalam pasar kerja, di mana perusahaan lebih memilih pekerja asing dengan gaji yang lebih rendah dibandingkan pekerja lokal, yang dapat mengurangi standar gaji secara keseluruhan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Potensi Konflik Sosial, kehadiran tenaga kerja asing dapat menimbulkan ketegangan sosial dan konflik antara pekerja lokal dan asing, terutama jika ada persepsi bahwa tenaga kerja asing mengambil alih pekerjaan yang seharusnya diberikan kepada warga negara.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Pembangunan Ekonomi Berkelanjutan, prioritas harus diberikan kepada pengembangan sumber daya manusia lokal untuk mencapai pertumbuhan ekonomi yang berkelanjutan. Mengandalkan tenaga kerja asing dapat menghambat inisiatif ini.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Undang-Undang Nomor 13 Tahun 2003 tentang Ketenagakerjaan pada Pasal 42 mengatur bahwa setiap pekerja di Indonesia harus diberikan kesempatan yang sama untuk bekerja. Penggunaan tenaga kerja asing harus memenuhi ketentuan dan hanya diperbolehkan dalam keadaan tertentu yang tidak merugikan tenaga kerja lokal.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Undang-undang (UU) Nomor 6 Tahun 2023 tentang Penetapan Peraturan Pemerintah Pengganti Undang-Undang Nomor 2 Tahun 2022 tentang Cipta Kerja menjadi Undang-Undang, meskipun membuka peluang untuk investasi asing, undang-undang ini tetap menekankan perlunya memberikan prioritas kepada tenaga kerja lokal dan mengatur penggunaan tenaga kerja asing dengan ketat.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Peraturan Pemerintah (PP) Nomor 34 Tahun 2021 tentang Penggunaan Tenaga Kerja Asing menetapkan bahwa tenaga kerja asing hanya dapat dipekerjakan dalam sektor tertentu dan dengan persetujuan yang jelas, serta harus ada rencana untuk mengembangkan tenaga kerja lokal.',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Tercermin dalam regulasi penguatan lembaga peradilan, dengan berpedoman pada UUD 1945 khususnya Pasal 1 ayat (3) yang menyatakan bahwa Indonesia adalah negara hukum, serta berbagai peraturan perundang-undangan turunannya, sistem hukum Indonesia terus beradaptasi dan berkembang untuk memberikan keadilan bagi seluruh warga negara.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Adanya supremasi konstitusi yang diatur pasal 1 ayat (2) UUD NRI 1945 yang menyebutkan, bahwa kedaulatan berada di tangan rakyat dan dilaksanakan menurut Undang-Undang Dasar.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Pasal 28D UUD 1945 menjamin hak asasi manusia bagi setiap warga negara, yang menjadi salah satu pilar penting dalam negara hukum.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Kitab Undang-Undang Hukum Pidana (KUHP) merupakan landasan utama dalam penegakan hukum pidana di Indonesia (Asas Legalitas).',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Penguatan lembaga peradilan seperti MK bertugas mengadili perkara yang menyangkut pengujian undang-undang terhadap UUD 1945.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'MA sebagai lembaga peradilan tertinggi di Indonesia.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Praktik Korupsi yang Masih Marak di berbagai sektor, termasuk di lembaga penegak hukum, menunjukkan bahwa prinsip-prinsip negara hukum belum diterapkan secara efektif. Korupsi menggerogoti kepercayaan masyarakat terhadap sistem hukum dan pemerintah.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Ketidakadilan dalam Penegakan Hukum, terdapat banyak kasus di mana hukum diterapkan secara tidak adil, di mana individu atau kelompok tertentu mendapat perlakuan istimewa. Ini menciptakan ketidakpuasan di kalangan masyarakat dan menodai prinsip keadilan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Akses Terbatas ke Keadilan, banyak warga negara, terutama dari kalangan ekonomi lemah, mengalami kesulitan dalam mengakses sistem peradilan. Biaya tinggi dan kompleksitas proses hukum menjadi hambatan bagi mereka untuk memperoleh keadilan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Pelanggaran Hak Asasi Manusia, beberapa kasus pelanggaran hak asasi manusia yang belum dituntaskan menunjukkan bahwa perlindungan terhadap hak asasi manusia di Indonesia masih belum optimal. Hal ini mencerminkan bahwa negara hukum belum sepenuhnya menghormati dan melindungi hak-hak individu.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Tindak Pidana dan Keamanan, tingginya angka tindak pidana dan kurangnya rasa aman di masyarakat menunjukkan bahwa penegakan hukum tidak berjalan sebagaimana mestinya. Ketidakmampuan aparat untuk menciptakan lingkungan yang aman mengindikasikan lemahnya implementasi negara hukum.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'UUD 1945 Pasal 1 ayat (3) menyatakan bahwa "Negara Indonesia adalah negara hukum." Namun, penerapan prinsip ini sering kali terabaikan dalam praktik, yang mengindikasikan bahwa realisasi negara hukum masih kurang.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Pasal 28D ayat (1) setiap orang berhak atas pengakuan, jaminan, perlindungan, dan kepastian hukum yang adil serta perlakuan yang sama di hadapan hukum.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Pasal 28D ayat (2) setiap orang berhak untuk bekerja serta mendapat imbalan dan perlakuan yang adil dan layak dalam hubungan kerja.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Pasal 27 ayat (1) segala Warga Negara bersamaan kedudukannya di dalam Hukum dan Pemerintahan dan wajib menjunjung Hukum dan Pemerintahan itu dengan tidak ada kecualinya.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Undang-Undang Nomor 39 Tahun 1999 tentang Hak Asasi Manusia menyatakan bahwa setiap orang berhak untuk diperlakukan secara adil di hadapan hukum. Namun, pelanggaran terhadap hak asasi manusia menunjukkan bahwa implementasi perlindungan hak ini belum memadai.',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Persyaratan untuk mengakomodasi putra daerah dalam pemilihan kepala daerah bertujuan untuk memastikan kepemimpinan yang memahami kebutuhan, nilai, dan budaya lokal, sekaligus mendorong rasa memiliki di masyarakat. Pengaturan ini relevan dengan semangat desentralisasi dan otonomi daerah seperti diatur dalam Undang-undang (UU) Nomor 3 Tahun 2024 tentang Perubahan Kedua atas Undang-Undang Nomor 6 Tahun 2014 tentang Desa.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Putra daerah biasanya memiliki pemahaman yang lebih baik tentang budaya, tradisi, dan kondisi sosial-ekonomi masyarakat setempat. Ini memungkinkan kebijakan yang lebih relevan dan efektif bagi pembangunan daerah. Di Provinsi Papua, kepala daerah asli setempat mampu mempromosikan kebijakan berbasis kearifan lokal, seperti pengelolaan hutan adat dan pemberdayaan masyarakat suku.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Kehadiran putra daerah sebagai pemimpin meningkatkan rasa keterwakilan dan kepercayaan masyarakat. Ini mendorong partisipasi yang lebih aktif dalam program-program pembangunan daerah. Pemilihan kepala daerah di Aceh sering kali menonjolkan calon lokal yang mampu memobilisasi dukungan masyarakat untuk program pembangunan pasca-konflik.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Dengan otonomi daerah, setiap wilayah diberikan kewenangan untuk mengatur pemerintahan dan kebijakannya sendiri. Pengakomodasian putra daerah sejalan dengan Pasal 18B UUD 1945, yang menekankan pentingnya pengakuan terhadap kekhususan dan keragaman daerah. Ini juga sejalan dengan semangat pemberdayaan lokal dalam UU No. 23 Tahun 2014.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Dengan memberi kesempatan bagi putra daerah untuk memimpin, potensi konflik akibat sentralisasi kekuasaan dapat diminimalkan. Masyarakat merasa lebih terwakili sehingga potensi gesekan atau ketegangan politik bisa ditekan. Pemilihan kepala daerah di Kalimantan Barat mendorong munculnya tokoh-tokoh lokal yang memahami keragaman suku dan agama di wilayah tersebut, sehingga mampu meredam potensi konflik horizontal.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Putra daerah memiliki komitmen yang kuat untuk menjaga dan mengembangkan potensi lokal. Ini mendukung pelaksanaan program-program pembangunan yang sesuai dengan karakteristik wilayah. Di Bali, kepala daerah asli mampu mempertahankan pariwisata berkelanjutan dengan mengintegrasikan budaya dan adat lokal dalam kebijakan wisata.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Prinsip Keadilan dan Kesetaraan: Mengakomodasi putra daerah dalam proses pemilihan kepala daerah dapat menciptakan ketidakadilan bagi calon lain yang memiliki kualitas dan kompetensi yang lebih baik, tetapi tidak berasal dari daerah tersebut. Semua warga negara berhak mendapatkan kesempatan yang sama dalam politik tanpa memandang asal usul.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Kualitas Kepemimpinan: Fokus pada putra daerah dapat mengabaikan kriteria yang lebih penting, seperti integritas, pengalaman, dan kemampuan kepemimpinan. Memprioritaskan asal daerah dapat mengurangi kompetisi yang sehat dan berdampak pada kualitas pemimpin yang dihasilkan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Penghambat Inovasi dan Perkembangan: Mengharuskan kandidat untuk berasal dari daerah tertentu dapat menghalangi masuknya ide dan perspektif baru dari luar daerah, yang penting untuk pembangunan daerah. Pemimpin dari luar daerah bisa membawa pengalaman dan pendekatan yang berbeda yang bermanfaat bagi masyarakat.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Pemisahan dan Disintegrasi: Memfokuskan pada putra daerah dapat memperkuat sentimen etnis atau lokalitas yang dapat menyebabkan perpecahan dan disintegrasi dalam masyarakat. Pemimpin seharusnya mengayomi semua warga, bukan hanya kelompok tertentu.',
                'sisi' => 'kontra'

            ],
            [
                'pernyataan_id' => 8,
                'penjelasan' => 'Prinsip Demokrasi: Demokrasi menuntut bahwa semua warga negara memiliki hak yang sama untuk berpartisipasi dalam pemerintahan. Membatasi peluang hanya untuk putra daerah bertentangan dengan prinsip demokrasi yang inklusif.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'UUD 1945 Pasal 27 ayat (1) menyatakan bahwa setiap warga negara berhak atas pekerjaan dan penghidupan yang layak. Ini termasuk hak untuk mencalonkan diri sebagai pemimpin tanpa diskriminasi berdasarkan asal daerah.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Pasal 28 D ayat (3) setiap warga negara berhak memperoleh kesempatan yang sama dalam pemerintahan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Undang-Undang Nomor 10 Tahun 2016 tentang Pemilihan Kepala Daerah, mengatur tentang syarat-syarat calon kepala daerah tanpa memberikan ketentuan khusus yang membedakan antara putra daerah dan calon dari luar daerah. Ini menunjukkan bahwa semua calon harus memiliki kesempatan yang sama untuk bersaing.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Prinsip-prinsip Hak Asasi Manusia, deklarasi Universal Hak Asasi Manusia menyatakan bahwa setiap orang berhak untuk berpartisipasi dalam pemerintahan. Diskriminasi berdasarkan asal daerah bertentangan dengan prinsip hak asasi manusia yang menuntut kesetaraan.',
                'sisi' => 'kontra'

            ],
            [
                'pernyataan_id' => 9,
                'penjelasan' => 'Untuk menumbuhkan paham nasionalisme bagi seluruh warga negara Indonesia dan ini merupakan salah satu penjabaran dari Sila Ketiga Pancasila, Persatuan Indonesia. Dengan bela negara, warga negara diharapkan memiliki kehendak untuk bersatu dan mengutamakan pentingnya persatuan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Merupakan pengejawantahan ketentuan Pasal 30 ayat (1) UUD NRI Tahun 1945 yaitu tiap-tiap warga Negara berhak dan wajib ikut serta dalam usaha pertahanan dan keamanan Negara. Dengan bela negara rakyat memahami menjalankan fungsi pertahanan dan keamanan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Bela negara dilakukan dalam rangka menunjang terwujudnya sistem pertahanan dan keamanan rakyat semesta yaitu rakyat sebagai kekuatan pendukung.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Adanya keberagaman budaya dan kondisi geografis diperlukan pembangunan visi yang sama dalam bidang sistem pertahanan dan keamanan negara. Bela negara dapat dijadikan sarana menyatukan visi tersebut.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Pasal 30 ayat (2) Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, Rakyat hanya sebagai kekuatan pendukung.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Biaya untuk melakukan pelatihan bela negara sangat besar sehingga menambah beban APBN.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Fungsi pertahanan dan keamanan sudah dilaksanakan oleh TNI dan POLRI.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Saat ini prioritas negara seharusnya adalah untuk meningkatkan kesejahteraan karena negara dalam upaya membangun bukan untuk berperang.',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Pasal 7 UUD NRI Tahun 1945, Presiden dan Wakil Presiden memegang jabatan selama lima tahun, dan sesudahnya dapat dipilih kembali dalam jabatan yang sama, hanya untuk satu kali masa jabatan. Ketentuan tersebut untuk menjaga agar presiden tidak memegang jabatan lebih dari 2 (dua) periode karena dianggap berdampak tidak baik dalam perkembangan demokrasi.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Ini bukti Indonesia menganut sistem presidensial yang salah satu syarat adanya pembatasan kekuasaan Presiden dan Wakil Presiden untuk masa jabatan yang pasti (fixed term).',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Ketentuan ini menekankan pentingnya etika di dalam kehidupan berbangsa dan bernegara sebagaimana diatur dalam Ketetapan MPR Nomor VI/MPR/2001 tentang Etika Kehidupan Berbangsa, yaitu mengenai pentingnya etika politik dan pemerintahan dimaksudkan agar terwujud pemerintahan yang bersih, efisien dan efektif yang salah satu wujudnya adalah pembatasan masa jabatan bagi pejabat publik.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Pembatasan jabatan agar tidak terjadi munculnya kekuasaan yang absolut dan berpotensi korupsi. Hal ini sesuai dengan pemikiran Lord Acton yang mengatakan Power tends to corrupt, and absolute power corrupts absolutely  (kekuasaan itu cenderung korupsi, dan kekuasaan yang absolute (mutlak) itu pasti korupsi).',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Banyak negara yang mengatur masa jabatan presiden dan wakil presiden selama 2 (dua) periode kepemimpinan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Pasal 1 Ayat (2), UUD NRI Tahun 1945 kedaulatan berada di tangan rakyat dan dilaksanakan menurut Undang-Undang Dasar.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Presiden dan wakil presiden adalah jabatan publik yang dipilih oleh rakyat. Seharusnya sepanjang dipilih oleh rakyat sehingga peraturan tidak harus membatasi masa jabatan tersebut. (Pasal 6A UUD NRI Tahun 1945 Presiden dan Wakil Presiden dipilih dalam satu pasangan secara langsung oleh rakyat).',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Apabila dibatasi dikhawatirkan terjadinya pembangunan yang tidak berkesinambungan karena presiden dan wakil presiden memiliki prioritas yang berbeda.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Pembatasan masa jabatan presiden dapat menghambat seseorang yang memiliki sikap kenegarawanan  untuk mengabdikan dan menggunakan kemampuannya dalam membangun negara.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Hak dipilih dan memilih merupakan hak asasi manusia.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Sebagai jabatan publik hanya presiden dan wakil presiden saja yang dibatasi dalam Undang-Undang  Dasar sementara jabatan lain tidak dilakukan pembatasan. ',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Ketetapan MPR Nomor XVI/MPR/1998 tentang politik ekonomi dalam rangka demokrasi ekonomi, pinjaman luar negeri dimungkinkan sepanjang untuk kepentingan rakyat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Dana dari asing untuk lebih mempercepat proses pembangunan infrastruktur karena kondisi keuangan negara belum memungkinkan untuk membiayai seluruh pembangunan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Peraturan Presiden (Perpres) Nomor 38 Tahun 2015 tentang Kerjasama Pemerintah dengan Badan Usaha dalam Penyediaan Infrastruktur tentang Kerjasama Pemerintah Dengan Badan Usaha Dalam Penyediaan Infrastruktur.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Sumber dana asing yang dapat digunakan sesuai dengan Peraturan Presiden,harus dilaksanakan dengan prinsip kemitraan, kemanfaatan, bersaing, pengendalian dan pengelolaan risiko, efektif, dan efisien. Dengan adanya prinsip tersebut, pembangunan menggunakan dana asing diharapkan tidak akan merugikan Indonesia.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Pasal 33 Ayat (2) cabang-cabang produksi yang penting bagi negara dan yang menguasai hajat hidup orang banyak dikuasai oleh negara. Oleh karena itu dalam membangun infrastruktur pun harus menggunakan dana negara bukan dana asing.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Penggunaan dana asing cenderung dengan persyaratan yang berat dan merugikan. Sehingga sering muncul kebijakan-kebijakan yang menguntungkan pihak tertentu akibat dana tersebut.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Peraturan yang mengatur tentang sumber dana asing masih belum komprehensif dalam satu kesatuan sehingga masih banyak celah yang dapat merugikan negara apabila berhutang ke pihak luar. Tidak digunakannya dana asing akan lebih mendorong bangsa Indonesia sebagai bangsa yang mandiri. ',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Agar ada kepastian hukum tentang masa jabatan sebagai pejabat negara.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Sesuai dengan Pasal 1 Ayat (3), Negara Indonesia adalah Negara hukum.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Pasal 28D ayat (3) setiap warga Negara berhak memperoleh kesempatan yang sama dalam pemerintahan. Dengan pembatasan maka mencerminkan implementasi dalam hal memberikan kesempatan yang sama kepada orang lain sebagai Anggota DPR.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Pasal 43 Ayat (1) UU Nomor 39 tahun 1999 tentang Hak Asasi Manusia, Setiap warga negara berhak untuk dipilih dan memilih dalam pemilihan umum berdasarkan persamaan hak melalui pemungutan suara yang langsung, umum, bebas, rahasia, jujur, dan adil sesuai dengan ketentuan peraturan perundang-undangan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Membuka kesempatan bagi setiap warga negara duduk dalam lembaga perwakilan rakyat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Membuka ruang seluas-luasnya bagi seluruh kelompok/lapisan masyarakat memilih wakilnya yang akan mewakilinya.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Pemilu dilaksanakan sebagai pengejawantahan suara rakyat dalam rangka mewujudkan demokrasi.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Adanya prinsip one man one vote, menandakan kebebasan orang yang memiliki hak pilih kepada seseorang.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Dalam undang-undang dasar tidak ada pembatasan masa jabatan sebagai Anggota DPR.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Agar masing-masing anggota DPR dapat bekerja dengan maksimal untuk dapat memberikan sumbangsih pemikiran.',
                'sisi' => 'kontra'

            ]


        ]);
        PertanyaanSesi3::insert([
            [
                "pertanyaan" => "1.	Pasal 8 ayat (3) Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 mengatur adanya Triumvirat untuk melaksanakan tugas kepresidenan, dalam hal Presiden  dan Wakil Presiden mangkat, berhenti, diberhentikan atau tidak dapat melakukan kewajibannya dalam masa jabatannya secara bersamaan. Sebutkan Menteri-Menteri yang dimaksud dengan Triumvirat tersebut!",
                "jawaban" => "Menteri Luar Negeri, Menteri Dalam Negeri, dan Menteri Pertahanan secara bersama-sama.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "2.	Apakah tujuan dilakukannya Amandemen Pertama Undang-Undang Dasar Republik Indonesia Tahun 1945?",
                "jawaban" => "Tujuannya adalah mengubah kekuasaan pembentuk Undang-Undang dari Presiden ke DPR.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "3.	Sebutkan pasal-pasal pada Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 yang diamandemen pada tahun 1999?",
                "jawaban" => "Pemerintah menjalankan Anggaran Pendapatan dan Belanja Negara tahun yang lalu.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "4.	Siapakah pahlawan yang dikenal sebagai Bapak Proklamator Kemerdekaan Indonesia?",
                "jawaban" => ": Ir Soekarno dan Dr. Drs. H. Mohammad Hatta",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "5.	Kapan dan di mana istilah Bhineka Tunggal Ika ditemukan?",
                "jawaban" => "Bhineka Tunggal Ika ditemukan pertama kali pada abad XIV pada masa Kerajaan Majapahit dalam Kitab Sutasoma karya Mpu Tantular.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "6.	Sebutkan rumusan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 pasal 6A ayat (2)!",
                "jawaban" => '“Pasangan calon Presiden dan Wakil Presiden diusulkan oleh partai politik atau gabungan partai politik peserta pemilihan umum sebelum pelaksanaan pemilihan umum”.',
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "7.	“Segala putusan Majelis Permusyawaratan Rakyat ditetapkan dengan suara yang terbanyak”. Kalimat dimaksud termaktub dalam Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 Sebutkan rumusan pasal dan ayat tersebut!",
                "jawaban" => "pasal 2 ayat (3).",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "8.	Sebutkan rumusan Pasal II Aturan Tambahan pada Undang-Undang Dasar Negara Republik Indonesia Tahun 1945!",
                "jawaban" => '“Dengan ditetapkannya perubahan Undang-Undang Dasar ini, Undang-Undang Dasar Negara Republik Indonesia tahun 1945 terdiri atas Pembukaan dan pasal-pasal”.',
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "9.	Berasal dari provinsi manakah pahlawan nasional Frans Kaisiepo?",
                "jawaban" => "Papua",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Etika Kehidupan Berbangsa diatur dalam Ketetapan MPR RI Nomor?",
                "jawaban" => "Nomor VI/MPR/2001",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => '11.“Majelis Permusyawaratan Rakyat wajib menyelenggarakan sidang untuk memutuskan usul Dewan Perwakilan Rakyat tersebut paling lambat tiga puluh hari sejak Majelis Permusyawaratan Rakyat menerima usul tersebut”. Pada tahun keberapa ketentuan tersebut terdapat dalam Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 rumusan Pasal 7B ayat (6) yang ditetapkan pada sidang paripurna Majelis Permusyawaratan Rakyat?',
                "jawaban" => "Tahun 2001",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "1.	Sebutkan pencipta lagu nasional “Indonesia Pusaka”!",
                "jawaban" => "Ismail Marzuki.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "2.	Pasal 10 Undang-Undang Nomor 13 Tahun 2019 Tentang perubahan ketiga atas Undang-Undang Nomor 17 Tahun 2014 tentang Majelis Permusyawaratan Rakyat, Dewan Perwakilan Rakyat, Dewan Perwakilan Daerah, Dan Dewan Perwakilan Rakyat Daerah, mengatur tentang hak anggota MPR. Sebutkan hak-hak tersebut?",
                "jawaban" => "Anggota MPR berhak mengajukan usul pengubahan pasal Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, Menentukan sikap dan pilihan dalam pengambilan keputusan, Memilih dan dipilih, Membela diri, Imunitas, Protokoler; dan Keuangan dan administratif.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "3.	Siapa pahlawan yang dikenal sebagai 'Sang Ratu Adil'?",
                "jawaban" => "Pangeran Diponegoro.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "4.	Pada tanggal 16 Agustus 1945 para pemimpin bangsa “diculik” oleh kelompok pemuda Indonesia. Peristiwa itu dikenal dengan nama?",
                "jawaban" => "Peristiwa Rengasdengklok",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "5.	Jumlah bab, pasal, dan ayat Undang Undang Dasar Negara Republik Indonesia Tahun 1945 setelah diubah tahun 1999-2002 adalah 21 bab, 73 pasal, 170 ayat, 3 pasal aturan peralihan, dan 2 pasal aturan tambahan. Perubahan Undang-Undang Dasar Negara Republik Indonesia tahun 1945 pada tahun 1999 – 2002 dilakukan dengan cara?",
                "jawaban" => "Addendum",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "6.	Sesuai dengan Undang-Undang Nomor 15 Tahun 2006, jumlah anggota Badan Pemeriksa Keuangan Republik Indonesia adalah?",
                "jawaban" => "9 (sembilan) Orang",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "7.	Presiden dapat memberi grasi dan rehabilitasi dengan memperhatikan pertimbangan MA, diatur dalam Undang-Undang Dasar Negara Republik Indonesia tahun 1945. Sebutkan pasal yang mengatur hal tersebut!",
                "jawaban" => "Pasal 14 ayat (1)",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "8.	Sebutkan tahun dilakukannya amandemen Undang-Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "Tahun 1999, tahun 2000, tahun 2001, dan tahun 2002.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "9.	Sebutkan rumusan Undang-Undang Dasar Negara Republik Indonesia tahun 1945 pasal 36A!",
                "jawaban" => "Sartono",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945 sebelum diubah terdiri atas 16 bab, 37 pasal, dan 49 ayat, 4 pasal aturan peralihan, dan 2 ayat aturan tambahan. Setelah perubahan, jumlah bab, pasal, ayat, aturan peralihan, dan aturan tambahan adalah?",
                "jawaban" => "21 bab, 73 pasal, 170 ayat, 3 pasal aturan peralihan, dan 2 pasal aturan tambahan.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Pengelompokan Ketetapan MPRS dan Ketetapan MPR berdasarkan Pasal 6 Ketetapan MPR Nomor I/MPR/2003 adalah?",
                "jawaban" => "Ketetapan Majelis Permusyawaratan Rakyat Sementara dan Ketetapan Majelis Permusyawaratan Rakyat Republik Indonesia yang tidak perlu dilakukan tindakan hukum lebih lanjut, baik karena bersifat einmalig (final), telah dicabut, maupun telah selesai dilaksanakan.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Setiap menteri membidangi urusan tertentu dalam pemerintahan. Pernyataan tersebut merupakan ketentuan dalam Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 yaitu rumusan Pasal dan Ayat berapa?",
                "jawaban" => "Pasal 17 ayat (3).",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Gunung Rinjani adalah salah satu gunung di Indonesia yang terletak di provinsi?",
                "jawaban" => "Nusa Tenggara Barat.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 23F ayat (1) adalah?",
                "jawaban" => "Anggota Badan Pemeriksa Keuangan dipilih oleh Dewan Perwakilan Rakyat dengan memperhatikan pertimbangan Dewan Perwakilan Daerah dan diresmikan oleh Presiden.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Yang dimaksud dengan rehabilitasi adalah?",
                "jawaban" => "Pemulihan nama baik yang diberikan oleh Presiden kepada seseorang yang telah dinyatakan bersalah oleh pengadilan, tetapi di kemudian hari ternyata terdapat kekeliruan dalam putusan pengadilan tersebut.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945 rumusan Pasal 1 ayat (3) adalah?",
                "jawaban" => "Negara Indonesia adalah negara hukum.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Danau Sentani yang terletak di provinsi?",
                "jawaban" => "Papua.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 18 ayat (1) adalah?",
                "jawaban" => "Negara Kesatuan Republik Indonesia dibagi atas daerah-daerah provinsi dan daerah provinsi itu dibagi atas kabupaten dan kota, yang tiap-tiap provinsi, kabupaten, dan kota itu mempunyai pemerintahan daerah, yang diatur dengan undang-undang.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Bab VI Undang Undang Dasar Negara Republik Indonesia Tahun 1945 mengatur tentang?",
                "jawaban" => "Pemerintahan Daerah.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 8 ayat (2) adalah?",
                "jawaban" => "Dalam hal terjadi kekosongan Wakil Presiden, selambat-lambatnya dalam waktu enam puluh hari, Majelis Permusyawaratan Rakyat menyelenggarakan sidang untuk memilih Wakil Presiden dari dua calon yang diusulkan oleh Presiden.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Segala putusan Majelis Permusyawaratan Rakyat ditetapkan dengan suara yang terbanyak. Pernyataan tersebut merupakan rumusan Pasal dan Ayat berapa dalam Undang Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "Pasal 2 ayat (3).",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "BAB I Undang Undang Dasar Negara Republik Indonesia Tahun 1945 mengatur tentang?",
                "jawaban" => "Bentuk dan Kedaulatan.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 28C ayat (2) adalah?",
                "jawaban" => "Setiap orang berhak untuk memajukan dirinya dalam memperjuangkan haknya secara kolektif untuk membangun masyarakat, bangsa, dan negaranya.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Pencipta lagu rayuan pulau kelapa adalah?",
                "jawaban" => "Ismail Marzuki.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Danau tiga warna yang terletak di gunung kelimutu terletak di provinsi?",
                "jawaban" => "Nusa Tenggara Timur.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 9 ayat (2) adalah?",
                "jawaban" => "Jika Majelis Permusyawaratan Rakyat atau Dewan Perwakilan Rakyat tidak dapat mengadakan sidang, Presiden dan Wakil Presiden bersumpah menurut agama, atau berjanji dengan sungguh-sungguh di hadapan pimpinan Majelis Permusyawaratan Rakyat dengan disaksikan oleh Pimpinan Mahkamah Agung.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Presiden memberi gelar, tanda jasa, dan lain-lain tanda kehormatan yang diatur dengan undang-undang. Pernyataan tersebut merupakan rumusan Pasal berapa dalam Undang Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "Pasal 15.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Tuanku Imam Bonjol adalah pahlawan nasional yang merupakan tokoh masyarakat berasal dari Provinsi?",
                "jawaban" => "Sumatera Barat.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 30 ayat (5) adalah?",
                "jawaban" => "Susunan dan kedudukan Tentara Nasional Indonesia, Kepolisian Negara Republik Indonesia, hubungan kewenangan Tentara Nasional Indonesia dan Kepolisian Negara Republik Indonesia di dalam menjalankan tugasnya, syarat-syarat keikutsertaan warga negara dalam usaha pertahanan dan keamanan negara, serta hal-hal yang terkait dengan pertahanan dan keamanan diatur dengan undang-undang.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Menurut Undang-Undang Nomor 18 Tahun 2011 jumlah Anggota Komisi Yudisial adalah?",
                "jawaban" => "7 (tujuh) orang.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Terbentuknya penyelenggara negara yang peka dan tanggap terhadap kepentingan dan aspirasi rakyat di seluruh wilayah negara termasuk daerah terpencil dan perbatasan, merupakan salah satu indikator dari Visi Indonesia Masa Depan tentang?",
                "jawaban" => "Baik dan Bersih dalam Penyelenggaraan Negara.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "H. Oemar Said Cokroaminoto adalah pahlawan nasional yang merupakan tokoh masyarakat berasal dari Provinsi?",
                "jawaban" => "Jawa Timur",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 28J ayat (2) adalah",
                "jawaban" => "Dalam menjalankan hak dan kebebasannya, setiap orang wajib tunduk kepada pembatasan yang ditetapkan dengan undang-undang dengan maksud semata-mata untuk menjamin pengakuan serta penghormatan atas hak dan kebebasan orang lain dan untuk memenuhi tuntutan yang adil sesuai dengan pertimbangan moral, nilai-nilai agama, keamanan, dan ketertiban umum dalam suatu masyarakat demokratis.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Pemerintah menetapkan Hari Lahir Pancasila Setiap tanggal 1 Juni. Dasar hukum penetapan hari kelahiran Pancasila 1 Juni adalah?",
                "jawaban" => "Keputusan Presiden Nomor 24 Tahun 2016.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Tema Hari Ulang Tahun Kemerdekaan Republik Indonesia ke-79 Adalah Nusantara Maju, Indonesia Baru. Apa dasar hukum pembentukan Ibu Kota Nusantara? ",
                "jawaban" => "Undang-Undang Nomor 3 Tahun 2022 diubah dengan Undang-Undang Nomor 21 Tahun 2023 Tentang Ibu Kota Negara.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Pada pasal 4 TAP MPRS/MPR yang dinyatakan tetap berlaku sampai dengan terbentuknya Undang-Undang pada TAP MPR nomor berapa dan tahun berapa tentang penyelenggara Negara yang bersih dan bebas korupsi, kolusi dan nepotisme?",
                "jawaban" => "TAP MPR Nomor XI/MPR/1998",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Dewan Perwakilan Daerah memberikan pertimbangan kepada Dewan Perwakilan Rakyat atas rancangan undang-undang tentang?",
                "jawaban" => "Rancangan undang-undang anggaran pendapatan dan belanja negara dan rancangan undang-undang yang berkaitan dengan pajak, pendidikan, dan agama",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 24 ayat (2) adalah Kekuasaan kehakiman dilakukan oleh sebuah Mahkamah Agung dan badan peradilan yang berada di bawahnya dalam lingkungan peradilan umum, lingkungan peradilan agama, lingkungan peradilan militer, lingkungan peradilan tata usaha negara, dan oleh sebuah Mahkamah Konstitusi. Wewenang Mahkamah Konstitusi menurut ketentuan Pasal 24C ayat (1) adalah?",
                "jawaban" => "Mengadili pada tingkat pertama dan terakhir yang putusannya bersifat final untuk menguji undang-undang terhadap Undang-Undang Dasar, memutus sengketa kewenangan lembaga negara yang kewenangannya diberikan oleh Undang-Undang Dasar, memutus pembubaran partai politik, dan memutus perselisihan tentang hasil pemilihan umum.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Yang dimaksud tidak pernah mengkhianati negara adalah?",
                "jawaban" => "Tidak pernah terlibat gerakan separatis, tidak pernah melakukan gerakan secara inkonstitusional atau dengan kekerasan untuk mengubah dasar negara serta tidak pernah melanggar Undang-Undang Dasar Negara Republik Indonesia Tahun 1945.",
                'wilayah_id' => 1
            ]
        ]);
    }
}



