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
                'name' => 'SMAN 3 KOTA BOGOR',
                'run' => 1,
            ],
            [
                'name' => 'SMAN 11 KOTA BEKASI',
                'run' => 1,

            ],
            [
                'name' => 'SMAN 1 KARAWANG',
                'run' => 1,

            ],
            [
                'name' => 'SMAN 1 SUKABUMI',
                'run' => 2,

            ],
            [
                'name' => 'SMAN 5 BANDUNG',
                'run' => 2,

            ],
            [
                'name' => 'SMAN 2 KUNINGAN',
                'run' => 2,

            ],
            [
                'name' => 'SMAN TANJUNGSARI',
                'run' => 3,

            ],
            [
                'name' => 'SMAN 2 CIBINONG',
                'run' => 3,

            ],
            [
                'name' => 'SMAN 1 MAJALENGKA',
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
            'Sulawesi Utara',
        ];

        foreach ($wilayahs as $role) {
            Wilayah::create([
                'nama_wilayah' => $role,
            ]);
        }

        Pernyataan::insert([
            [
                "pernyataan" => "Pemberian makan siang dan susu gratis ke para pelajar dapat menangani masalah stunting dan meningkatkan kualitas sumber daya manusia Indonesia.",
                "run" => 1
            ], [
                "pernyataan" => "Makan siang gratis untuk pelajar akan mengakibatkan produksi impor bahan pangan Indonesia jika tidak menyerap pangan dari petani lokal.",
                "run" => 1
            ], [
                "pernyataan" => "Pemberian kewarganegaraan kepada pemain sepak bola atau atlet dengan harapan dapat mengangkat prestasi Tim Nasional Indonesia di kancah Internasional dan meningkatkan prestasi sepak bola Indonesia.",
                "run" => 1
            ], [
                "pernyataan" => "Wewenang Dewan Perwakilan Daerah perlu setara dengan wewenang Dewan Perwakilan Rakyat.",
                "run" => 2
            ], [
                "pernyataan" => "Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 perlu disempurnakan kembali.",
                "run" => 2
            ], [
                "pernyataan" => "Indonesia Yang Mandiri sebagaimana diamanatkan Ketetapan MPR RI Nomor VII/MPR/2001 tentang visi Indonesia belum sesuai harapan.",
                "run" => 2
            ], [
                "pernyataan" => "Masyarakat diberikan kebebasan dalam memelihara dan mengembangkan nilai-nilai budaya daerah.",
                "run" => 3
            ], [
                "pernyataan" => "Presiden dan Wakil Presiden memegang jabatan selama lima tahun, dan sesudahnya dapat dipilih kembali dalam jabatan yang sama, hanya untuk satu kali masa jabatan.",
                "run" => 3
            ], [
                "pernyataan" => "Ujian Nasional (UN) menjadi suatu standar evaluasi yang berlaku secara nasional dan tolak ukur untuk mengukur sejauh mana capaian pembelajaran siswa.",
                "run" => 3
            ], [
                "pernyataan" => "Putusan Mahkamah Konstitusi bersifat final.",
                "run" => 4
            ], [
                "pernyataan" => "Penambahan jumlah kementerian (kabinet gemuk) pada kabinet Merah Putih mengakibatkan bertambahnya beban anggaran untuk negara.",
                "run" => 4
            ], [
                "pernyataan" => "Pemindahan ibu kota negara dari Jakarta ke Ibu Kota Nusantara (IKN).",
                "run" => 4
            ],

        ]);
        Pointer::insert([


            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Kebijakan ini sejalan dengan Undang-Undang Nomor 17 Tahun 2007 tentang Rencana Pembangunan Jangka Panjang Nasional (RPJPN), yang menekankan peningkatan kualitas sumber daya manusia sebagai prioritas pembangunan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Peraturan Presiden No. 72 Tahun 2021 tentang Percepatan Penurunan Stunting mendukung program gizi yang langsung menyasar anak-anak untuk menurunkan prevalensi stunting di Indonesia.',
                'sisi' => 'pro'
            ],
            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Sesuai Undang-Undang No. 35 Tahun 2014 tentang Perlindungan Anak, pemberian makanan bergizi mendukung hak anak untuk memperoleh hidup sehat dan tumbuh kembang yang optimal.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Undang-Undang No. 20 Tahun 2003 tentang Sistem Pendidikan Nasional menyebutkan bahwa layanan pendidikan harus mencakup aspek pendukung seperti kesehatan untuk menciptakan lingkungan belajar yang optimal.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Kebijakan ini membantu pemerintah memenuhi amanat Undang-Undang No. 36 Tahun 2009 tentang Kesehatan, yang menegaskan pentingnya pelayanan kesehatan masyarakat, termasuk pemenuhan gizi anak sekolah.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Memberikan asupan nutrisi tambahan yang berkualitas, seperti makan siang dan susu, dapat membantu mencegah dan menangani stunting di kalangan pelajar yang berasal dari keluarga kurang mampu.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Nutrisi yang baik di masa pertumbuhan mendukung perkembangan fisik dan kognitif.',
                'sisi' => 'pro'
            ],

            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Anak-anak yang mendapatkan nutrisi cukup lebih fokus dalam belajar dan cenderung memiliki performa akademik yang lebih baik.',
                'sisi' => 'pro'
            ],

            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Program ini membantu menjangkau anak-anak dari daerah terpencil yang mungkin tidak memiliki akses ke makanan bergizi secara rutin.',
                'sisi' => 'pro'
            ],

            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Generasi muda yang sehat dan cerdas berkontribusi pada peningkatan kualitas sumber daya manusia (SDM), yang merupakan modal penting untuk kemajuan bangsa.',
                'sisi' => 'pro'
            ],

            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Program ini dapat menjadi sarana edukasi bagi pelajar dan keluarga tentang pentingnya makanan bergizi untuk kesehatan dan perkembangan anak.',
                'sisi' => 'pro'
            ],


            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Pelaksanaan program harus merujuk pada Undang-Undang No. 17 Tahun 2003 tentang Keuangan Negara, yang mengatur penggunaan anggaran negara secara efisien dan transparan. Program ini berpotensi membebani APBN atau APBD, terutama jika tidak diimbangi dengan peningkatan pendapatan daerah.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Undang-Undang No. 31 Tahun 1999 tentang Pemberantasan Tindak Pidana Korupsi mengatur pengelolaan anggaran publik. Pelaksanaan program makan gratis harus diawasi secara ketat untuk menghindari korupsi atau inefisiensi dalam distribusi.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 1,
                'penjelasan' => 'Undang-Undang No. 23 Tahun 2014 tentang Pemerintahan Daerah memberikan kewenangan kepada daerah dalam penyelenggaraan pendidikan. Ketimpangan kapasitas daerah dapat menghambat pemerataan pelaksanaan program ini.',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Program ini hanya menyasar gejala stunting, sementara Undang-Undang No. 13 Tahun 2011 tentang Penanganan Fakir Miskin menegaskan pentingnya program yang menyelesaikan akar kemiskinan sebagai penyebab utama stunting.',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Jika tidak melibatkan produk lokal, program ini berpotensi melanggar prinsip kemandirian sebagaimana diatur dalam Peraturan Presiden No. 59 Tahun 2017 tentang Pelaksanaan Tujuan Pembangunan Berkelanjutan (SDGs).',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Memberikan makan siang dan susu gratis untuk jutaan pelajar di seluruh Indonesia membutuhkan anggaran besar yang mungkin sulit terpenuhi secara berkelanjutan.',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Anak-anak atau keluarga dapat bergantung pada program ini tanpa mencari solusi mandiri untuk mencukupi kebutuhan gizi mereka.',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Distribusi makanan dan susu berkualitas ke daerah-daerah terpencil dapat menjadi tantangan besar, terutama terkait infrastruktur dan penyimpanan makanan.',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Risiko korupsi atau inefisiensi dalam pelaksanaan program dapat mengurangi efektivitasnya.',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Penyediaan susu dalam jumlah besar berpotensi meningkatkan jejak karbon karena produksi susu, termasuk pengolahan dan transportasi, memengaruhi lingkungan.',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 1,
                'penjelasan' => 'Program ini hanya menangani dampak stunting, bukan akar masalah seperti kemiskinan, ketimpangan akses kesehatan, dan pendidikan gizi bagi keluarga',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 2,
                'penjelasan' => 'Mengimpor bahan pangan dapat membantu memastikan kelancaran pelaksanaan program makan siang gratis, terutama jika hasil pertanian lokal tidak mencukupi. Hal ini sesuai dengan Undang-Undang No. 7 Tahun 2014 tentang Perdagangan, yang mengatur impor untuk menjaga stabilitas pasokan barang dalam negeri.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Dalam kondisi gagal panen atau bencana alam, impor bahan pangan dapat mendukung Peraturan Presiden No. 71 Tahun 2015 tentang Penetapan dan Penyimpanan Barang Kebutuhan Pokok, yang menekankan pentingnya menjaga kebutuhan dasar masyarakat, termasuk pangan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Jika bahan pangan lokal belum memenuhi standar gizi atau kualitas tertentu, impor bahan pangan berkualitas dapat membantu pemerintah memenuhi Undang-Undang No. 36 Tahun 2009 tentang Kesehatan, yang mewajibkan pemenuhan standar kesehatan dan gizi masyarakat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Impor bahan pangan memungkinkan pemerintah memenuhi kebutuhan program makan siang gratis, terutama jika hasil produksi lokal tidak mencukupi.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Ketergantungan pada produksi lokal dapat menyebabkan gangguan jika terjadi gagal panen atau bencana alam, sehingga impor menjadi solusi untuk menjaga kontinuitas program.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Jika hasil panen lokal belum memenuhi standar gizi atau kualitas tertentu, bahan pangan impor dapat memastikan asupan gizi yang lebih baik bagi pelajar.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Bahan pangan impor dapat melengkapi keanekaragaman menu makanan yang mungkin sulit terpenuhi dari produksi lokal saja.',
                'sisi' => 'pro'

            ],


            [
                'pernyataan_id' => 2,
                'penjelasan' => 'Ketergantungan pada impor bahan pangan bertentangan dengan Undang-Undang No. 18 Tahun 2012 tentang Pangan, yang mengamanatkan kemandirian dan ketahanan pangan berbasis produksi lokal.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 2,
                'penjelasan' => 'Jika impor tidak dikelola dengan baik, petani lokal dapat dirugikan karena produk mereka tidak terserap. Hal ini berpotensi melanggar Undang-Undang No. 19 Tahun 2013 tentang Perlindungan dan Pemberdayaan Petani, yang bertujuan melindungi hak-hak petani dan meningkatkan daya saing hasil pertanian dalam negeri.',
                'sisi' => 'kontra'
            ],

            [
                'pernyataan_id' => 2,
                'penjelasan' => 'Ketergantungan pada impor dapat melemahkan ekonomi nasional, bertentangan dengan semangat Peraturan Pemerintah No. 17 Tahun 2015 tentang Ketahanan Pangan dan Gizi, yang mendorong pemanfaatan sumber daya lokal secara optimal.',
                'sisi' => 'kontra'
            ],

            [
                'pernyataan_id' => 2,
                'penjelasan' => 'Impor dapat mempengaruhi stabilitas harga pangan dalam negeri, merugikan petani lokal dan bertentangan dengan Peraturan Presiden No. 66 Tahun 2021 tentang Badan Pangan Nasional, yang bertugas mengendalikan harga pangan domestik.',
                'sisi' => 'kontra'
            ],

            [
                'pernyataan_id' => 2,
                'penjelasan' => 'Peluang Korupsi dalam Proses Impor.',
                'sisi' => 'kontra'
            ],

            [
                'pernyataan_id' => 2,
                'penjelasan' => 'Proses impor yang tidak transparan dapat membuka peluang penyimpangan anggaran, melanggar prinsip tata kelola keuangan negara sesuai Undang-Undang No. 17 Tahun 2003 tentang Keuangan Negara dan Undang-Undang No. 31 Tahun 1999 tentang Pemberantasan Tindak Pidana Korupsi.',
                'sisi' => 'kontra'
            ],

            [
                'pernyataan_id' => 2,
                'penjelasan' => 'Impor bahan pangan tanpa menyerap hasil pertanian lokal dapat menyebabkan surplus produk di pasar lokal, menekan harga, dan merugikan petani.',
                'sisi' => 'kontra'
            ],

            [
                'pernyataan_id' => 2,
                'penjelasan' => 'Ketergantungan pada impor bertentangan dengan prinsip ketahanan pangan nasional, yang mengutamakan penggunaan sumber daya dalam negeri.',
                'sisi' => 'kontra'
            ],

            [
                'pernyataan_id' => 2,
                'penjelasan' => 'Biaya impor pangan sering kali lebih tinggi dibandingkan memanfaatkan produksi lokal, terutama dengan fluktuasi harga di pasar internasional.',
                'sisi' => 'kontra'
            ],

            [
                'pernyataan_id' => 2,
                'penjelasan' => 'Ketergantungan pada bahan pangan impor dapat melemahkan posisi tawar ekonomi Indonesia dalam jangka panjang.',
                'sisi' => 'kontra'
            ],

            [
                'pernyataan_id' => 2,
                'penjelasan' => 'Impor membutuhkan transportasi dan penyimpanan yang kompleks, yang bisa terganggu oleh faktor eksternal seperti perang dagang atau pandemi.',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 3,
                'penjelasan' => 'Pasal 20 Undang-Undang Nomor 12 Tahun 2006 tentang Kewarganegaraan Republik Indonesia mengatur bahwa seseorang dapat diberikan kewarganegaraan Indonesia jika memberikan manfaat luar biasa bagi negara, termasuk dalam bidang olahraga.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Pemain naturalisasi yang berkualitas dapat membantu Indonesia lebih kompetitif di ajang internasional, sesuai dengan visi pemerintah untuk mengembangkan prestasi olahraga, sebagaimana tercantum dalam Undang-Undang Nomor 3 Tahun 2005 tentang Sistem Keolahragaan Nasional.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Pemain atau atlet naturalisasi sering kali memiliki pengalaman dan keterampilan lebih baik, sehingga dapat langsung memperkuat performa Tim Nasional.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Prestasi yang dihasilkan oleh atlet naturalisasi dapat membawa nama Indonesia lebih dikenal di dunia olahraga internasional.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Prestasi olahraga dapat memperkuat posisi Indonesia di dunia internasional, mendukung kebijakan Peraturan Presiden Nomor 86 Tahun 2021 tentang Desain Besar Olahraga Nasional (DBON) yang menargetkan pengembangan atlet berprestasi dunia.',
                'sisi' => 'pro'
            ],
            [
                'pernyataan_id' => 3,
                'penjelasan' => 'Kehadiran pemain berkualitas tinggi dapat menjadi inspirasi dan motivasi bagi atlet lokal untuk meningkatkan kemampuan mereka.',
                'sisi' => 'pro'
            ],
            [
                'pernyataan_id' => 3,
                'penjelasan' => 'Dengan atlet berbakat, Indonesia dapat bersaing lebih kompetitif di turnamen regional maupun global.',
                'sisi' => 'pro'
            ],
            [
                'pernyataan_id' => 3,
                'penjelasan' => 'Naturalisasi memberikan solusi cepat untuk memperkuat tim nasional tanpa perlu menunggu hasil jangka panjang dari pembinaan atlet lokal, yang membutuhkan waktu lebih lama.',
                'sisi' => 'pro'
            ],


            [
                'pernyataan_id' => 3,
                'penjelasan' => 'Kebijakan ini dapat menghambat pengembangan atlet lokal karena minimnya kesempatan bertanding di tingkat internasional.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Pasal 1 Undang-Undang Nomor 12 Tahun 2006 mengutamakan kewarganegaraan berdasarkan hubungan hukum dan rasa kebangsaan. Naturalisasi yang berlebihan dapat dianggap mereduksi esensi kebanggaan nasional.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Prestasi yang dihasilkan pemain naturalisasi sering kali bersifat sementara, yang dapat bertentangan dengan Pasal 67 Undang-Undang Nomor 3 Tahun 2005, yang menekankan pembinaan berkelanjutan terhadap atlet lokal.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Dominasi pemain naturalisasi dapat mengurangi kesempatan atlet lokal untuk berkembang, bertentangan dengan Pasal 5 Undang-Undang Nomor 3 Tahun 2005, yang menekankan pembinaan anak bangsa sebagai prioritas.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 3,
                'penjelasan' => 'Proses naturalisasi membutuhkan biaya dan komitmen tinggi dari pemerintah atau organisasi olahraga, yang harus dipertanggungjawabkan secara transparan sesuai Undang-Undang Nomor 17 Tahun 2003 tentang Keuangan Negara.',
                'sisi' => 'kontra'
            ],
            [
                'pernyataan_id' => 3,
                'penjelasan' => 'Jika tidak dikelola dengan baik, proses naturalisasi dapat memicu ketidakpuasan publik, terutama jika bertentangan dengan asas keadilan sosial sebagaimana diatur dalam Pasal 27 UUD 1945.',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 3,
                'penjelasan' => 'Mengandalkan atlet asing dapat menurunkan rasa nasionalisme dan kebanggaan masyarakat terhadap keberhasilan yang murni dihasilkan oleh anak bangsa.',
                'sisi' => 'kontra'
            ],
            [
                'pernyataan_id' => 3,
                'penjelasan' => 'Prestasi instan dari pemain naturalisasi bersifat sementara jika tidak diiringi dengan pengembangan ekosistem olahraga dan pembinaan atlet lokal.',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 3,
                'penjelasan' => 'Kehadiran atlet naturalisasi dapat memicu kritik atau resistensi dari masyarakat dan atlet lokal yang merasa terpinggirkan.',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 3,
                'penjelasan' => 'Proses naturalisasi dan kompensasi atlet asing membutuhkan biaya tinggi, sementara manfaatnya belum tentu dirasakan secara berkelanjutan.',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 4,
                'penjelasan' => 'DPD mewakili kepentingan daerah dan berfungsi sebagai penghubung antara pemerintah pusat dan daerah. Jika wewenangnya setara dengan DPR, DPD dapat lebih efektif dalam memperjuangkan kepentingan daerah.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Dengan memberikan wewenang yang setara, proses desentralisasi akan lebih efektif, karena daerah akan memiliki suara yang lebih kuat dalam pengambilan keputusan yang mempengaruhi kebijakan nasional.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Wewenang yang setara antara DPD dan DPR dapat meningkatkan akuntabilitas kedua lembaga. DPD dapat lebih aktif dalam mengawasi kebijakan yang berdampak langsung pada daerah.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Kesejajaran wewenang dapat mendorong pembangunan yang lebih berkelanjutan, karena DPD dapat memberikan masukan yang relevan dan kontekstual mengenai kebijakan yang akan diambil oleh pemerintah pusat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Dasar Hukum UUD 1945 Pasal 22D: Pasal ini menyebutkan bahwa DPD memiliki fungsi legislasi, anggaran, dan pengawasan. Namun, dalam praktiknya, wewenang DPD masih terbatas dibandingkan dengan DPR. Penegasan terhadap kesetaraan perlu diatur lebih lanjut.',
                'sisi' => 'pro'
            ],
            [
                'pernyataan_id' => 4,
                'penjelasan' => 'UUD 1945 Pasal 18: Pasal ini menegaskan pentingnya pengaturan daerah. Wewenang yang setara akan memperkuat posisi daerah dalam sistem pemerintahan, sesuai dengan prinsip otonomi daerah.',
                'sisi' => 'pro'
            ],
            [
                'pernyataan_id' => 4,
                'penjelasan' => 'UU No. 17 Tahun 2014 tentang MPR, DPR, DPD, dan DPRD: undang-undang ini mengatur tentang tugas dan wewenang DPD. Mendorong agar wewenangnya disetarakan dengan DPR untuk memastikan representasi yang lebih baik bagi daerah.',
                'sisi' => 'pro'
            ],
            [
                'pernyataan_id' => 4,
                'penjelasan' => 'Menurut prinsip-prinsip good governance, kesejajaran wewenang dapat meningkatkan partisipasi, transparansi, dan akuntabilitas dalam pengambilan keputusan, yang menjadi dasar bagi pembangunan yang adil dan merata.',
                'sisi' => 'pro'
            ],


            [
                'pernyataan_id' => 4,
                'penjelasan' => 'Pasal 22D Undang-Undang Dasar Negara Republik Indonesia tahun 1945 memberikan peran khusus kepada DPD untuk memberikan pertimbangan dan usulan terkait RUU yang berhubungan dengan daerah, seperti otonomi dan keuangan daerah. Sementara itu, DPR menjalankan fungsi legislatif, pengawasan, dan penganggaran secara umum. Menyamakan wewenang kedua lembaga bisa melanggar prinsip dasar pembagian tugas dalam sistem bikameral terbatas.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Dasar Hukum: Undang-Undang Nomor 17 Tahun 2014 tentang MPR, DPR, DPD, dan DPRD (UU MD3) menjelaskan bahwa DPD hanya berperan dalam isu-isu terkait daerah dan tidak memiliki hak mengesahkan RUU.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'Jika DPD memiliki kewenangan setara dengan DPR dalam pembuatan undang-undang, proses legislasi bisa menjadi lebih lambat dan rumit karena melibatkan dua lembaga dengan hak yang sama. Hal ini dapat memperpanjang perdebatan politik dan menghambat efektivitas penyusunan kebijakan nasional.',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'DPD mewakili kepentingan daerah, bukan partai politik, sehingga peran dan fokusnya berbeda dengan DPR. Menyamakan wewenang kedua lembaga berpotensi menimbulkan konflik peran karena DPR bekerja melalui fraksi-fraksi partai politik, sedangkan DPD tidak berafiliasi langsung dengan partai.',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 4,
                'penjelasan' => 'DPR memiliki infrastruktur politik dan kelembagaan yang lebih kuat dalam menjalankan fungsi pengawasan dan penganggaran. Menyamakan wewenang DPD dengan DPR dapat memperberat beban DPD tanpa adanya peningkatan kapasitas yang memadai. Hal ini justru bisa menurunkan efektivitas kedua lembaga dalam menjalankan tugasnya.',
                'sisi' => 'kontra'

            ],
            [
                'pernyataan_id' => 4,
                'penjelasan' => 'Berpotensi Menimbulkan Konflik Kepentingan antara Pemerintah Pusat dan Daerah DPD yang berperan besar dalam legislasi nasional bisa lebih condong kepada kepentingan daerah daripada kepentingan nasional, sehingga menimbulkan ketidakseimbangan dalam kebijakan negara. Hal ini bisa mengganggu koordinasi antara pemerintah pusat dan daerah.',
                'sisi' => 'kontra'

            ],

            [
                'pernyataan_id' => 4,
                'penjelasan' => 'Dasar Hukum: Pembagian wewenang antara pusat dan daerah sudah diatur dalam UU No. 23 Tahun 2014 tentang Pemerintahan Daerah, dan menambah peran DPD bisa memperumit hubungan antara kedua level pemerintahan.',
                'sisi' => 'kontra'

            ],


            [
                'pernyataan_id' => 5,
                'penjelasan' => 'Pasal 37 Undang-Undang Dasar Negara Republik Indonesia tahun 1945 tentang Perubahan UUD: "Usul perubahan pasal-pasal Undang-Undang Dasar dapat diagendakan dalam Sidang MPR."',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Pasal ini menunjukkan bahwa Undang-Undang Dasar Negara Republik Indonesia tahun 1945 secara hukum membuka ruang untuk penyempurnaan. Perubahan dibutuhkan ketika norma hukum yang ada dianggap tidak memadai atau kurang relevan dengan kebutuhan bangsa.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Perubahan konstitusi dapat dilakukan untuk menjaga harmoni antara aturan-aturan hukum dan realitas sosial. UU ini juga menekankan pentingnya evaluasi dan penyesuaian terhadap peraturan yang berlaku agar efektif dalam penerapannya.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Menjawab Tantangan Demokrasi dan Globalisasi: Dalam era modern, isu-isu seperti perlindungan data pribadi, digitalisasi, perubahan iklim, dan kesetaraan gender membutuhkan pengaturan yang lebih jelas di dalam konstitusi.',
                'sisi' => 'pro'

            ],
            [
                'pernyataan_id' => 5,
                'penjelasan' => 'Selain itu, penyempurnaan diperlukan untuk memperbaiki ambiguitas atau kekosongan hukum yang dapat mengganggu stabilitas negara dan tatanan hukum.',
                'sisi' => 'pro'

            ],
            [
                'pernyataan_id' => 5,
                'penjelasan' => 'Penguatan Sistem Checks and Balances: Beberapa pihak berpendapat bahwa sistem ketatanegaraan perlu disempurnakan agar distribusi kekuasaan lebih seimbang. Misalnya, kewenangan presiden, DPR, dan lembaga negara lainnya dapat disesuaikan agar lebih transparan dan akuntabel.',
                'sisi' => 'pro'

            ],
            [
                'pernyataan_id' => 5,
                'penjelasan' => 'Perubahan ini memperbaiki sistem pemerintahan dan memperkuat prinsip demokrasi, seperti membatasi masa jabatan presiden, memperluas otonomi daerah, dan memastikan pemilihan umum yang lebih partisipatif. Amandemen juga menghasilkan Mahkamah Konstitusi, yang berfungsi untuk menjaga konstitusionalitas undang-undang, serta memperbaiki sistem checks and balances.',
                'sisi' => 'pro'

            ],


            [
                'pernyataan_id' => 5,
                'penjelasan' => 'Mengubah Undang-Undang Dasar Negara Republik Indonesia tahun 1945 secara berlebihan dapat mengganggu kestabilan hukum dan memperumit sistem perundang-undangan yang sudah ada, yang dapat berpengaruh negatif terhadap kepastian hukum.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Undang-Undang Dasar Negara Republik Indonesia tahun 1945 sudah mencerminkan nilai-nilai Pancasila sebagai dasar negara. Perubahan dapat berisiko menggeser nilai-nilai tersebut, yang merupakan pondasi bagi kehidupan berbangsa dan bernegara.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 5,
                'penjelasan' => 'Undang-Undang Dasar Negara Republik Indonesia tahun 1945 adalah hasil perjuangan dan konsensus para pendiri bangsa. Mempertahankannya berarti menghargai sejarah dan identitas nasional yang telah dibangun sejak awal kemerdekaan.',
                'sisi' => 'kontra'
            ],
            [
                'pernyataan_id' => 5,
                'penjelasan' => 'Banyak ketentuan dalam Undang-Undang Dasar Negara Republik Indonesia tahun 1945 yang sudah cukup fleksibel untuk diimplementasikan tanpa perlu perubahan formal. Perubahan yang tidak perlu dapat menciptakan ketidakpastian.',
                'sisi' => 'kontra'
            ],

            [
                'pernyataan_id' => 5,
                'penjelasan' => 'Undang-Undang Dasar Negara Republik Indonesia tahun 1945 telah berfungsi dengan baik dalam kerangka demokrasi Indonesia, termasuk dalam menjamin hak asasi manusia dan kebebasan berpendapat.',
                'sisi' => 'kontra'
            ],

            [
                'pernyataan_id' => 5,
                'penjelasan' => 'Dasar Hukum Undang-Undang Dasar Negara Republik Indonesia tahun 1945 Pasal 1 Ayat (2): Menyatakan bahwa "Kedaulatan berada di tangan rakyat". Ini menunjukkan bahwa perubahan konstitusi harus melibatkan partisipasi rakyat.',
                'sisi' => 'kontra'
            ],

            [
                'pernyataan_id' => 5,
                'penjelasan' => 'UUD 1945 Pasal 37: Mengatur tentang cara perubahan Undang-Undang Dasar Negara Republik Indonesia tahun 1945. Proses yang ketat ini menunjukkan bahwa perubahan tidak bisa dilakukan sembarangan dan memerlukan pertimbangan yang mendalam.',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 6,
                'penjelasan' => 'Praktek pertumbuhan ekonomi bertumpu pada perusahaan-perusahaan besar yang mengedepankan profit. Dampak yang ditimbulkan saat ini banyak koperasi yang tidak berjalan sebagaimana fungsinya yaitu sebagai soko guru perekonomian kerakyatan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Banyak proses pembangunan infrastruktur yang tergantung dari sumber dana asing.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Hutang dalam setiap APBN di awal tahun mengalami peningkatan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Mulai tergerusnya nilai-nilai budaya akibat globalisasi.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Tidak kuatnya pemerintah dalam menjaga akibat negatif dari pengaruh globalisasi.',
                'sisi' => 'pro'
            ],


            [
                'pernyataan_id' => 6,
                'penjelasan' => 'Terbentuknya badan ekonomi kreatif sebagai salah satu tulang punggung ekonomi kerakyatan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Saat ini negara sudah memiliki kemampuan dan ketangguhan dalam menyelenggarakan kehidupan berbangsa dan bernegara di tengah-tengah pergaulan antar bangsa agar sejajar dengan bangsa-bangsa lain (antara lain adanya UU RPJMN).',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Indonesia telah menerapkan politik luar negeri yang berkepribadian dan bebas aktif dalam pergaulan dengan bangsa-bangsa lain.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => 'Pembangunan sudah dilakukan di seluruh Indonesia dan tidak berpusat di Pulau Jawa saja. Penggunaan hutang luar negeri dipergunakan untuk membiayai pembangunan yang hasilnya digunakan untuk mencicil hutang luar negeri. Hutang luar negeri juga dilakukan oleh negara-negara maju contoh: Amerika Serikat.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 6,
                'penjelasan' => "Memiliki kepribadian bangsa dan identitas budaya Indonesia yang berakar dari potensi budaya daerah contohnya dalam setiap acara resmi kenegaraan baik di dalam mau pun di luar negeri menggunakan pengantar bahasa Indonesia.",
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 7,
                'penjelasan' => 'Kebebasan ini memungkinkan masyarakat untuk mempertahankan identitas dan warisan budaya mereka, yang merupakan bagian integral dari jati diri suatu daerah dan bangsa.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Setiap daerah di Indonesia memiliki kekayaan budaya yang unik. Mengembangkan nilai-nilai budaya daerah berkontribusi pada keragaman budaya nasional, yang memperkaya peradaban dan meningkatkan toleransi antar budaya.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Memberikan kebebasan kepada masyarakat untuk mengembangkan budaya mereka mendorong partisipasi aktif dalam kehidupan sosial, yang dapat meningkatkan kohesi sosial dan solidaritas.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Budaya daerah yang dikelola dan dikembangkan dengan baik dapat menjadi daya tarik pariwisata, mendukung ekonomi lokal, dan menciptakan lapangan kerja.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 Pasal 32: Pasal ini menyatakan bahwa negara mengembangkan kebudayaan nasional Indonesia dengan menghormati dan memperhatikan kebudayaan daerah. Ini menunjukkan pengakuan terhadap hak masyarakat untuk memelihara budaya mereka.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Undang-undang No. 5 Tahun 2017 tentang Pemajuan Kebudayaan: UU ini mengatur tentang perlindungan dan pemajuan kebudayaan, termasuk hak masyarakat untuk melestarikan dan mengembangkan nilai-nilai budaya daerah. Ini memberikan kerangka hukum yang jelas untuk mendukung pengembangan budaya.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Undang-undang No. 11 Tahun 2010 tentang Cagar Budaya: Undang-undang ini melindungi warisan budaya, termasuk cagar budaya yang ada di berbagai daerah. Ini menunjukkan komitmen untuk melestarikan dan mengembangkan nilai-nilai budaya sebagai bagian dari identitas bangsa.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Konvensi UNESCO: Indonesia adalah anggota UNESCO dan telah meratifikasi berbagai konvensi yang mendukung pelestarian warisan budaya, seperti Konvensi tentang Perlindungan Warisan Budaya Takbenda. Ini menegaskan komitmen internasional untuk menghormati dan melindungi budaya daerah.',
                'sisi' => 'pro'
            ],


            [
                'pernyataan_id' => 7,
                'penjelasan' => 'Tidak semua nilai budaya daerah sesuai dengan prinsip-prinsip nasional, seperti demokrasi, hak asasi manusia, atau kesetaraan gender. Kebebasan penuh dalam mengembangkan budaya lokal bisa memicu praktik-praktik yang bertentangan dengan hukum nasional.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Pemberian kebebasan tanpa batas dalam memajukan budaya daerah dapat memicu sikap eksklusif dan primordialisme, di mana kelompok masyarakat lebih mengutamakan identitas lokal dibandingkan rasa persatuan sebagai bangsa. Ini berpotensi mengurangi solidaritas dan memicu konflik antar-daerah.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Dasar Hukum: Pasal 32 Ayat 1 Undang-Undang Dasar Negara Republik Indonesia tahun 1945 menekankan pentingnya kebudayaan nasional sebagai identitas bersama seluruh bangsa Indonesia. Kebebasan budaya harus tetap berada dalam kerangka persatuan nasional.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Beberapa tradisi daerah dapat memperkuat ketidaksetaraan, seperti diskriminasi berbasis gender atau kasta. Dalam beberapa komunitas adat, perempuan masih dibatasi hak-haknya atas nama tradisi, yang bertentangan dengan UU No. 39 Tahun 1999 tentang Hak Asasi Manusia.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 7,
                'penjelasan' => 'Kebebasan mengembangkan budaya lokal yang tidak disertai dengan adaptasi modern bisa menghambat pembangunan dan perkembangan ekonomi. Misalnya, penolakan terhadap teknologi atau inovasi dengan alasan melestarikan tradisi dapat membuat komunitas tertinggal secara ekonomi.',
                'sisi' => 'kontra'
            ],

            [
                'pernyataan_id' => 7,
                'penjelasan' => 'Kebebasan tanpa pengawasan bisa mendorong komersialisasi budaya daerah, di mana nilai-nilai budaya dimodifikasi demi keuntungan ekonomi tanpa menghormati makna aslinya. Hal ini dapat menghilangkan esensi budaya dan merusak identitas budaya lokal itu sendiri.',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 8,
                'penjelasan' => 'Pasal 7 Undang-Undang Dasar Negara Republik Indonesia tahun 1945, Presiden dan Wakil Presiden memegang jabatan selama lima tahun, dan sesudahnya dapat dipilih kembali dalam jabatan yang sama, hanya untuk satu kali masa jabatan. Ketentuan tersebut untuk menjaga agar presiden tidak memegang jabatan lebih dari 2 (dua) periode karena dianggap berdampak tidak baik dalam perkembangan demokrasi.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Ini bukti Indonesia menganut sistem presidensial yang salah satu syarat adanya pembatasan kekuasaan Presiden dan Wakil Presiden untuk masa jabatan yang pasti (fixed term).',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Ketentuan ini menekankan pentingnya etika di dalam kehidupan berbangsa dan bernegara sebagaimana diatur dalam Ketetapan MPR Nomor VI/MPR/2001 tentang Etika Kehidupan Berbangsa, yaitu mengenai pentingnya etika politik dan pemerintahan dimaksudkan agar terwujud pemerintahan yang bersih, efisien dan efektif yang salah satu wujudnya adalah pembatasan masa jabatan bagi pejabat publik.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Pembatasan jabatan agar tidak terjadi munculnya kekuasaan yang absolut dan berpotensi korupsi. Hal ini sesuai dengan pemikiran Lord Acton yang mengatakan Power tends to corrupt, and absolute power corrupts absolutely (kekuasaan itu cenderung korupsi, dan kekuasaan yang absolute (mutlak) itu pasti korupsi).',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Banyak negara yang mengatur masa jabatan presiden dan wakil presiden selama 2 (dua) periode kepemimpinan.',
                'sisi' => 'pro'
            ],


            [
                'pernyataan_id' => 8,
                'penjelasan' => 'Pasal 1 Ayat (2), Undang-Undang Dasar Negara Republik Indonesia tahun 1945 kedaulatan berada di tangan rakyat dan dilaksanakan menurut Undang-Undang Dasar.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Presiden dan wakil presiden adalah jabatan publik yang dipilih oleh rakyat. Seharusnya sepanjang dipilih oleh rakyat sehingga peraturan tidak harus membatasi masa jabatan tersebut. (Pasal 6A Undang-Undang Dasar Negara Republik Indonesia tahun 1945 Presiden dan Wakil Presiden dipilih dalam satu pasangan secara langsung oleh rakyat).',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Apabila dibatasi dikhawatirkan terjadinya pembangunan yang tidak berkesinambungan karena presiden dan wakil presiden memiliki prioritas yang berbeda.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Pembatasan masa jabatan presiden dapat menghambat seseorang yang memiliki sikap kenegarawanan untuk mengabdikan dan menggunakan kemampuannya dalam membangun negara.',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Hak dipilih dan memilih merupakan hak asasi manusia.',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 8,
                'penjelasan' => 'Sebagai jabatan publik hanya presiden dan wakil presiden saja yang dibatasi dalam Undang-Undang  Dasar sementara jabatan lain tidak dilakukan pembatasan.',
                'sisi' => 'kontra'

            ],


            [
                'pernyataan_id' => 9,
                'penjelasan' => 'Ujian Nasional diatur dalam Pasal 57 Ayat 1 Undang-Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional (Sisdiknas), yang menetapkan evaluasi sebagai alat untuk menilai pencapaian standar nasional pendidikan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'UN membantu mengevaluasi sejauh mana siswa telah mencapai standar kompetensi lulusan (SKL) yang ditetapkan dalam Permendikbud Nomor 23 Tahun 2016 tentang Standar Penilaian Pendidikan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Dengan UN, pemerintah dapat menerapkan evaluasi yang seragam di seluruh Indonesia, memastikan pengukuran capaian pembelajaran yang adil dan terstandarisasi di berbagai wilayah.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'UN menjadi instrumen pemerintah untuk memetakan mutu pendidikan nasional, sebagaimana diamanatkan dalam Peraturan Pemerintah Nomor 19 Tahun 2005 tentang Standar Nasional Pendidikan.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Adanya UN mendorong siswa, guru, dan sekolah untuk meningkatkan kualitas pembelajaran agar memenuhi standar kompetensi yang telah ditetapkan.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'UN memberikan standar evaluasi yang berlaku sama di seluruh Indonesia, memastikan kesetaraan dalam pengukuran capaian pembelajaran siswa dari berbagai daerah.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Pemerintah dapat memetakan kualitas pendidikan secara nasional berdasarkan hasil UN, membantu dalam menentukan kebijakan dan intervensi pendidikan di daerah yang membutuhkan perhatian lebih.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Adanya UN memotivasi siswa, guru, dan sekolah untuk lebih fokus mencapai standar kompetensi yang ditetapkan dalam kurikulum nasional.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'UN menjadi cara untuk mengukur efektivitas implementasi kurikulum di seluruh sekolah, sehingga dapat membantu pembaruan kurikulum yang lebih relevan.',
                'sisi' => 'pro'

            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Hasil UN dapat menjadi salah satu indikator keberhasilan kinerja sekolah dalam mendidik siswa dan mencapai standar pendidikan nasional.',
                'sisi' => 'pro'
            ],


            [
                'pernyataan_id' => 9,
                'penjelasan' => 'Pasal 12 Ayat 1 UU Sisdiknas menyatakan bahwa setiap peserta didik memiliki hak untuk memperoleh pendidikan sesuai potensi mereka. Namun, UN sering dianggap kurang fleksibel dalam mengakomodasi perbedaan kebutuhan dan kemampuan siswa.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'Tekanan untuk mencapai nilai tertentu dalam UN dapat bertentangan dengan tujuan pendidikan yang memprioritaskan pengembangan karakter, seperti yang diatur dalam Pasal 3 UU Sisdiknas.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 9,
                'penjelasan' => 'UN hanya mengevaluasi aspek akademik, kurang mencerminkan kompetensi holistik siswa sesuai dengan Permendikbud Nomor 23 Tahun 2016, yang juga menekankan pentingnya aspek sikap dan keterampilan.',
                'sisi' => 'kontra'
            ],
            [
                'pernyataan_id' => 9,
                'penjelasan' => 'Di daerah terpencil dengan akses pendidikan yang terbatas, siswa cenderung kesulitan mencapai standar UN yang seragam, melanggar prinsip pemerataan pendidikan sebagaimana diatur dalam Pasal 31 UUD 1945.',
                'sisi' => 'kontra'
            ],
            [
                'pernyataan_id' => 9,
                'penjelasan' => 'Dengan dihapusnya UN berdasarkan Surat Edaran Mendikbud Nomor 1 Tahun 2021, banyak pihak mempertanyakan relevansi sistem evaluasi berbasis UN yang cenderung tidak sesuai dengan pendekatan pembelajaran abad ke-21 yang lebih menekankan kompetensi kritis dan kreatif.',
                'sisi' => 'kontra'
            ],
            [
                'pernyataan_id' => 9,
                'penjelasan' => 'UN hanya mengukur kemampuan akademik tertentu, sementara aspek lain seperti keterampilan sosial, kreativitas, dan karakter siswa kurang terwakili.',
                'sisi' => 'kontra'
            ],
            [
                'pernyataan_id' => 9,
                'penjelasan' => 'Siswa sering kali merasa stres karena UN dianggap sebagai penentu utama kelulusan, meskipun kini tidak lagi menjadi satu-satunya kriteria kelulusan.',
                'sisi' => 'kontra'
            ],
            [
                'pernyataan_id' => 9,
                'penjelasan' => 'UN dianggap kurang fleksibel untuk mengakomodasi perbedaan latar belakang sosial, ekonomi, dan budaya siswa di berbagai wilayah Indonesia.',
                'sisi' => 'kontra'
            ],
            [
                'pernyataan_id' => 9,
                'penjelasan' => 'Ketimpangan kualitas pendidikan antara daerah perkotaan dan pedesaan membuat hasil UN cenderung tidak mencerminkan potensi siswa secara adil.',
                'sisi' => 'kontra'
            ],
            [
                'pernyataan_id' => 9,
                'penjelasan' => 'Sekolah dan siswa cenderung lebih fokus mengejar nilai UN daripada memahami konsep atau mengembangkan keterampilan pembelajaran yang berkelanjutan.',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 10,
                'penjelasan' => 'Kepastian Hukum putusan Mahkamah Konstitusi (MK) sebagai lembaga peradilan tertinggi dalam hal hukum konstitusi memberikan kepastian hukum. Dengan putusan yang bersifat final, masyarakat dan pihak terkait dapat menjalani kehidupan hukum yang jelas tanpa keraguan tentang keabsahan putusan tersebut.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Stabilitas Politik putusan MK yang final membantu menjaga stabilitas politik di negara. Ketika sengketa konstitusi atau hukum diselesaikan secara definitif, hal ini mengurangi potensi konflik dan ketidakpastian dalam sistem pemerintahan.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Mencegah Penundaan Keadilan dengan memberikan sifat final pada putusan, MK mencegah adanya penundaan keadilan yang bisa terjadi jika putusan masih bisa digugat atau diulang. Ini penting untuk menjamin hak-hak konstitusional masyarakat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Pengakuan Internasional banyak sistem hukum di negara lain mengakui finalitas keputusan lembaga peradilan konstitusi, sehingga mengedepankan prinsip bahwa lembaga tersebut merupakan penjaga konstitusi yang tidak dapat dipertanyakan kembali.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Pasal 24C ayat (1) menyatakan bahwa "Mahkamah Konstitusi berwenang untuk memutus perkara yang berkaitan dengan konstitusi." Dalam konteks ini, putusan MK bersifat final dan mengikat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Undang-Undang Nomor 24 Tahun 2003 tentang Mahkamah Konstitusi pada Pasal 47: Menegaskan bahwa putusan Mahkamah Konstitusi bersifat final, mengikat, dan tidak dapat diganggu gugat. Hal ini memberikan legitimasi hukum terhadap finalitas putusan yang diambil oleh MK.',
                'sisi' => 'pro'
            ],


            [
                'pernyataan_id' => 10,
                'penjelasan' => 'UUD 1945 sebagai hukum dasar, UUD 1945 menjadi landasan utama bagi seluruh peraturan perundang-undangan di Indonesia, termasuk putusan MK.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Undang-Undang Nomor 24 Tahun 2003 tentang Mahkamah Konstitusi undang-undang ini secara khusus mengatur tentang kewenangan, prosedur, dan efektivitas putusan MK.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Yurisprudensi putusan-putusan MK sebelumnya dapat dijadikan rujukan untuk menginterpretasikan putusan MK yang baru.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Perubahan konstitusi, jika terjadi perubahan terhadap UUD 1945, maka putusan MK yang bertentangan dengan amandemen UUD tersebut dapat menjadi tidak berlaku.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Putusan MK yang baru putusan MK yang lebih baru dapat mengubah atau membatalkan putusan MK sebelumnya, terutama jika terdapat perubahan dalam interpretasi hukum atau fakta-fakta yang relevan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Perubahan Undang-Undang menjadi dasar pertimbangan putusan MK dapat mempengaruhi keabsolutan putusan tersebut.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Putusan MK mengenai suatu perkara dapat berubah jika terdapat perubahan dalam interpretasi hukum yang relevan oleh Mahkamah Agung atau lembaga peradilan lainnya.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 10,
                'penjelasan' => 'Jika suatu putusan MK bertentangan dengan norma-norma hukum internasional yang mengikat, maka penerapannya dapat dibatasi atau dibatalkan.',
                'sisi' => 'kontra'
            ],


            [
                'pernyataan_id' => 11,
                'penjelasan' => 'Penambahan kementerian memungkinkan pemerintah menangani isu-isu khusus secara lebih terfokus dan efisien, seperti bidang teknologi, lingkungan, atau ekonomi digital.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Dengan adanya lebih banyak kementerian, tugas-tugas pemerintahan dapat dikelola lebih baik sehingga tidak terlalu membebani kementerian yang sudah ada.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Penambahan kementerian dapat meningkatkan keterwakilan berbagai daerah atau kelompok sosial dalam pemerintahan, sejalan dengan prinsip keadilan sosial.',
                'sisi' => 'pro'
            ],
            [
                'pernyataan_id' => 11,
                'penjelasan' => 'Dalam kondisi tertentu, kabinet besar dapat mengakomodasi kebutuhan khusus yang mendesak, seperti menangani dampak pandemi atau mempercepat pembangunan infrastruktur.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Berdasarkan Pasal 8 Undang-Undang Nomor 39 Tahun 2008 tentang Kementerian Negara, penambahan kementerian dapat meningkatkan fokus pada sektor-sektor tertentu yang membutuhkan perhatian lebih, sehingga membantu pemerintahan berjalan lebih efektif dan efisien dalam menghadapi tantangan spesifik.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Penambahan kementerian dapat membantu pemerintah dalam merespons isu-isu nasional dengan lebih baik, mendukung visi Peraturan Presiden Nomor 7 Tahun 2021 tentang Rencana Pembangunan Jangka Menengah Nasional (RPJMN) yang mengutamakan peningkatan pelayanan publik dan keberlanjutan pembangunan.',
                'sisi' => 'pro'
            ],

            [
                'pernyataan_id' => 11,
                'penjelasan' => 'Penambahan kementerian memungkinkan pengawasan terhadap program yang lebih terfokus dan lebih terkoordinasi, sesuai dengan prinsip Pasal 27 Undang-Undang Nomor 17 Tahun 2003 tentang Keuangan Negara, yang mewajibkan pengawasan yang efektif terhadap pengelolaan anggaran.',
                'sisi' => 'pro'
            ],


            [
                'pernyataan_id' => 11,
                'penjelasan' => 'Penambahan jumlah kementerian berarti biaya operasional, gaji, fasilitas, dan anggaran program kementerian juga bertambah. Hal ini dapat menambah beban pada APBN, termasuk anggaran yang harus disetujui oleh DPR.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Kabinet yang terlalu besar dapat menyebabkan tumpang tindih tugas antar kementerian, menghambat koordinasi, dan menurunkan efisiensi kerja.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Penambahan kementerian dapat dimanfaatkan untuk memberikan jabatan kepada partai koalisi atau individu tertentu, yang tidak selalu berdasarkan kompetensi, melainkan kompromi politik.',
                'sisi' => 'kontra'

            ],
            [
                'pernyataan_id' => 11,
                'penjelasan' => 'DPR harus mengawasi dan menyetujui anggaran untuk lebih banyak kementerian, yang meningkatkan beban kerja dan mengharuskan penggunaan lebih banyak sumber daya manusia serta anggaran.',
                'sisi' => 'kontra'

            ],

            [
                'pernyataan_id' => 11,
                'penjelasan' => 'Berdasarkan amanat reformasi birokrasi, pemerintah diharapkan dapat bekerja secara efisien dan efektif. Kabinet besar dapat dianggap melanggar prinsip ini.',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Berdasarkan Pasal 23 Undang-Undang Nomor 17 Tahun 2003 tentang Keuangan Negara, penambahan kementerian dapat menyebabkan peningkatan anggaran belanja negara, yang pada gilirannya juga meningkatkan beban anggaran yang harus disetujui oleh DPR. Anggaran yang membengkak dapat menurunkan ruang fiskal untuk sektor lain, seperti pendidikan atau kesehatan.',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Penambahan kementerian memerlukan lebih banyak pengawasan dan evaluasi anggaran, yang menambah beban kerja DPR, sesuai dengan Pasal 20 Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 yang memberikan wewenang kepada DPR untuk mengawasi kebijakan pemerintahan, termasuk kebijakan anggaran. Ini dapat memperlambat proses pengambilan keputusan dan alokasi anggaran.',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Berdasarkan Pasal 6 Peraturan Presiden Nomor 7 Tahun 2021, penambahan kementerian yang tidak disertai dengan perencanaan yang matang dapat menyebabkan tumpang tindih fungsi antar kementerian, mengakibatkan inefisiensi dalam pengelolaan anggaran dan sumber daya.',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Dalam Pasal 7 UU No. 39/2008 tentang Kementerian Negara, disebutkan bahwa pembentukan kementerian harus berlandaskan pada efisiensi dan efektivitas. Kabinet gemuk berpotensi bertentangan dengan prinsip ini jika terlalu banyak kementerian tidak didasarkan pada kebutuhan riil untuk meningkatkan kinerja pemerintahan.',
                'sisi' => 'kontra'

            ], [
                'pernyataan_id' => 11,
                'penjelasan' => 'Penambahan kementerian dalam kabinet juga dapat dipandang sebagai pemborosan sumber daya publik jika dilakukan hanya untuk kepentingan politik, yang bertentangan dengan prinsip Pasal 23E Undang-Undang Dasar 1945, yang mengharuskan penggunaan anggaran negara untuk kepentingan kesejahteraan rakyat.',
                'sisi' => 'kontra'

            ],


            [
                'pernyataan_id' => 12,
                'penjelasan' => 'Jakarta sebagai ibu kota saat ini menghadapi masalah kepadatan penduduk yang sangat tinggi, yang berdampak pada kemacetan, polusi, dan kualitas hidup yang buruk. Pemindahan ibu kota dapat mengurangi beban ini.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Jakarta berada di daerah rawan banjir dan terendam. Pemindahan ibu kota ke daerah yang lebih aman dapat mengurangi risiko bencana alam dan meningkatkan ketahanan infrastruktur.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Pemindahan ibu kota ke daerah lain dapat mendorong pemerataan pembangunan di Indonesia, mendukung pertumbuhan ekonomi di daerah yang kurang berkembang, dan mengurangi kesenjangan antara pusat dan daerah.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Dengan pemindahan ibu kota, diharapkan bisa tercipta lingkungan yang lebih baik, dengan infrastruktur yang direncanakan dengan baik untuk mendukung kualitas hidup masyarakat.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Dasar Hukum UUD 1945 Pasal 18: Pasal ini menyebutkan bahwa negara kesatuan dapat membagi wilayah ke dalam daerah-daerah dan diatur dengan undang-undang. Ini memberikan dasar konstitusional untuk memindahkan ibu kota negara.',
                'sisi' => 'pro'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'UU No. 23 Tahun 2014 tentang Pemerintahan Daerah: Undang-undang ini mengatur otonomi daerah, yang dapat mendukung pemindahan ibu kota sebagai langkah untuk meningkatkan efisiensi pemerintahan dan pengembangan daerah.',
                'sisi' => 'pro'
            ],
            [
                'pernyataan_id' => 12,
                'penjelasan' => 'Peraturan Presiden dan Rencana Pembangunan: Pemindahan ibu kota biasanya diatur melalui peraturan presiden dan rencana pembangunan jangka panjang, yang mencakup aspek ekonomi, sosial, dan lingkungan.',
                'sisi' => 'pro'
            ],
            [
                'pernyataan_id' => 12,
                'penjelasan' => 'Kebijakan Nasional: Kebijakan nasional dalam perencanaan pembangunan berkelanjutan dapat mencakup pemindahan ibu kota sebagai langkah strategis untuk mengatasi masalah yang dihadapi Jakarta dan mendukung pertumbuhan regional.',
                'sisi' => 'pro'
            ],


            [
                'pernyataan_id' => 12,
                'penjelasan' => 'Pemindahan ibu kota membutuhkan dana sangat besar dan berpotensi mengurangi anggaran yang seharusnya dialokasikan untuk kepentingan publik lain, seperti kesehatan, pendidikan, dan pengentasan kemiskinan.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Proyek pemindahan ibu kota bisa mengancam kawasan hutan dan ekosistem di wilayah baru, terutama jika pembangunan tidak memperhatikan Analisis Mengenai Dampak Lingkungan (AMDAL) yang memadai.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Besarnya anggaran yang diperlukan untuk proyek pemindahan ibu kota dapat mempengaruhi stabilitas keuangan negara, yang bertentangan dengan prinsip pengelolaan fiskal yang efisien dan akuntabel.',
                'sisi' => 'kontra'
            ], [
                'pernyataan_id' => 12,
                'penjelasan' => 'Kesenjangan Sosial: Pemindahan ibu kota bisa memunculkan ketimpangan antara kota lama (Jakarta) dan kota baru. Pekerja di Jakarta yang bergantung pada sektor informal akan kehilangan sumber penghasilan.',
                'sisi' => 'kontra'

            ],
            [
                'pernyataan_id' => 12,
                'penjelasan' => 'Pengangguran dan Migrasi: Tidak semua pegawai pemerintah akan bersedia pindah ke ibu kota baru. Hal ini dapat memicu resistensi sosial dan meningkatkan biaya relokasi pegawai.',
                'sisi' => 'kontra'

            ]
        ]);


        PertanyaanSesi3::insert([
            [
                "pertanyaan" => "Kota manakah yang mendapatkan julukan sebagai kota hujan?",
                "jawaban" => "Bogor.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Pemerintah menetapkan Hari Lahir Pancasila Setiap tanggal 1 Juni. Dasar hukum penetapan hari kelahiran Pancasila 1 Juni adalah?",
                "jawaban" => "Keputusan Presiden Nomor 24 Tahun 2016.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Sebutkan Pasal dan Ayat Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 yang berbunyi, “Setiap warga negara wajib mengikuti pendidikan dasar dan pemerintah wajib membiayainya”!",
                "jawaban" => "Pasal 31 ayat (2).",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Sebutkan Lembaga-Lembaga Negara yang dibentuk berdasarkan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 setelah amandemen!",
                "jawaban" => "Penduduk adalah warga negara Indonesia dan orang asing yang bertempat tinggal di Indonesia.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Sebutkan Lembaga-Lembaga Negara yang dibentuk berdasarkan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "1. MPR RI 2. Presiden 3. DPR RI 4. DPD RI 5. BPK 6. Mahkamah Konstitusi 7. Mahkamah Agung 8. Komisi Yudisial.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Pencipta dari lagu Bagimu negeri adalah?",
                "jawaban" => " Kusbini.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "“Negara berdasar atas Ketuhanan Yang Maha Esa”. Pernyataan tersebut merupakan rumusan Pasal dan Ayat berapa dalam Undang Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "Pasal 29 ayat (1).",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Sebutkan pasal dan ayat yang terkait dengan keadaan bahaya dan ihwal kegentingan yang memaksa menurut Undang-Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "Pasal 12 dan 22 ayat (1).",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Bapak pendidikan Indonesia adalah?",
                "jawaban" => "Ki Hajar Dewantara.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Bunyi sila ke 1 Pancasila!",
                "jawaban" => "Ketuhanan Yang Maha Esa.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Apa nama panitia kecil yang dibentuk setelah sidang pertama BPUPKI?",
                "jawaban" => "Panitia Sembilan.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Hari Kesaktian Pancasila diperingati setiap tanggal?",
                "jawaban" => "1 Oktober",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 23 ayat (3) adalah?",
                "jawaban" => "Apabila Dewan Perwakilan Rakyat tidak menyetujui rancangan anggaran pendapatan dan belanja negara yang diusulkan oleh Presiden, Pemerintah menjalankan Anggaran Pendapatan dan Belanja Negara tahun yang lalu.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Kota yang menjadi ibu kota Provinsi Kalimantan Timur adalah?",
                "jawaban" => "Samarinda",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Prolegnas merupakan skala prioritas program pembentukan Undang-Undang dalam rangka mewujudkan sistem hukum nasional. Sebutkan kepanjangan dari Prolegnas.",
                "jawaban" => "Program Legislasi Nasional.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Menurut Pasal 8 Ayat (3) Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, Jika Presiden dan Wakil Presiden mangkat, berhenti, diberhentikan, atau tidak dapat melakukan kewajibannya dalam masa jabatannya, pelaksanaan tugas Kepresidenan dilakukan secara bersamaan oleh?",
                "jawaban" => "Menteri Luar Negeri, Menteri Dalam Negeri dan Menteri Pertahanan.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Pada pidato 1 Juni 1945, Ir. Soekarno memberikan alternatif selain lima sila, ada Ekasila yaitu?",
                "jawaban" => "Gotong royong.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Martha Christina Tiahahu adalah pahlawan nasional yang merupakan tokoh masyarakat berasal dari Provinsi?",
                "jawaban" => "Maluku.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Dasar hukum peninjauan ketetapan MPRS/MPR oleh MPR adalah?",
                "jawaban" => "Pasal I Aturan Tambahan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Dalam hal tidak ada pasangan calon Presiden dan Wakil Presiden terpilih, dua pasangan calon yang memperoleh suara terbanyak pertama dan kedua dalam pemilihan umum dipilih oleh rakyat secara langsung dan pasangan yang memperoleh suara rakyat terbanyak dilantik sebagai Presiden dan Wakil Presiden. Ketentuan tersebut merupakan rumusan Pasal 6A ayat (4) yang ditetapkan dalam Sidang Majelis Permusyawaratan Rakyat Tahun berapa?",
                "jawaban" => "2002.",
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
                "pertanyaan" => "Salah satu nama Bandar Udara di Indonesia menggunakan nama pahlawan nasional yaitu Radin Inten II, yang merupakan tokoh masyarakat berasal dari Provinsi?",
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
                "jawaban" => "Addendum.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 9 ayat (2) adalah?",
                "jawaban" => "Jika Majelis Permusyawaratan Rakyat atau Dewan Perwakilan Rakyat tidak dapat mengadakan sidang, Presiden dan Wakil Presiden bersumpah menurut agama, atau berjanji dengan sungguh-sungguh di hadapan pimpinan Majelis Permusyawaratan Rakyat dengan disaksikan oleh Pimpinan Mahkamah Agung.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Presiden memberi gelar, tanda jasa, dan lain-lain tanda kehormatan yang diatur dengan undang-undang. Pernyataan tersebut merupakan rumusan Pasal berapa dalam Undang Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "Pasal 15.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Tuanku Imam Bonjol adalah pahlawan nasional yang merupakan tokoh masyarakat berasal dari Provinsi?",
                "jawaban" => "Sumatera Barat.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 32 ayat (2) adalah?",
                "jawaban" => "Negara menghormati dan memelihara bahasa daerah sebagai kekayaan budaya nasional.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 33 ayat (1) adalah?",
                "jawaban" => "Perekonomian disusun sebagai usaha bersama berdasar atas asas kekeluargaan.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Segala putusan Majelis Permusyawaratan Rakyat ditetapkan dengan suara yang terbanyak. Pernyataan tersebut merupakan rumusan Pasal dan Ayat berapa dalam Undang Undang Dasar Negara Republik Indonesia Tahun 1945?",
                "jawaban" => "Pasal 2 ayat (3).",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "BAB I Undang Undang Dasar Negara Republik Indonesia Tahun 1945 mengatur tentang?",
                "jawaban" => "Bentuk dan Kedaulatan.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 28C ayat (2) adalah?",
                "jawaban" => "Setiap orang berhak untuk memajukan dirinya dalam memperjuangkan haknya secara kolektif untuk membangun masyarakat, bangsa, dan negaranya.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Pencipta lagu rayuan pulau kelapa adalah?",
                "jawaban" => "Ismail Marzuki.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945 sebelum diubah terdiri atas 16 bab, 37 pasal, dan 49 ayat, 4 pasal aturan peralihan, dan 2 ayat aturan tambahan. Setelah amandemen, jumlah bab, pasal, ayat, aturan peralihan, dan aturan tambahan adalah?",
                "jawaban" => "21 bab, 73 pasal, 170 ayat, 3 pasal aturan peralihan, dan 2 pasal aturan tambahan.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Pengelompokan Ketetapan MPRS dan Ketetapan MPR berdasarkan Pasal 4 Ketetapan MPR Nomor I/MPR/2003 adalah?",
                "jawaban" => "TAP MPRS/TAP MPR yang dinyatakan tetap berlaku sampai dengan terbentuknya undang-undang.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Setiap menteri membidangi urusan tertentu dalam pemerintahan. Pernyataan tersebut merupakan ketentuan dalam Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 yaitu rumusan Pasal dan Ayat berapa?",
                "jawaban" => "Pasal 17 ayat (3).",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Gunung Pangrango adalah salah satu gunung di Indonesia yang terletak di provinsi?",
                "jawaban" => "Jawa Barat",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 23F ayat (1) adalah?",
                "jawaban" => "Anggota Badan Pemeriksa Keuangan dipilih oleh Dewan Perwakilan Rakyat dengan memperhatikan pertimbangan Dewan Perwakilan Daerah dan diresmikan oleh Presiden.",
                'wilayah_id' => 1,
            ],


            [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 7C adalah Presiden tidak dapat membekukan dan/atau membubarkan Dewan Perwakilan Rakyat. Apabila terjadi sengketa kewenangan antara Presiden dan Dewan Perwakilan Rakyat maka hal tersebut dapat diadili oleh?",
                "jawaban" => "Mahkamah Konstitusi.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 28H ayat (1) adalah?",
                "jawaban" => "Setiap orang berhak hidup sejahtera lahir dan batin, bertempat tinggal, dan mendapatkan lingkungan hidup yang baik dan sehat serta berhak memperoleh pelayanan kesehatan.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Pahlawan nasional yang dikenal dengan jasanya menjahit Bendera Pusaka Sang Saka Merah Putih adalah?",
                "jawaban" => "Fatmawati.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Oto Iskandar Dinata adalah pahlawan nasional yang merupakan tokoh masyarakat berasal dari Provinsi?",
                "jawaban" => "Jawa Barat.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945, rumusan Pasal 1 ayat (3) adalah?",
                "jawaban" => "Negara Indonesia adalah negara hukum.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Pada pasal 4 TAP MPRS/MPR yang dinyatakan tetap berlaku sampai dengan terbentuknya Undang-Undang pada TAP MPR nomor berapa dan tahun berapa tentang penyelenggara Negara yang bersih dan bebas korupsi, kolusi dan nepotisme?",
                "jawaban" => "TAP MPR Nomor XI/MPR/1998",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Bunyi Sila Pertama Pancasila yaitu Ketuhanan Yang Maha Esa. Pada Alinea keberapa Pembukaan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 terdapat kalimat tersebut?",
                "jawaban" => "Alinea ke-4.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Gunung Bromo adalah salah satu gunung di Indonesia yang terletak di Provinsi?",
                "jawaban" => "Jawa Timur.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "Undang Undang Dasar Negara Republik Indonesia Tahun 1945 rumusan Pasal 1 ayat (3) adalah?",
                "jawaban" => "Negara Indonesia adalah negara hukum.",
                'wilayah_id' => 1,
            ], [
                "pertanyaan" => "H. Oemar Said Cokroaminoto adalah pahlawan nasional yang merupakan tokoh masyarakat berasal dari Provinsi?",
                "jawaban" => "Jawa Timur",
                'wilayah_id' => 1,
            ],
        ]);

    }
}



