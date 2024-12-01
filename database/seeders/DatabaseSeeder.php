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
                'name' => 'SMAS Fatih Bilingual',
                'run' => 1,
            ],
            [
                'name' => 'SMAN 3 Langsa',
                'run' => 1,

            ],
            [
                'name' => 'SMAN 2 Banda Aceh',
                'run' => 1,

            ],
            [
                'name' => 'SMAS Labschool Unsyiah',
                'run' => 2,

            ],
            [
                'name' => 'SMAS Sukma Bangsa Lhokseumawe',
                'run' => 2,

            ],
            [
                'name' => 'SMAN 10 Fajar Harapan Banda Aceh',
                'run' => 2,

            ],
            [
                'name' => 'SMAN 3 Banda Aceh',
                'run' => 3,

            ],
            [
                'name' => 'SMAN 4 Banda Aceh',
                'run' => 3,

            ],
            [
                'name' => 'SMAN Modal Bangsa Aceh Besar',
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
            'Aceh',
        ];

        foreach ($wilayahs as $role) {
            Wilayah::create([
                'nama_wilayah' => $role,
            ]);
        }

        Pernyataan::insert([
            [
                "pernyataan" => "1.	Pemekaran daerah sangat baik untuk perkembangan daerah provinsi, kabupaten dan/atau kota.",
                "run" => 1
            ], [
                "pernyataan" => "2.	Wewenang Dewan Perwakilan Daerah perlu setara dengan wewenang Dewan Perwakilan Rakyat.",
                "run" => 1
            ], [
                "pernyataan" => "3.	Pemindahan ibu kota negara dari Jakarta ke Ibu Kota Nusantara (IKN).",
                "run" => 1
            ], [
                "pernyataan" => "4.	Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 perlu disempurnakan kembali.",
                "run" => 2
            ], [
                "pernyataan" => "5.	Penerapan hukuman mati di Indonesia bagi pengedar narkoba.",
                "run" => 2
            ], [
                "pernyataan" => "6.	Indonesia Yang Religius sebagaimana diamanatkan Ketetapan MPR RI Nomor VII/MPR/2001 tentang Visi Indonesia belum sesuai harapan.",
                "run" => 2
            ], [
                "pernyataan" => "7.	Hak setiap orang untuk hidup sejahtera lahir dan batin, bertempat tinggal, dan mendapatkan lingkungan hidup yang baik dan sehat serta berhak memperoleh pelayanan kesehatan sudah berjalan dengan baik.",
                "run" => 3
            ], [
                "pernyataan" => "8.	Masyarakat diberikan kebebasan dalam memelihara dan mengembangkan nilai-nilai budaya daerah.",
                "run" => 3
            ], [
                "pernyataan" => "9.	Indonesia Yang Mandiri sebagaimana diamanatkan Ketetapan MPR RI Nomor VII/MPR/2001 tentang visi Indonesia belum sesuai harapan.",
                "run" => 3
            ], [
                "pernyataan" => "10.	Presiden dan Wakil Presiden memegang jabatan selama lima tahun, dan sesudahnya dapat dipilih kembali dalam jabatan yang sama, hanya untuk satu kali masa jabatan.",
                "run" => 4
            ], [
                "pernyataan" => "11.	Dalam Proses Pemberhentian Presiden dan/atau Wakil Presiden, apabila Putusan Mahkamah Konstitusi memutuskan bahwa Presiden dan/atau Wakil Presiden terbukti melakukan pelanggaran hukum, maka dalam sidangnya, MPR tidak harus memberhentikan Presiden dan/atau Wakil Presiden.",
                "run" => 4
            ], [
                "pernyataan" => "12.	Penyelenggaraan pendidikan konstitusi bagi warga Negara Republik Indonesia.",
                "run" => 4
            ],

        ]);
        Pointer::insert([
            [
                'pernyataan_id' => 1,
                'penjelasan' => '●	Dengan pemekaran, pemerintahan daerah dapat lebih dekat dengan masyarakat, sehingga pelayanan publik menjadi lebih cepat dan responsif terhadap kebutuhan lokal.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => '●	Pemekaran daerah dapat mendorong kemandirian daerah, pertumbuhan ekonomi dengan menciptakan kesempatan kerja baru, meningkatkan investasi, dan pengembangan infrastruktur yang lebih baik.',
                'sisi' => 'pro'
            ],
            [
                'pernyataan_id' => 1,
                'penjelasan' => '●	Pemekaran memberikan kesempatan bagi masyarakat untuk berpartisipasi lebih aktif dalam pemerintahan dan pengambilan keputusan yang memengaruhi kehidupan mereka.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => '●	Pemekaran daerah dapat memperkuat identitas lokal dan mendorong kemandirian daerah dalam mengelola sumber daya serta pembangunan, sesuai dengan potensi dan kebutuhan spesifik daerah tersebut.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => '●	Dasar Hukum Undang-Undang Dasar Negara Republik Indonesia tahun 1945 Pasal 18: Pasal ini mengatur tentang pembagian wilayah negara yang dapat diatur lebih lanjut oleh undang-undang. Ini memberikan landasan konstitusional bagi pemekaran daerah.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => '●	UU No. 23 Tahun 2014 tentang Pemerintahan Daerah: undang-undang ini mengatur tentang pembentukan daerah otonom, dan mengamanatkan bahwa pemekaran daerah dapat dilakukan untuk meningkatkan efisiensi, efektivitas, dan akuntabilitas pemerintahan.',
                'sisi' => 'pro'
            ],
            [
                'pernyataan_id' => 1,
                'penjelasan' => '●	Pemekaran daerah membutuhkan biaya besar untuk membentuk infrastruktur pemerintahan baru, seperti kantor pemerintahan, fasilitas pelayanan publik, dan gaji pegawai. ',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => '●	Pemekaran tidak selalu menjamin perbaikan pelayanan publik, terutama jika pemekaran dilakukan atas dasar politik atau kepentingan elite lokal, bukan kebutuhan riil masyarakat. Daerah hasil pemekaran sering menghadapi masalah koordinasi, infrastruktur yang terbatas, dan lemahnya kapasitas birokrasi.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => '●	Dasar Hukum: Pasal 18 Undang-Undang Dasar Negara Republik Indonesia tahun 1945 mengatur otonomi daerah agar meningkatkan kesejahteraan, namun dalam praktiknya, banyak pemekaran hanya menambah birokrasi tanpa memperbaiki kualitas layanan publik.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => '●	Pemekaran bisa menimbulkan konflik antardaerah terkait pembagian aset, wilayah, atau sumber daya alam, serta memunculkan sentimen kedaerahan dan fragmentasi sosial. Hal ini justru dapat menghambat pembangunan dan merusak stabilitas sosial di tingkat lokal.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => '●	Banyak daerah baru hasil pemekaran mengalami keterbatasan tenaga profesional dan kompeten di bidang pemerintahan. Pembentukan daerah baru seringkali diikuti dengan perekrutan pegawai secara besar-besaran tanpa mempertimbangkan kualitas, yang berdampak pada lemahnya tata kelola pemerintahan.',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 1,
                'penjelasan' => '●	Pemekaran daerah sering dimanfaatkan oleh kelompok-kelompok tertentu untuk memperoleh kekuasaan politik atau akses terhadap anggaran daerah. Banyak daerah baru mengalami peningkatan kasus korupsi dan maladministrasi karena lemahnya pengawasan dan transparansi.',
                'sisi' => 'kontra'
            ],






            [
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
                "pertanyaan" => "Pasal 8 ayat (3) Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 mengatur adanya Triumvirat untuk melaksanakan tugas kepresidenan, dalam hal Presiden  dan Wakil Presiden mangkat, berhenti, diberhentikan atau tidak dapat melakukan kewajibannya dalam masa jabatannya secara bersamaan. Sebutkan Menteri-Menteri yang dimaksud dengan Triumvirat tersebut!",
                "jawaban" => "Menteri Luar Negeri, Menteri Dalam Negeri, dan Menteri Pertahanan secara bersama-sama.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Apakah tujuan dilakukannya Amandemen Pertama Undang-Undang Dasar Republik Indonesia Tahun 1945?",
                "jawaban" => "Tujuannya adalah mengubah kekuasaan pembentuk Undang-Undang dari Presiden ke DPR.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Sebutkan pasal-pasal pada Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 yang diamandemen pada tahun 1999?",
                "jawaban" => "Pasal 5,7,9,13,14,15,17,20 dan 21",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Siapakah pahlawan yang dikenal sebagai Bapak Proklamator Kemerdekaan Indonesia?",
                "jawaban" => ": Ir Soekarno dan Dr. Drs. H. Mohammad Hatta",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Kapan dan di mana istilah Bhineka Tunggal Ika ditemukan?",
                "jawaban" => "Bhineka Tunggal Ika ditemukan pertama kali pada abad XIV pada masa Kerajaan Majapahit dalam Kitab Sutasoma karya Mpu Tantular.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Sebutkan rumusan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 pasal 6A ayat (2)!",
                "jawaban" => '“Pasangan calon Presiden dan Wakil Presiden diusulkan oleh partai politik atau gabungan partai politik peserta pemilihan umum sebelum pelaksanaan pemilihan umum”.',
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "“Segala putusan Majelis Permusyawaratan Rakyat ditetapkan dengan suara yang terbanyak”. Kalimat dimaksud termaktub dalam Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 Sebutkan rumusan pasal dan ayat tersebut!",
                "jawaban" => "pasal 2 ayat (3).",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Sebutkan rumusan Pasal II Aturan Tambahan pada Undang-Undang Dasar Negara Republik Indonesia Tahun 1945!",
                "jawaban" => '“Dengan ditetapkannya perubahan Undang-Undang Dasar ini, Undang-Undang Dasar Negara Republik Indonesia tahun 1945 terdiri atas Pembukaan dan pasal-pasal”.',
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Berasal dari provinsi manakah pahlawan nasional Frans Kaisiepo?",
                "jawaban" => "Papua",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Etika Kehidupan Berbangsa diatur dalam Ketetapan MPR RI Nomor?",
                "jawaban" => "Nomor VI/MPR/2001",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Sebutkan pencipta lagu nasional “Indonesia Pusaka”!",
                "jawaban" => "Ismail Marzuki.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Pasal 10 Undang-Undang Nomor 13 Tahun 2019 Tentang perubahan ketiga atas Undang-Undang Nomor 17 Tahun 2014 tentang Majelis Permusyawaratan Rakyat, Dewan Perwakilan Rakyat, Dewan Perwakilan Daerah, Dan Dewan Perwakilan Rakyat Daerah, mengatur tentang hak anggota MPR. Sebutkan hak-hak tersebut?",
                "jawaban" => "Anggota MPR berhak mengajukan usul pengubahan pasal Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, Menentukan sikap dan pilihan dalam pengambilan keputusan, Memilih dan dipilih, Membela diri, Imunitas, Protokoler; dan Keuangan dan administratif.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Siapa pahlawan yang dikenal sebagai “Sang Ratu Adil?“",
                "jawaban" => "Pangeran Diponegoro.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Pada tanggal 16 Agustus 1945 para pemimpin bangsa “diculik” oleh kelompok pemuda Indonesia. Peristiwa itu dikenal dengan nama?",
                "jawaban" => "Peristiwa Rengasdengklok",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Jumlah bab, pasal, dan ayat Undang Undang Dasar Negara Republik Indonesia Tahun 1945 setelah diubah tahun 1999-2002 adalah 21 bab, 73 pasal, 170 ayat, 3 pasal aturan peralihan, dan 2 pasal aturan tambahan. Perubahan Undang-Undang Dasar Negara Republik Indonesia tahun 1945 pada tahun 1999 – 2002 dilakukan dengan cara?",
                "jawaban" => "Addendum",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Sesuai dengan Undang-Undang Nomor 15 Tahun 2006, jumlah anggota Badan Pemeriksa Keuangan Republik Indonesia adalah?",
                "jawaban" => "9 (sembilan) Orang",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Presiden dapat memberi grasi dan rehabilitasi dengan memperhatikan pertimbangan MA, diatur dalam Undang-Undang Dasar Negara Republik Indonesia tahun 1945. Sebutkan pasal yang mengatur hal tersebut!",
                "jawaban" => "Pasal 14 ayat (1)",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Sebutkan tahun dilakukannya amandemen Undang-Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "Tahun 1999, tahun 2000, tahun 2001, dan tahun 2002.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Sebutkan rumusan Undang-Undang Dasar Negara Republik Indonesia tahun 1945 pasal 36A!",
                "jawaban" => "Lambang Negara ialah garuda pancasila dengan semboyan Bhinneka Tunggal Ika.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Pada tanggal 25 November diperingati dengan Hari Guru. Sebutkan pencipta lagu nasional Himne Guru!",
                "jawaban" => "Sartono",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Sebutkan pasal terkait negara menghormati dan memelihara bahasa daerah sebagai kekayaan budaya nasional menurut Undang-Undang Dasar Negara Republik Indonesia tahun 1945!",
                "jawaban" => "Pasal 32",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Semboyan nasional Bhinneka Tunggal Ika sudah dikenal dalam kitab sutasoma karangan Mpu Tantular. Pada zaman kerajaan apa kitab itu ditulis!",
                "jawaban" => "Kerajaan Majapahit.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Siapakah Konseptor Lambang Garuda Pancasila?",
                "jawaban" => "Sultan Hamid II.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Undang-Undang Dasar Negara Republik Indonesia tahun 1945 mengatur kondisi negara dalam keadaan bahaya. Pada pasal berapakah hal tersebut diatur?",
                "jawaban" => "pasal 12 Undang-Undang Dasar Negara Republik Indonesia tahun 1945.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "UUD NRI Tahun 1945 mengatur adanya non amandement articles pada pasal 37 ayat (5) sebutkan rumusan pasal tersebut!",
                "jawaban" => "Khusus mengenai bentuk NKRI tidak dapat dilakukan perubahan",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Di dalam pasal 28 A sampai 28 J, terdapat ketentuan non delegable right (hak yang tidak dapat dikurangi dalam bentuk apapun). Sebutkan minimal 5 (lima) hak-hak tersebut! ",
                "jawaban" => "</br>-&nbsp;Hak untuk hidup</br>-&nbsp;Hak untuk membentuk keluarga</br>-&nbsp;Hak untuk mengembangkan diri</br>-&nbsp;Hak untuk pengakuan yang sama dihadapan hukum</br>-&nbsp;Hak untuk kebebasan memeluk agama</br>-&nbsp;Hak untuk berkomunikasi</br>-&nbsp;Hak untuk perlindungan diri pribadi</br>-&nbsp;Hak untuk hidup sejahtera lahir dan batin</br>-&nbsp;Hak untuk perlindungan terhadap perlakuan diskriminatif, pemajuan, penegakan, dan pemenuhan</br>-&nbsp;HAM adalah tanggung jawab negara, terutama pemerintah</br>-&nbsp;Hak untuk berkewajiban menghargai hak asasi orang lain serta tunduk kepada pembatasan yang ditetapkan Undang-Undang.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Sebutkan TAP MPR terkait Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 sebagai konstitusi Negara Kesatuan Republik Indonesia ditetapkan sebagai sumber hukum dan atau urutan perundang-undangan RI!",
                "jawaban" => "TAP. MPR No. III/MPR/2000.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Siapakah yang mengusulkan semboyan Bhinneka Tunggal Ika pada saat sidang BPUPKI?",
                "jawaban" => "Moh Yamin.",
                'wilayah_id' => 1
            ],
            [
                "pertanyaan" => "Siapakah Pencipta Lagu Bungong Jeumpa?",
                "jawaban" => "Abraham Abduh",
                'wilayah_id' => 1
            ],
            [
                "pertanyaan" => "Cabang-cabang produksi yang penting bagi negara dan yang menguasai hajat hidup orang banyak dikuasai oleh negara. Pernyataan tersebut merupakan rumusan Pasal dan Ayat berapa dalam Undang Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "Pasal 33 ayat (2).",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => 'Jelaskan apa yang dimaksud dengan “Asas ius soli”?',
                "jawaban" => "Asas yang menetapkan kewarganegaraan seseorang sesuai dengan tempat ia dilahirkan",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Sebutkan tanggal terkait Undang-Undang Dasar Sementara 1950 yang pernah berlaku di Indonesia!",
                "jawaban" => "17 Agustus 1950 s.d 5 Juli 1959.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Sebutkan latar belakang dikeluarkannya Tap MPR RI Nomor XVIII/MPR/1998!",
                "jawaban" => "Karena Pedoman Penghayatan dan Pengamalan Pancasila (P4) atau Ekaprasetya Pancakarsa yang dicanangkan dianggap telah disalahgunakan oleh pemerintahan Orde Baru.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Jelaskan latar belakang pembentukan lembaga Dewan Perwakilan Daerah dalam sistem ketatanegaraan Indonesia!",
                "jawaban" => "Memperkuat ikatan daerah-daerah dalam wadah Negara Kesatuan Republik Indonesia dan memperteguh persatuan kebang¬saan seluruh daerah; meningkatkan agregasi dan akomodasi aspirasi dan kepentingan daerah-daerah dalam perumusan kebijakan nasional berkaitan dengan negara dan daerah; mendorong percepatan demokrasi, pembangunan dan kemajuan daerah secara serasi dan seimbang.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Sebutkan rumusan yang tercantum pada Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 terkait pancasila yang benar dan perlu dihayati serta diamalkan!",
                "jawaban" => "Pembukaan UUD 1945.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Sebutkan minimal 5 (lima) pasal pada Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 yang mengalami perubahan saat pengesahan amandemen!",
                "jawaban" => "Pasal 1, 2, 3, 5, 6, 7, 8, 9, 11, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 30, 31, 32, 33, 34, 36, dan 37",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Presiden dan wakil presiden periode 2024-2029 mengucapkan sumpah/janji di sidang paripurna MPR RI pada tanggal berapa?",
                "jawaban" => "20 Oktober 2024",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Sebutkan nama-nama fraksi/kelompok DPD di MPR Periode 2024-2029!",
                "jawaban" => "PDI Perjuangan, Partai Golkar, Partai Gerindra, Partai Nasdem, Partai Kebangkitan Bangsa (PKB), Partai Keadilan Sejahtera (PKS), Partai Amanat Nasional (PAN), Partai Demokrat, dan Kelompok DPD",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Sebutkan Ketetapan Majelis Permusyawaratan Rakyat Republik Indonesia Nomor VI/MPR/2000!",
                "jawaban" => "Pemisahan Tentara Nasional Indonesia dan Kepolisian Negara Republik Indonesia.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Jelaskan tentang Hak Angket?",
                "jawaban" => "Hak angket adalah hak Dewan Perwakilan Rakyat untuk melakukan penyelidikan terhadap pelaksanaan suatu undang-undang/kebijakan pemerintah yang berkaitan dengan hal penting, strategis, dan berdampak luas pada kehidupan bermasyarakat, berbangsa, dan bernegara yang diduga bertentangan dengan peraturan perundang-undangan.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Pemerintah menetapkan Hari Lahir Pancasila Setiap tanggal 1 Juni. Dasar hukum penetapan hari kelahiran Pancasila 1 Juni adalah?",
                "jawaban" => "Keputusan Presiden Nomor 24 Tahun 2016.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 23 ayat (3) adalah?",
                "jawaban" => "Apabila Dewan Perwakilan Rakyat tidak menyetujui rancangan anggaran pendapatan dan belanja negara yang diusulkan oleh Presiden, Pemerintah menjalankan Anggaran Pendapatan dan Belanja Negara tahun yang lalu.",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Dalam hal tidak ada pasangan calon Presiden dan Wakil Presiden terpilih, dua pasangan calon yang memperoleh suara terbanyak pertama dan kedua dalam pemilihan umum dipilih oleh rakyat secara langsung dan pasangan yang memperoleh suara rakyat terbanyak dilantik sebagai Presiden dan Wakil Presiden. Ketentuan tersebut merupakan rumusan Pasal 6A ayat (4) yang ditetapkan dalam Sidang Majelis Permusyawaratan Rakyat Tahun berapa?",
                "jawaban" => "2002",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Salah satu nama Bandar Udara di Indonesia menggunakan nama pahlawan nasional yaitu Radin Inten II, yang merupakan tokoh masyarakat berasal dari Provinsi?",
                "jawaban" => "Lampung",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Menurut Undang-Undang Nomor 18 Tahun 2011 jumlah Anggota Komisi Yudisial adalah?",
                "jawaban" => "7 (tujuh) orang.",
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
                "jawaban" => "Keputusan Presiden Nomor 24 Tahun 2016",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Kota yang menjadi Ibu Kota Provinsi Papua Barat adalah Manokwari, sedangkan Ibu Kota Provinsi Papua adalah?",
                "jawaban" => "Jayapura",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => "Perubahan kedua Undang Undang Dasar Negara Republik Indonesia Tahun 1945 ditetapkan pada Sidang Tahunan MPR Tahun 2000. Salah satu hasil perubahan kedua adalah ditetapkannya BAB IXA (sembilan A) Undang Undang Dasar Negara Republik Indonesia Tahun 1945 yaitu tentang?",
                "jawaban" => "Wilayah Negara",
                'wilayah_id' => 1
            ], [
                "pertanyaan" => '“Majelis Permusyawaratan Rakyat wajib menyelenggarakan sidang untuk memutuskan usul Dewan Perwakilan Rakyat tersebut paling lambat tiga puluh hari sejak Majelis Permusyawaratan Rakyat menerima usul tersebut”. Pada tahun keberapa ketentuan tersebut terdapat dalam Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 rumusan Pasal 7B ayat (6) yang ditetapkan pada sidang paripurna Majelis Permusyawaratan Rakyat?',
                "jawaban" => "Tahun 2001",
                'wilayah_id' => 1
            ]
        ]);
    }
}



