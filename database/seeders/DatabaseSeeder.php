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
                "pernyataan" => "Majelis Permusyawaratan Rakyat (MPR) perlu diberikan kembali wewenang untuk menetapkan Garis-garis Besar Haluan Negara (GBHN).",
                "run" => 1
            ], [
                "pernyataan" => "Pemerintah sudah secara memadai memberikan perlindungan, pemajuan, penegakan, dan pemenuhan hak asasi manusia.",
                "run" => 1
            ], [
                "pernyataan" => "Hak setiap orang untuk hidup sejahtera lahir dan batin, bertempat tinggal, dan mendapatkan lingkungan hidup yang baik dan sehat serta berhak memperoleh pelayanan kesehatan sudah berjalan dengan baik.",
                "run" => 1
            ], [
                "pernyataan" => "Masyarakat diberikan kebebasan dalam memelihara dan mengembangkan nilai-nilai budaya daerah.",
                "run" => 2
            ], [
                "pernyataan" => "Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 perlu disempurnakan kembali.",
                "run" => 2
            ], [
                "pernyataan" => "Penyelenggaraan pendidikan konstitusi bagi warga Negara Republik Indonesia.",
                "run" => 2
            ], [
                "pernyataan" => "Indonesia Yang Mandiri sebagaimana diamanatkan Ketetapan MPR RI Nomor VII/MPR/2001 tentang visi Indonesia belum sesuai harapan.",
                "run" => 3
            ], [
                "pernyataan" => "Indonesia Yang Religius sebagaimana diamanatkan Ketetapan MPR RI Nomor VII/MPR/2001 tentang Visi Indonesia belum sesuai harapan.",
                "run" => 3
            ], [
                "pernyataan" => "Kewenangan Pemerintah untuk melakukan pemblokiran situs tertentu.",
                "run" => 3
            ], [
                "pernyataan" => "Penegasan Negara Indonesia adalah negara hukum sudah berjalan baik.",
                "run" => 4
            ], [
                "pernyataan" => "Hak warga negara untuk mendapat pendidikan di Indonesia sudah berjalan baik",
                "run" => 4
            ], [
                "pernyataan" => "Tanggung jawab negara untuk memelihara fakir miskin dan anak-anak terlantar sudah berjalan baik.",
                "run" => 4
            ],

        ]);
        Pointer::insert([
            [
                'pernyataan_id' => 1,
                'penjelasan' => 'GBHN diperlukan dalam menjalankan roda pemerintahan dan manfaatnya untuk rakyat, sehingga dengan kewenangan itu tidak mengharuskan diikuti dengan perubahan kedudukan MPR sebagai lembaga tertinggi negara.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'MPR mencerminkan masyarakat Indonesia dalam melakukan proses kedaulatan rakyat',
                'sisi' => 'pro'
            ],
//            [
//                'pernyataan_id' => 1,
//                'penjelasan' => 'MPR mencerminkan masyarakat Indonesia dalam melakukan proses kedaulatan rakyat',
//                'sisi' => 'pro'
//            ],

            [
                'pernyataan_id' => 1,
                'penjelasan' => 'GBHN memuat tentang rencana pembangunan. Dengan adanya rencana pembangunan para penyelenggara negara mempunyai pegangan dan sasaran serta target yang harus dicapainya dalam kurun waktu tertentu. Dengan demikian harapan dan kenyataan yang didapatkan bisa dengan mudah diukur dengan referensi dokumen tersebut.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Adanya jaminan kesinambungan pembangunan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Adanya inkonsistensi alasan dihilangkannya GBHN karena Presiden sudah dipilih langsung oleh rakyat yang memiliki visi dan misinya sendiri dan penetapan RPJPM yang akan mengikat Presiden terpilih dan faktanya diabaikan. ',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Rencana Pembangunan Jangka Panjang (RPJP) telah dijabarkan dalam Rencana Pembangunan Jangka Menengah (RPJM) yang ditetapkan dalam sebuah undang-undang, jadi fungsi itu sudah ada.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Adanya Pemilihan Presiden langsung oleh rakyat berimplikasi bahwa seluruh pembangunan disesuaikan dengan visi dan misi Presiden pada saat Tahapan PILPRES.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Dengan adanya GBHN bisa dijadikan alat politik di MPR sebagai celah untuk mencari kesalahan Presiden, sehingga Presiden merasa terbebani.',
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
                'penjelasan' => 'Pasal 18B Ayat (2), Negara mengakui dan menghormati kesatuan-kesatuan masyarakat hukum adat beserta hak-hak tradisionalnya sepanjang masih hidup dan sesuai dengan perkembangan masyarakat dan prinsip Negara Kesatuan Republik Indonesia, yang diatur dalam undang-undang.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Untuk menjaga agar kebudayaan lokal tidak punah.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Memberikan pelajaran mengenai budaya luhur bangsa kepada para generasi penerus bangsa.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Ada kesan pemikiran sempit (chauvinisme) kedaerahan di masyarakat  yang merasa kebudayaannya lebih tinggi dibandingkan kebudayaan daerah lain.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Apabila tidak dikelola dengan baik kebudayan yang berbeda dapat mengancam Negara Kesatuan Republik Indonesia.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Pasal 37 UUD NRI Tahun 1945 membuka kemungkinan untuk dilakukan perubahan, kecuali untuk Pembukaan dan Pasal 37 ayat (5).',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Penyempurnaan dilakukan untuk menyesuaikan dengan kondisi kehidupan berbangsa dan bernegara dan perkembangan ketatanegaraan yang dibutuhkan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'UUD NRI Tahun 1945 adalah putusan politik, sehingga nuansa penetapannya lebih besar pada upaya mengakomodir kepentingan politik saat itu. Penyempurnaan diperlukan untuk mengakomodir perkembangan politik ketatanegaraan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Pengaturan mengenai kelembagaan negara masih perlu disempurnakan untuk memberi ruang yang ideal bagi sebuah lembaga negara dalam menjalankan tugas dan wewenangnya.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'UUD NRI Tahun 1945 merupakan hukum dasar, jadi seharusnya tidak mudah untuk diubah atau disempurnakan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Muatan UUD NRI Tahun 1945 sudah ideal dan lengkap, tinggal bagaimana komitmen penyelenggara negara dan masyarakat dalam melaksanakannya. Jadi, persoalannya bukan terhadap penyempurnaan rumusan, tapi bagaimana mengimplementasikannya.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'UUD NRI Tahun 1945 adalah hukum dasar dan tertinggi dalam hierarki peraturan perundang-undangan. Dengan kedudukan itu, idealnya tidak gampang untuk diubah karena menjadi rujukan dari berbagai peraturan perundang-undangan yang ada di bawahnya, sehingga akan berimplikasi luas apabila dilakukan penyempurnaan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Pembukaan UUD NRI Tahun 1945 mengamanatkan bahwa salah satu tujuan negara adalah mencerdaskan kehidupan bangsa. Pendidikan ini merupakan upaya untuk membangun sumber daya manusia yang paham akan konstitusi.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Adanya kewajiban negara untuk memberikan pemahaman terhadap nilai-nilai luhur bangsa termasuk konstitusi di dalamnya.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Pendidikan konstitusional bagi warga negara sangat penting sehingga warga negara dapat mengetahui, memahami, dan dapat mengamalkan konstitusi dalam kehidupan berbangsa dan bernegara.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Pendidikan ini sebagai wahana penyampaian doktrin yang terdapat dalam konstitusi kepada warga negara sehingga negara dapat tetap berdiri sesuai dengan kehendak yang ada dalam konstitusi.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Pasal 31 ayat (3) pemerintah mengusahakan dan menyelenggarakan satu sistem pendidikan nasional, yang meningkatkan keimanan dan ketakwaan serta akhlak mulia dalam rangka mencerdaskan kehidupan bangsa, yang diatur dengan undang-undang. Dengan demikian tidak diperlukan adanya pendidikan secara khusus karena nilai-nilai konstitusi bisa diajarkan dalam pendidikan secara umum, yang penting sistemnya ditetapkan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Penyelenggaraan pendidikan  secara khusus memerlukan perangkat yang banyak dan waktu khusus sehingga akan tidak efektif apabila diselenggarakan saat ini.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Penyelenggaraan pendidikan memerlukan biaya yang besar.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Konstitusi itu memuat nilai dasar yang harus diketahui oleh semua warga negara tanpa melihat jenis penyelenggaraan pendidikan. Oleh karena itu muatan materi pendidikan konstitusi sebaiknya diintegrasikan dengan jenis penyelenggaraan pendidikan yang sudah berjalan baik formal maupun informal.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Praktek pertumbuhan ekonomi bertumpu pada perusahaan-perusahaan besar yang mengedepankan profit. Dampak yang ditimbulkan saat ini banyak koperasi yang tidak berjalan sebagaimana fungsinya yaitu sebagai soko guru perekonomian kerakyatan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Banyak proses pembangunan infrastruktur yang tergantung dari sumber dana asing.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Hutang dalam setiap APBN di awal tahun mengalami peningkatan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Mulai tergerusnya nilai-nilai budaya akibat globalisasi.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Tidak kuatnya pemerintah dalam menjaga akibat negatif dari pengaruh globalisasi',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Terbentuknya badan ekonomi kreatif sebagai salah satu tulang punggung ekonomi kerakyatan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Saat ini negara sudah memiliki kemampuan dan ketangguhan dalam menyelenggarakan kehidupan berbangsa dan bernegara di tengah-tengah pergaulan antar bangsa agar sejajar dengan bangsa-bangsa lain (antara lain adanya UU RPJMN);',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Indonesia telah menerapkan politik luar negeri yang berkepribadian dan bebas aktif dalam pergaulan dengan bangsa-bangsa lain ',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Pembangunan sudah dilakukan di seluruh Indonesia dan tidak berpusat di Pulau Jawa saja. Penggunaan utang luar negeri dipergunakan untuk membiayai pembangunan yang hasilnya digunakan untuk mencicil hutang luar negeri. Utang luar negeri juga dilakukan oleh negara-negara maju contoh: amerika serikat.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Memiliki kepribadian bangsa dan identitas budaya Indonesia yang berakar dari potensi budaya daerah contohnya dalam setiap acara resmi kenegaraan baik di dalam mau pun di luar negeri menggunakan pengantar bahasa indonesia.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Masih adanya kejadian pembakaran serta intimidasi bagi orang yang ingin melaksanakan ibadah menurut agama dan kepercayaannya.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Masih adanya perilaku sekelompok orang yang tidak berperilaku toleran akibat adanya perbedaan agama, antara lain masih ada pertentangan yang berujung kekerasan yang muncul pada saat seseorang melaksanakan keyakinannya.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Masih terjadi adanya pelecehan terhadap martabat kemanusiaan yang disebabkan oleh warga negara misalnya masih banyak perilaku menyimpang dalam hubungan antar orang (penganiayaan, pemerkosaan, penipuan, dan lain-lain).',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Masyarakat yang beriman, bertakwa, berakhlak mulia sehingga ajaran agama, khususnya yang bersifat universal dan nilai-nilai luhur budaya, terutama kejujuran, dihayati dan diamalkan dalam perilaku kesehariannya telah tercermin dalam pola interaksi antar warga negara. Dan banyak peraturan yang memuat tentang kehidupan beragama di Indonesia.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Toleransi antar dan antara umat beragama telah terwujud dalam kehidupan bermasyarakat. Tidak terjadinya kerusuhan yang sangat luas akibat perbedaan agama, selain itu ditegakkannya aturan hukum (sanksi) terhadap orang yang merusak hubungan antar agama.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Penghormatan terhadap martabat kemanusiaan sangat dijunjung tinggi antara lain dibentuknya peraturan-peraturan yang memuat sanksi bagi para pelaku kejahatan kemanusiaan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Di Bali dan Manado hidup rukun umat beragama yang dapat dijadikan contoh bagi daerah lain (Tri Hita Karana).',
                'sisi' => 'kontra'
            ],
            [
                'pernyataan_id' => 8,
                'penjelasan' => 'Unsur-unsur Tri Hita Karana itu meliputi : Sanghyang Jagatkarana (Tuhan Yang Maha Esa), bhuana (alam), dan manusia. Unsur-unsur Tri Hita Karana itu terdapat dalam kitab suci Bhagavad Gita (III.10), berbunyi sebagai berikut: "Sahayajnah prajah sristva pura vaca prajapatih anena prasavisya dhvan esa vo\'stivistah kamadhuk" (Pada jaman dahulu, Prajapati menciptakan manusia dengan yajna dan bersabda "dengan ini engkau akan berkembang dan akan menjadi kamadhuk dari keinginanmu").',
                'sisi' => 'kontra'
            ],
            [
                'pernyataan_id' => 9,
                'penjelasan' => 'Penggunaan situs harus dilaksanakan secara tertib dan bertanggung jawab dengan pertimbangan moral, nilai-nilai agama, keamanan dan ketertiban umum.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Peraturan Menteri Komunikasi dan Informatika Nomor 19 tahun 2014 tentang penanganan situs internet bermuatan negatif, sebagai dasar hukum positif dan harus dilaksanakan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Penutupan atau pemblokiran situs tertentu dimungkinkan untuk menjaga keamanan dan sifat nasionalisme.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Pemblokiran tidak dilakukan untuk melanggar hak asasi manusia dalam mendapatkan informasi karena yang diblok adalah situs yang bertentangan dengan nilai-nilai norma, agama dan membahayakan negara.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Pemblokiran tidak dapat dilakukan semena-mena namun harus dengan persetujuan dari pengadilan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Pemblokiran menutup akses memperoleh informasi yang luas.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Kebebasan memperoleh informasi untuk mengembangkan pribadi dijamin oleh undang-undang dasar sebagai hak setiap orang.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Setiap orang memiliki kepentingan dan penggunaan yang berbeda terhadap informasi yang diperoleh sehingga pemblokiran membatasi ruang informasi.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Perkembangan teknologi merupakan kebutuhan global sehingga informasi yang berkembang sebagai akibat dari teknologi tersebut juga tidak dibatasi.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'UUD NRI Tahun 1945 dan peraturan perundang-undangan menjamin tegaknya Indonesia sebagai negara hukum.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Proses hukum sebagai ruang penyelesaian terganggunya pelaksanaan hak dan kewajiban warga negara telah berjalan dengan baik.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Adanya peradilan konstitusi selain peradilan umum.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Perangkat penegakan hukum telah dibentuk sesuai dengan kebutuhan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Semua warga negara bebas menyampaikan tuntutan penegakan hukum.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Masih adanya beberapa putusan pengadilan yang menimbulkan ketidakpuasan para pencari peradilan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Sumber Daya Manusia yang bertugas sebagai penegak hukum masih relatif kurang.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Masih ditemukan adanya putusan pengadilan yang menguntungkan pihak tertentu.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Perangkat aturan terkait penegakan hukum sudah lengkap tetapi dalam implementasinya belum tercermin.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Masih ada Penyelesaian hukum dalam peradilan yang berlarut-larut.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Anggaran dialokasi dalam APBN lebih 20%.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Adanya peningkatan fasilitas pendidikan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Kurikulum yang disesuaikan dengan perkembangan kebutuhan untuk membentuk SDM berkualitas.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Tumbuhnya penyelenggara pendidikan sehingga membuka kesempatan luas bagi masyarakat untuk mengenyam pendidikan.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Adanya sinergi pemerintah, institusi pendidikan, dan masyarakat dalam melaksanakan pendidikan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Tingkat kualitas SDM masih rendah.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Perubahan kurikulum pendidikan yang sangat cepat.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Kebijakan pemerintah tentang pengelolaan pendidikan yang belum didukung dengan penyediaan perangkat pelaksana serta sarana dan prasarana.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Fenomena biaya pendidikan tinggi untuk sekolah yang favorite membatasi kesempatan yang sama untuk semua warga negara.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'UU tentang jaminan sosial.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Berbagai kebijakan pemerintah untuk memberdayakan fakir miskin dan anak terlantar.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Program-program pemerintah memberikan bantuan langsung pada fakir miskin dan anak terlantar.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Penyediaan lapangan pekerjaan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Kebijakan pemerintah tidak tepat sasaran.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Faktanya fakir miskin dan anak terlantar makin banyak.',
                'sisi' => 'kontra'
            ]


        ]);
        PertanyaanSesi3::insert([
            [
                "pertanyaan" => "Yang dimaksud dengan penduduk adalah?",
                "jawaban" => "Warga negara Indonesia dan orang asing yang bertempat tinggal di Indonesia.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 36A adalah?",
                "jawaban" => "Lambang Negara ialah Garuda Pancasila dengan semboyan Bhinneka Tunggal Ika.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Apabila Dewan Perwakilan Rakyat tidak menyetujui rancangan anggaran pendapatan dan belanja negara yang diusulkan oleh Presiden, maka Pemerintah?",
                "jawaban" => "Pemerintah menjalankan Anggaran Pendapatan dan Belanja Negara tahun yang lalu.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Sesuai ketentuan Undang Undang Dasar Negara Republik Indonesia Tahun 1945 Pasal 7B ayat (3), pengajuan permintaan Dewan Perwakilan Rakyat kepada Mahkamah Konstitusi untuk memeriksa, mengadili dan memutus pendapat Dewan Perwakilan Rakyat dalam hal pengusulan pemberhentian Presiden dan/atau Wakil Presiden, hanya dapat dilakukan dengan dukungan sekurang-kurangnya?",
                "jawaban" => "2/3 dari jumlah anggota Dewan Perwakilan Rakyat yang hadir dalam sidang paripurna yang dihadiri oleh sekurang-kurangnya 2/3 dari jumlah anggota Dewan Perwakilan Rakyat.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Gunung Bromo adalah salah satu gunung di Indonesia yang terletak di Provinsi?",
                "jawaban" => "Jawa Timur.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 23E ayat (1) adalah Untuk memeriksa pengelolaan dan tanggung jawab tentang keuangan negara diadakan satu Badan Pemeriksa Keuangan yang bebas dan mandiri. Ketentuan tersebut terdapat pada Bab VIIIA yaitu tentang?",
                "jawaban" => "Badan Pemeriksa Keuangan.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 34 ayat (1)  adalah Fakir miskin dan anak-anak yang terlantar dipelihara oleh negara. Arti dari fakir adalah?",
                "jawaban" => "orang yang tidak mampu berusaha menghidupi dirinya sendiri.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 18 ayat (6) adalah?",
                "jawaban" => "Pemerintahan daerah berhak menetapkan peraturan daerah dan peraturan- peraturan lain untuk melaksanakan otonomi dan tugas pembantuan.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Yang dimaksud dengan due process of law adalah?",
                "jawaban" => "Penegakan hukum yang tidak bertentangan dengan hukum.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Gunung Klabat adalah salah satu gunung di Indonesia yang terletak di provinsi?",
                "jawaban" => "Sulawesi Utara.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Jika Presiden dan Wakil Presiden mangkat, berhenti, diberhentikan, atau tidak dapat melakukan kewajibannya dalam masa jabatannya secara bersamaan, pelaksana tugas kepresidenan adalah?",
                "jawaban" => "Menteri Luar Negeri, Menteri Dalam Negeri, dan Menteri Pertahanan secara bersama-sama.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Negara Indonesia ialah Negara Kesatuan, yang berbentuk Republik. Pernyataan tersebut merupakan rumusan Pasal dan Ayat berapa dalam Undang Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "Pasal 1 ayat (1).",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Setiap korban perjuangan menegakkan dan melaksanakan Amanat Penderitaan Rakyat dalam melanjutkan pelaksanaan Revolusi 1945 mencapai masyarakat adil dan makmur berdasarkan Pancasila, adalah?",
                "jawaban" => "Pahlawan Ampera.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Sebutkan syarat jumlah minimal warga negara apabila akan membentuk Partai Politik?",
                "jawaban" => "50 (lima puluh) Orang.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Oto Iskandar Dinata adalah pahlawan nasional yang merupakan tokoh masyarakat berasal dari Provinsi?",
                "jawaban" => "Jawa Barat.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Yang dimaksud tidak pernah mengkhianati negara adalah?",
                "jawaban" => "Tidak pernah terlibat gerakan separatis, tidak pernah melakukan gerakan secara inkonstitusional atau dengan kekerasan untuk mengubah dasar negara serta tidak pernah melanggar Undang-Undang Dasar Negara Republik Indonesia Tahun 1945.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 33 ayat (3) adalah?",
                "jawaban" => "Bumi dan air dan kekayaan alam yang terkandung di dalamnya dikuasai oleh negara dan dipergunakan untuk sebesar-besar kemakmuran rakyat.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Setiap orang berhak untuk bebas dari penyiksaan atau perlakuan yang merendahkan derajat martabat manusia dan berhak memperoleh suaka politik dari negara lain. Pernyataan tersebut merupakan rumusan Pasal dan Ayat berapa dalam Undang Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "Pasal 28G ayat (2).",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Undang-Undang Nomor 12 tahun 2011 adalah tentang?",
                "jawaban" => "Pembentukan Peraturan Perundang-Undangan.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Dalam hal tidak ada pasangan calon Presiden dan Wakil Presiden terpilih, dua pasangan calon yang memperoleh suara terbanyak pertama dan kedua dalam pemilihan umum dipilih oleh rakyat secara langsung dan pasangan yang memperoleh suara rakyat terbanyak dilantik sebagai Presiden dan Wakil Presiden. Ketentuan tersebut merupakan rumusan Pasal 6A ayat (4) yang ditetapkan dalam Sidang Majelis Permusyawaran Rakyat Tahun?",
                "jawaban" => "2002.",
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
