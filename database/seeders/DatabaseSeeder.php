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
                "pernyataan" => "Penyelenggaraan pendidikan bela negara di Indonesia",
            ], [
                "pernyataan" => "Majelis Permusyawaratan Rakyat (MPR) perlu diberikan kembali wewenang untuk menetapkan Garis-garis Besar Haluan Negara (GBHN).",
            ], [
                "pernyataan" => "Presiden dan Wakil Presiden memegang jabatan selama lima tahun, dan sesudahnya dapat dipilih kembali dalam jabatan yang sama, hanya untuk satu kali masa jabatan.",
            ], [
                "pernyataan" => "Masyarakat diberikan kebebasan dalam memelihara dan mengembangkan nilai-nilai budaya daerah.",
            ], [
                "pernyataan" => "Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 perlu disempurnakan kembali.",
            ], [
                "pernyataan" => "Dalam Proses Pemberhentian Presiden dan/atau Wakil Presiden, apabila Putusan Mahkamah Konstitusi memutuskan bahwa Presiden dan/atau Wakil Presiden terbukti melakukan pelanggaran hukum, maka dalam sidangnya, MPR tidak harus memberhentikan Presiden dan/atau Wakil Presiden.",
            ], [
                "pernyataan" => "Pelaksanaan pembangunan proyek infrastruktur negara dengan sumber dana berasal dari biaya asing.",
            ], [
                "pernyataan" => "Penyelenggaraan pendidikan konstitusi bagi warga Negara Republik Indonesia.",
            ], [
                "pernyataan" => "Indonesia Yang Mandiri sebagaimana diamanatkan Ketetapan MPR RI Nomor VII/MPR/2001 tentang visi Indonesia belum sesuai harapan.",
            ], [
                "pernyataan" => "Presiden memiliki wewenang untuk menetapkan Peraturan Pemerintah pengganti Undang-Undang.",
            ], [
                "pernyataan" => "Pembatasan masa jabatan Anggota DPR selama 2 (dua) periode perlu diatur dalam Undang-Undang.",
            ], [
                "pernyataan" => "Pemberian bantuan langsung tunai dari Pemerintah kepada masyarakat yang dianggap tidak mampu.",
            ],
        ]);

        Pointer::insert([
            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Untuk menumbuhkan faham nasionalisme bagi seluruh warga negara Indonesia dan ini merupakan salah satu penjabaran dari Sila Ketiga Pancasila, Persatuan Indonesia. Dengan bela negara, warga negara diharapkan memiliki kehendak untuk bersatu dan mengutamakan pentingnya persatuan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Merupakan pengejawantahan ketentuan Pasal 30 ayat (1) UUD NRI Tahun 1945 yaitu tiap-tiap warga Negara berhak dan wajib ikut serta dalam usaha pertahanan dan keamanan Negara. Dengan bela negara rakyat memahami menjalankan fungsi pertahanan dan keamanan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Bela negara dilakukan dalam rangka menunjang terwujudnya sistem pertahanan dan keamanan rakyat semesta yaitu rakyat sebagai kekuatan pendukung.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Adanya keberagaman budaya dan kondisi geografis diperlukan pembangunan visi yang sama dalam bidang sistem pertahanan dan keamanan negara. Bela negara dapat dijadikan sarana menyatukan visi tersebut.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Pasal 30 ayat (2) Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, Rakyat hanya sebagai kekuatan pendukung.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Biaya untuk melakukan pelatihan bela negara sangat besar sehingga menambah beban APBN.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Fungsi pertahanan dan keamanan sudah dilaksanakan oleh TNI dan POLRI.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Saat ini prioritas negara seharusnya adalah untuk meningkatkan kesejahteraan karena negara dalam upaya membangun bukan untuk berperang.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'GBHN diperlukan dalam menjalankan roda pemerintahan dan manfaatnya untuk rakyat, sehingga dengan kewenangan itu tidak mengharuskan diikuti dengan perubahan kedudukan MPR sebagai lembaga tertinggi negara.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'MPR mencerminkan masyarakat Indonesia dalam melakukan proses kedaulatan rakyat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'GBHN memuat tentang rencana pembangunan. Dengan adanya rencana pembangunan para penyelenggara negara mempunyai pegangan dan sasaran serta target yang harus dicapainya dalam kurun waktu tertentu. Dengan demikian harapan dan kenyataan yang didapatkan bisa dengan mudah diukur dengan referensi dokumen tersebut.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Adanya jaminan kesinambungan pembangunan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Adanya inkonsistensi alasan dihilangkannya GBHN karena Presiden sudah dipilih langsung oleh rakyat yang memiliki visi dan misinya sendiri dan penetapan RPJPM yang akan mengikat Presiden terpilih dan faktanya diabaikan. ',
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
                'penjelasan' => 'Pasal 7 UUD NRI Tahun 1945,  Presiden dan Wakil Presiden memegang jabatan selama lima tahun, dan sesudahnya dapat dipilih kembali dalam jabatan yang sama, hanya untuk satu kali masa jabatan. Ketentuan tersebut untuk menjaga agar presiden tidak memegang jabatan lebih dari 2 (dua) periode karena dianggap berdampak tidak baik dalam perkembangan demokrasi.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Ini bukti Indonesia menganut sistem presidensial yang salah satu syarat adanya pembatasan kekuasaan Presiden dan Wakil Presiden untuk masa jabatan yang pasti (fixed term).',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Ketentuan ini menekankan pentingnya etika di dalam kehidupan berbangsa dan bernegara sebagaimana diatur dalam Ketetapan MPR Nomor VI/MPR/2001 tentang Etika Kehidupan Berbangsa, yaitu mengenai pentingnya etika politik dan pemerintahan dimaksudkan agar terwujud pemerintahan yang bersih, efisien dan efektif yang salah satu wujudnya adalah pembatasan masa jabatan bagi pejabat publik.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Pembatasan jabatan agar tidak terjadi munculnya kekuasaan yang absolut dan berpotensi korupsi. Hal ini sesuai dengan pemikiran Lord Acton yang mengatakan Power tends to corrupt, and absolute power corrupts absolutely  (kekuasaan itu cenderung korupsi, dan kekuasaan yang absolute (mutlak) itu pasti korupsi).',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Banyak negara yang mengatur masa jabatan presiden dan wakil presiden selama 2 (dua) periode kepemimpinan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Pasal 1 Ayat (2), UUD NRI Tahun 1945 kedaulatan berada di tangan rakyat dan dilaksanakan menurut Undang-Undang Dasar.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Presiden dan wakil presiden adalah jabatan publik yang dipilih oleh rakyat. Seharusnya sepanjang dipilih oleh rakyat sehingga peraturan tidak harus membatasi masa jabatan tersebut. (Pasal 6A UUD NRI Tahun 1945 Presiden dan Wakil Presiden dipilih dalam satu pasangan secara langsung oleh rakyat).',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Apabila dibatasi dikhawatirkan terjadinya pembangunan yang tidak berkesinambungan karena presiden dan wakil presiden memiliki prioritas yang berbeda.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Pembatasan masa jabatan presiden dapat menghambat seseorang yang memiliki sikap kenegarawanan  untuk mengabdikan dan menggunakan kemampuannya dalam membangun negara.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Hak dipilih dan memilih merupakan hak asasi manusia.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Sebagai jabatan publik hanya presiden dan wakil presiden saja yang dibatasi dalam Undang-Undang  Dasar sementara jabatan lain tidak dilakukan pembatasan. ',
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
                'penjelasan' => 'Putusan MPR diatur dalam Ayat (7), Keputusan Majelis Permusyawaratan Rakyat atas usul pemberhentian Presiden dan/atau Wakil Presiden harus diambil dalam rapat paripurna Majelis Permusyawaratan Rakyat yang dihadiri oleh sekurang-kurangnya ¾ dari jumlah anggota dan disetujui oleh sekurang-kurangnya 2/3 dari jumlah anggota yang hadir, setelah Presiden dan/atau Wakil Presiden diberi kesempatan menyampaikan penjelasan dalam rapat paripurna Majelis Permusyawaratan Rakyat. Bukan untuk memperkuat putusan Mahkamah Konstitusi.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Tidak ada kata di dalam sidang MPR harus menyetujui putusan MK terkait usul pemberhentian Presiden dan/atau Wakil Presiden.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Pertimbangan yang dilakukan Paripurna MPR tidak hanya hukum namun juga melihat seluruh aspek.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Putusan Mahkamah Konstitusi bersifat final. Apabila keputusan tersebut tidak dikuatkan dalam rapat Majelis Permusyawaratan Rakyat maka bertentangan dengan prinsip negara Indonesia adalah negara hukum (Pasal 1 Ayat (3) UUD NRI Tahun 1945).',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Mahkamah Konstitusi memegang kekuasaan kehakiman yang merdeka. Apabila terjadi perbedaan pengambilan keputusan dengan Majelis Permusyawaratan Rakyat maka dikhawatirkan akan muncul persoalan konstitusional.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Apabila sudah ada putusan dari MK yang bersifat final and binding, seharusnya MPR melaksanakan putusan MK tersebut.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Untuk konsistensi dalam penyelenggaraan negara seharusnya terhadap satu persoalan diselesaikan oleh satu institusi saja.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Ketetapan MPR Nomor XVI/MPR/1998 tentang politik ekonomi dalam rangka demokrasi ekonomi, pinjaman luar negeri dimungkinkan sepanjang untuk kepentingan rakyat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Dana dari asing untuk lebih mempercepat proses pembangunan infrastruktur karena kondisi keuangan negara belum memungkinkan untuk membiayai seluruh pembangunan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Pelaksanaan pembangunan infrastruktur telah diatur dalam Peraturan Presiden Nomor 38 tahun 2015 tentang Kerjasama Pemerintah Dengan Badan Usaha Dalam Penyediaan Infrastruktur.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Sumber dana asing yang dapat digunakan sesuai dengan Peraturan Presiden,harus dilaksanakan dengan prinsip kemitraan, kemanfaatan, bersaing, pengendalian dan pengelolaan risiko, efektif, dan efisien. Dengan adanya prinsip tersebut, pembangunan menggunakan dana asing diharapkan tidak akan merugikan Indonesia.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Pasal 33 Ayat (2) cabang-cabang produksi yang penting bagi negara dan yang menguasai hajat hidup orang banyak dikuasai oleh negara. Oleh karena itu dalam membangun infrastruktur pun harus menggunakan dana negara bukan dana asing.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Penggunaan dana asing cenderung dengan persyaratan yang berat dan merugikan. Sehingga sering muncul kebijakan-kebijakan yang menguntungkan pihak tertentu akibat dana tersebut.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Peraturan yang mengatur tentang sumber dana asing masih belum komprehensif dalam satu kesatuan sehingga masih banyak celah yang dapat merugikan negara apabila berhutang ke pihak luar. Tidak digunakannya dana asing akan lebih mendorong bangsa Indonesia sebagai bangsa yang mandiri. ',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Pembukaan UUD NRI Tahun 1945 mengamanatkan bahwa salah satu tujuan negara adalah mencerdaskan kehidupan bangsa. Pendidikan ini merupakan upaya untuk membangun sumber daya manusia yang paham akan konstitusi.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Adanya kewajiban negara untuk memberikan pemahaman terhadap nilai-nilai luhur bangsa termasuk konstitusi di dalamnya.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Pendidikan konstitusional bagi warga negara sangat penting sehingga warga negara dapat mengetahui, memahami, dan dapat mengamalkan konstitusi dalam kehidupan berbangsa dan bernegara.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Pendidikan ini sebagai wahana penyampaian doktrin yang terdapat dalam konstitusi kepada warga negara sehingga negara dapat tetap berdiri sesuai dengan kehendak yang ada dalam konstitusi.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Pasal 31 ayat (3) pemerintah mengusahakan dan menyelenggarakan satu sistem pendidikan nasional, yang meningkatkan keimanan dan ketakwaan serta akhlak mulia dalam rangka mencerdaskan kehidupan bangsa, yang diatur dengan undang-undang. Dengan demikian tidak diperlukan adanya pendidikan secara khusus karena nilai-nilai konstitusi bisa diajarkan dalam pendidikan secara umum, yang penting sistemnya ditetapkan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Penyelenggaraan pendidikan  secara khusus memerlukan perangkat yang banyak dan waktu khusus sehingga akan tidak efektif apabila diselenggarakan saat ini.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Penyelenggaraan pendidikan memerlukan biaya yang besar.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Konstitusi itu memuat nilai dasar yang harus diketahui oleh semua warga negara tanpa melihat jenis penyelenggaraan pendidikan. Oleh karena itu muatan materi pendidikan konstitusi sebaiknya diintegrasikan dengan jenis penyelenggaraan pendidikan yang sudah berjalan baik formal maupun informal.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Praktek pertumbuhan ekonomi bertumpu pada perusahaan-perusahaan besar yang mengedepankan profit. Dampak yang ditimbulkan saat ini banyak koperasi yang tidak berjalan sebagaimana fungsinya yaitu sebagai soko guru perekonomian kerakyatan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Banyak proses pembangunan infrastruktur yang tergantung dari sumber dana asing.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Hutang dalam setiap APBN di awal tahun mengalami peningkatan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Mulai tergerusnya nilai-nilai budaya akibat globalisasi.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Tidak kuatnya pemerintah dalam menjaga akibat negatif dari pengaruh globalisasi.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Terbentuknya badan ekonomi kreatif sebagai salah satu tulang punggung ekonomi kerakyatan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Saat ini negara sudah memiliki kemampuan dan ketangguhan dalam menyelenggarakan kehidupan berbangsa dan bernegara di tengah-tengah pergaulan antar bangsa agar sejajar dengan bangsa-bangsa lain (antara lain adanya UU RPJMN).',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Indonesia telah menerapkan politik luar negeri yang berkepribadian dan bebas aktif dalam pergaulan dengan bangsa-bangsa lain.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Pembangunan sudah dilakukan di seluruh Indonesia dan tidak berpusat di Pulau Jawa saja. Penggunaan utang luar negeri dipergunakan untuk membiayai pembangunan yang hasilnya digunakan untuk mencicil hutang luar negeri. Utang luar negeri juga dilakukan oleh negara-negara maju contoh: Amerika Serikat.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Memiliki kepribadian bangsa dan identitas budaya Indonesia yang berakar dari potensi budaya daerah contohnya dalam setiap acara resmi kenegaraan baik di dalam maupun di luar negeri menggunakan pengantar bahasa Indonesia.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Pasal 22 Ayat (1) Dalam hal ihwal kegentingan yang memaksa, Presiden berhak menetapkan peraturan pemerintah sebagai pengganti undang-undang.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Tugas tersebut berlaku sesuai dengan asas legalitas dan berlaku sebagai hukum positif.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Karena tidak ada standar yang pasti mengenai hal ihwal kegentingan yang memaksa, menjadi subjek Presiden untuk menerbitkan Perppu.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Tidak ada yang salah dengan tindakan Presiden menerbitkan Perppu karena dilindungi oleh UUD NRI Tahun 1945.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Harus dibuat batasan hal ihwal kegentingan yang memaksa.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Agar tidak timbul abuse of power.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Agar ada checks and balances antara kekuasaan pemegang pemerintah dengan kekuasaan pemegang pembentuk UU.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Pasal 20 Ayat (1), Dewan Perwakilan Rakyat memegang kekuasaan membentuk undang-undang.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Agar ada kepastian hukum tentang masa jabatan sebagai pejabat negara.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Sesuai dengan Pasal 1 Ayat (3), Negara Indonesia adalah Negara hukum.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Pasal 28D ayat (3) setiap warga Negara berhak memperoleh kesempatan yang sama dalam pemerintahan. Dengan pembatasan maka mencerminkan implementasi dalam hal memberikan kesempatan yang sama kepada orang lain sebagai Anggota DPR.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Pasal 43 Ayat (1) UU Nomor 39 tahun 1999 tentang Hak Asasi Manusia, Setiap warga negara berhak untuk dipilih dan memilih dalam pemilihan umum berdasarkan persamaan hak melalui pemungutan suara yang langsung, umum, bebas, rahasia, jujur, dan adil sesuai dengan ketentuan peraturan perundang-undangan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Membuka kesempatan bagi setiap warga negara duduk dalam lembaga perwakilan rakyat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Membuka ruang seluas-luasnya bagi seluruh kelompok/lapisan masyarakat memilih wakilnya yang akan mewakilinya.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Pemilu dilaksanakan sebagai pengejawantahan suara rakyat dalam rangka mewujudkan demokrasi.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Adanya prinsip one man one vote, menandakan kebebasan orang yang memiliki hak pilih kepada seseorang.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Dalam undang-undang dasar tidak ada pembatasan masa jabatan sebagai Anggota DPR.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Agar masing-masing anggota DPR dapat bekerja dengan maksimal untuk dapat memberikan sumbangsih pemikiran.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Pasal 28H Ayat (3), setiap orang berhak atas jaminan sosial yang memungkinkan pengembangan dirinya secara utuh sebagai manusia yang bermartabat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Menjalankan amanat Pembukaan UUD NRI Tahun 1945.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Menjalankan prinsip Negara kesejahteraan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Bantuan Langsung Tunai merupakan upaya pemberdayaan yang dilakukan pemerintah terhadap masyarakat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Pasal 33 ayat (3), bumi dan air dan kekayaan alam yang terkandung di dalamnya dikuasai oleh Negara dan dipergunakan untuk sebesar-besarnya kemakmuran rakyat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Mengajarkan masyarakat tidak mandiri.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Masih banyak kebocoran dari adanya bantuan tunai langsung yang tidak tepat sasaran.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Dapat dijadikan alat politik pada saat pemilukada maupun pemilihan umum.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Uang yang diberikan belum tentu digunakan untuk sesuatu yang produktif.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Sebaiknya langsung diberikan kepada program infrastruktur dan pembangunan yang pada akhirnya akan membuat kebutuhan hidup menjadi kecil.',
                'sisi' => 'kontra'
            ],
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
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 7B ayat (1)  adalah?",
                "jawaban" => "Usul pemberhentian Presiden dan/atau Wakil Presiden dapat diajukan oleh Dewan Perwakilan Rakyat kepada Majelis Permusyawaratan Rakyat hanya dengan terlebih dahulu mengajukan permintaan kepada Mahkamah Konstitusi untuk memeriksa, mengadili, dan memutus pendapat Dewan Perwakilan Rakyat bahwa Presiden dan/atau Wakil Presiden telah melakukan pelanggaran hukum berupa pengkhianatan terhadap negara, korupsi, penyuapan, tindak pidana berat lainnya, atau perbuatan tercela; dan/atau pendapat bahwa Presiden dan/ atau Wakil Presiden tidak lagi memenuhi syarat sebagai Presiden dan/atau Wakil Presiden.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Danau Kerinci terletak di provinsi?",
                "jawaban" => "Jambi.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Sesuai dengan Undang-Undang Nomor 15 Tahun 2006, jumlah anggota Badan Pemeriksa Keuangan Republik Indonesia adalah?",
                "jawaban" => "9 (sembilan) Orang.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Setiap menteri membidangi urusan tertentu dalam pemerintahan. Pernyataan tersebut merupakan ketentuan dalam Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 yaitu rumusan Pasal dan Ayat berapa?",
                "jawaban" => "Pasal 17 ayat (3).",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Dewan Perwakilan Daerah memberikan pertimbangan kepada Dewan Perwakilan Rakyat atas rancangan undang-undang tentang?",
                "jawaban" => "Rancangan undang-undang anggaran pendapatan dan belanja negara dan rancangan undang-undang yang berkaitan dengan pajak, pendidikan, dan agama.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Salah satu hasil pembahasan panitia Sembilan adalah piagam Jakarta yang menjadi intisari Pembukaan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, terdapat 7 kata yang dihilangkan dari rumusan piagam Jakarta tersebut dalam Pembukaan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, sebutkan 7 kata tersebut?",
                "jawaban" => "Dengan kewajiban menjalankan syariat Islam bagi pemeluk-pemeluknya.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Lagu nasional jembatan merah diciptakan oleh?",
                "jawaban" => "Gesang.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 31 ayat (5) adalah?",
                "jawaban" => "Pemerintah memajukan ilmu pengetahuan dan teknologi dengan menjunjung tinggi nilai-nilai agama dan persatuan bangsa untuk kemajuan peradaban serta kesejahteraan umat manusia.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 24 ayat (2) adalah Kekuasaan kehakiman dilakukan oleh sebuah Mahkamah Agung dan badan peradilan yang berada di bawahnya dalam lingkungan peradilan umum, lingkungan peradilan agama, lingkungan peradilan militer, lingkungan peradilan tata usaha negara, dan oleh sebuah Mahkamah Konstitusi. Wewenang Mahkamah Konstitusi menurut ketentuan Pasal 24C ayat (1) adalah?",
                "jawaban" => "Mengadili pada tingkat pertama dan terakhir yang putusannya bersifat final untuk menguji undang-undang terhadap Undang-Undang Dasar, memutus sengketa kewenangan lembaga negara yang kewenangannya diberikan oleh Undang-Undang Dasar, memutus pembubaran partai politik, dan memutus perselisihan tentang hasil pemilihan umum.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Johannes Leimena adalah pahlawan nasional yang merupakan tokoh masyarakat berasal dari Provinsi?",
                "jawaban" => "Maluku.",
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
            ],
        ]);
    }
}
