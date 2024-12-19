<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use App\Models\TemaPertanyaan;
use Illuminate\Database\Seeder;

class PertanyaanKotaSemarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataSesi = [
            1 => [
                'Pancasila, UUD NRI Tahun 1945 dan Ketetapan MPR' => [
                    'Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 dilakukan amandemen pada tahun 1999, 2000, 2001, dan 2002. Sebutkan pasal-pasal yang diamandemen pada tahun 2000!' => [
                        "Pasal 18",
                        "Pasal 18A",
                        "Pasal 18B",
                        "Pasal 19",
                        "Pasal 20 Ayat (5)",
                        "Pasal 20A",
                        "Pasal 22A",
                        "Pasal 22B",
                        "Bab IXA Pasal 25E",
                        "Bab X Pasal 26 Ayat (2) & (3)",
                        "Pasal 27 Ayat (3)",
                        "Bab XA Pasal 28A, 28B, 28C, 28D, 28E, 28F, 28G, 28H, 28I, 28J",
                        "Bab XII Pasal 30",
                        "Bab XV Pasal 36A",
                        "Bab XV Pasal 36B, 36C",


                    ],
                    'Hak asasi manusia diatur dalam pasal 28A sampai 28J Undang-Undang Dasar Negara Republik Indonesia Tahun 1945. Sebutkan hak asasi manusia yang diatur dalam pasal-pasal tersebut!' => [
                        "Hak untuk hidup",
                        "Hak untuk membentuk keluarga",
                        "Hak untuk mengembangkan diri",
                        "Hak untuk pengakuan yang sama dihadapan hukum",
                        "Hak untuk kebebasan memeluk agama",
                        "Hak untuk berkomunikasi",
                        "Hak untuk perlindungan diri pribadi",
                        "Hak untuk hidup sejahtera lahir dan batin",
                        "Hak untuk perlindungan terhadap perlakuan diskriminatif, pemajuan, penegakan, dan pemenuhan HAM adalah tanggung jawab negara, terutama pemerintah",
                        "Hak untuk berkewajiban menghargai hak asasi orang lain serta tunduk kepada pembatasan yang ditetapkan Undang-Undang.",


                    ],

                    'Sebagaimana yang tertuang dalam alinea keempat Undang-Undang Dasar Negara Republik Indonesia tahun 1945, salah satu tujuan bangsa Indonesia adalah ikut melaksanakan ketertiban dunia yang berdasarkan kemerdekaan, perdamaian abadi, dan keadilan sosial, salah satunya dengan mengirim Kontingen Garuda ke negara-negara yang sedang berkonflik di dunia. Negara-negara yang pernah menjadi tujuan dalam misi Kontingen Garuda adalah? ' => [
                        "Mesir",
                        "Kongo",
                        "Vietnam",
                        "Iran",
                        "Namibia",
                        "Irak",
                        "Kuwait",
                        "Kamboja",
                        "Somalia",
                        "Bosnia dan Herzegovina",
                        "Georgia",
                        "Mozambik",
                        "Filipina",
                        "Tajikistan",
                        "Sierra Leone",
                        "Liberia",
                        "Sudan",
                        "Lebanon",
                        "Nepal",


                    ],
                    'Dalam menjalankan sistem negara dan kehidupan masyarakatnya, Indonesia berpijak pada 10 pilar demokrasi konstitusional yang berlandaskan pada Undang-Undang Dasar Negara Republik Indonesia tahun 1945 dan Pancasila. Sebutkan 10 pilar demokrasi konstitusional Indonesia!' => [
                        "Demokrasi yang Berketuhanan yang Maha Esa",
                        "Demokrasi dengan Kecerdasan",
                        "Demokrasi yang Berkedaulatan Rakyat",
                        "Demokrasi dengan Rule of Law",
                        "Demokrasi dengan Pemisahan Kekuasaan Negara",
                        "Demokrasi dengan Hak Asasi Manusia",
                        "Demokrasi dengan Pengadilan yang Merdeka",
                        "Demokrasi dengan Otonomi Daerah",
                        "Demokrasi dengan Kemakmuran",
                        "Demokrasi yang Berkeadilan Sosial",


                    ],
                ],


                'NKRI & Bhinneka Tunggal Ika' => [
                    'Agama dijamin dalam Pasal 29 ayat (1) dan (2) Undang-Undang Dasar Negara Republik Indonesia tahun 1945 serta Pasal 22 ayat (1) dan (2) dalam undang-undang Nomor 39 Tahun 1999. Sebutkan 10 masjid tertua yang ada di Indonesia!' => [
                        "Masjid Alam Marunda",
                        "Masjid Raya Baiturrahman",
                        "Masjid Saka Tunggal",
                        "Masjid Wapauwe",
                        "Masjid Sunan Ampel",
                        "Masjid Kuno Bayan Beleq",
                        "Masjid Agung Sang Cipta Rasa",
                        "Masjid Agung",
                        "Masjid Sultan Suriansyah",
                        "Masjid Menara Kudus",
                        "Masjid Agung Banten",
                        "Masjid Mantingan",
                        "Masjid Tuo Kayu Jao",



                    ],
                    'Alat musik tradisional adalah kekayaan budaya bangsa yang perlu dilestarikan di tengah perkembangan zaman. Setiap daerah memiliki alat musik tradisional yang menjadi ciri khas masyarakat setempat. Sebutkan alat-alat musik tradisional yang berasal dari provinsi Jawa Barat!' => [
                        "Karinding",
                        "Angklung",
                        "Calung",
                        "Arumba",
                        "Kecapi",
                        "Toleat",
                        "Tarawangsa",
                        "Jentreng",
                        "Genggong Subang",
                        "Suling Bambu",
                        "Rebab",
                        "Jengglong",
                        "Celempung",




                    ],
                    'Berdasarkan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 Pasal 18 ayat (1) Negara Kesatuan Republik Indonesia dibagi atas daerah-daerah provinsi dan daerah provinsi itu dibagi atas kabupaten dan kota, yang tiap-tiap provinsi, kabupaten, dan kota itu mempunyai pemerintahan daerah, yang diatur dengan undang-undang. Sebutkan daftar kabupaten yang ada di provinsi Jawa Barat!' => [
                        "Kabupaten Bogor",
                        "Kabupaten Sukabumi",
                        "Kabupaten Cianjur",
                        "Kabupaten Bandung",
                        "Kabupaten Garut",
                        "Kabupaten Tasikmalaya",
                        "Kabupaten Ciamis",
                        "Kabupaten Kuningan",
                        "Kabupaten Cirebon",
                        "Kabupaten Majalengka",
                        "Kabupaten Sumedang",
                        "Kabupaten Indramayu",
                        "Kabupaten Subang",
                        "Kabupaten Purwakarta",
                        "Kabupaten Karawang",
                        "Kabupaten Bekasi",
                        "Kabupaten Bandung Barat",
                        "Kabupaten Pangandaran",




                    ],
                    'Berdasarkan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 Pasal 32 ayat (1) negara memajukan kebudayaan nasional Indonesia di tengah peradaban dunia dengan menjamin kebebasan masyarakat dalam memelihara dan mengembangkan nilai-nilai budayanya. Sebutkan lagu-lagu daerah yang berasal dari Jawa Barat!' => [
                        "Es Lilin",
                        "Cing Cangkeling",
                        "Panon Hideung",
                        "Bubuy Bulan",
                        "Manuk Dadali",
                        "Bajing Luncat",
                        "Halo-halo Bandung",
                        "Neng Geulis",
                        "Peuyeum Bandung",
                        "Pepeling",
                        "Nenun",
                        "Pileuleuyan",
                        "Sapu Nyere Pegat Simpay",
                        "Tokecang",
                        "Warung Pojok",

                    ],
                ],
                'Pengetahuan Umum' => [
                    'Hukum adalah perangkat kaidah dalam bentuk peraturan baik itu tertulis maupun tidak tertulis yang mengatur tingkah laku manusia dalam masyarakat, berbangsa, dan bernegara. Sebutkan jenis-jenis hukum di Indonesia!' => [
                        "Hukum Undang – Undang",
                        "Hukum Adat",
                        "Hukum Traktat",
                        "Hukum Yurisprudensi",
                        "Hukum Nasional",
                        "Hukum Internasional",
                        "Hukum Asing",
                        "Hukum Privat",
                        "Hukum Publik",
                        "Hukum Pidana",
                        "Hukum Perdata",
                        "Hukum yang bersifat memaksa",
                        "Hukum yang bersifat mengatur",
                        "Ius Constitutum",
                        "Ius Constituendum",


                    ],
                    'Timur Tengah adalah sebuah wilayah geografis yang terletak di persimpangan tiga benua utama: Asia, Eropa, dan Afrika. Sebutkan negara-negara yang terletak di Timur Tengah!' => [
                        "Bahrain",
                        "Iran",
                        "Iraq",
                        "Israel",
                        "Yordania",
                        "Kuwait",
                        "Lebanon",
                        "Oman",
                        "Palestina",
                        "Qatar",
                        "Arab Saudi",
                        "Suriah",
                        "Türkiye",
                        "Uni Emirat Arab (UEA)",
                        "Yaman",


                    ],
                    'Sebelum Eropa atau bangsa barat dianggap menjadi pusat peradaban, Islam telah lama mengalami kejayaan. Pada tahun 650-1250 Masehi, kebudayaan Islam dan pengetahuan dari cendekiawan muslim berkembang sangat pesat dan mempengaruhi peradaban dunia. Sebutkan ilmuwan islam yang berhasil mempengaruhi dunia!' => [
                        "Al-Khawarizmi",
                        "Ibnu Sina",
                        "Al-Zahrawi",
                        "Abbas Ibn Firnas",
                        "Ibnu Al Haytham",
                        "Ahmad Ibn Tulun",
                        "Al-Battani",
                        "Ibnu Khaldun",
                        "Al-Jazari",
                        "Ibnu Qurra",
                        "Ibn Al Farabi",


                    ],
                    'Di antara berbagai sumber sejarah kuno Indonesia, seperti naskah dan berita asing, prasasti dianggap sumber terpenting karena mampu memberikan kronologis suatu peristiwa. Sebutkan prasasti-prasasti yang ditemukan di Jawa Barat!' => [
                        "Prasasti Pasir Awi",
                        "Prasasti Ciaruteun",
                        "Prasasti Kebon Kopi I",
                        "Prasasti Muara Cianten",
                        "Prasasti Jambu, atau Prasasti Pasir Koleangkak",
                        "Prasasti Kebon Kopi II, atau Prasasti Rakryan Juru Pengambat",
                        "Prasasti Mandiwunga",
                        "Prasasti Sanghyang Tapak I",
                        "Prasasti Sanghyang Tapak II",
                        "Prasasti Sadapaingan",
                        "Prasasti Kawali I",
                        "Prasasti Kawali II",
                        "Prasasti Kawali III",
                        "Prasasti Kawali IV",
                        "Prasasti Kawali V",
                        "Prasasti Kawali VI",
                        "Prasasti Rumatak, atau Prasasti Geger Hanjuang",
                        "Prasasti Kebantenan",
                        "Prasasti Batutulis",
                        "Prasasti Huludayeuh",
                        "Prasasti Cikapundung",
                        "Prasasti Pasir Datar",


                    ],
                ],
                'Nasional dan Internasional' => [
                    'Sebutkan Pahlawan nasional yang ada di uang kertas rupiah keluaran tahun 2000 sampai 2022!' => [
                        "Kapitan Pattimura",
                        "Tuanku Imam Bonjol",
                        "Sultan Mahmud Badaruddin II",
                        "Otto Iskandar Dinata",
                        "I Gusti Ngurah Rai",
                        "Ir Soekarno",
                        "Moh Hatta",
                        "Ir. H. Djuanda Kartawidjaja",
                        "Dr. G.S.S.J. Ratulangi",
                        "Frans Kaisiepo",
                        "Idham Chalid",
                        "Moh. Hoesni Thamrin",
                        "Cut Nyak Meutia",


                    ],
                    'Asia-Pacific Economic Cooperation (APEC) adalah forum kerja sama antar 21 Ekonomi di lingkar Samudera Pasifik yang berdiri tahun 1989. Sebutkan negara-negara yang menjadi anggota APEC!' => [
                        "Australia",
                        "Brunei Darussalam",
                        "Kanada",
                        "Chili",
                        "Cina",
                        "Malaysia",
                        "Meksiko",
                        "Selandia Baru",
                        "Papua Nugini",
                        "Peru",
                        "Filipina",
                        "Rusia",
                        "Singapura",
                        "Taiwan",
                        "Thailand",
                        "Amerika Serikat",
                        "Vietnam",
                        "Indonesia",
                        "Hong Kong",
                        "Jepang",
                        "Korea Selatan",



                    ],
                    'Sebutkan kebijakan-kebijakan politik yang diterapkan pada masa Demokrasi Terpimpin (1959-1965)!' => [
                        "Pembebasan Irian Barat",
                        "Pembentukan MPRS",
                        "Pembentukan DPAS",
                        "Pembentukan Front Nasional",
                        "Pembentukan DPR-GR",
                        "Penerapan Konsep NASAKOM",
                        "Politik Mercusuar",
                        "Konfrontasi dengan Malaysia",
                        "Indonesia keluar dari PBB",
                        "Politik Nefo-Oldefo",


                    ],
                    'Berdasarkan Keputusan Presiden (Keppres) Nomor 41 tahun 1987, Indonesia dibagi kedalam tiga zona waktu, Waktu Indonesia Barat (WIB), Waktu Indonesia Tengah (WITA), dan Waktu Indonesia Timur (WIT). Sebutkan nama-nama ibu kota provinsi yang terletak di zona Waktu Indonesia Barat!' => [
                        "Banda Aceh",
                        "Medan",
                        "Padang",
                        "Pekanbaru",
                        "Tanjung Pinang",
                        "Pangkal Pinang",
                        "Jambi",
                        "Bengkulu",
                        "Palembang",
                        "Bandar Lampung",
                        "Serang",
                        "Jakarta",
                        "Bandung",
                        "Semarang",
                        "Yogyakarta",
                        "Surabaya",
                        "Pontianak",
                        "Palangkaraya",


                    ],
                ],
            ],
        ];

        foreach ($dataSesi as $sesi => $dataSubTema) {

            foreach ($dataSubTema as $subTema => $dataPertanyaan) {

                $temaPertanyaan = TemaPertanyaan::create([
                    'sesi' => $sesi,
                    'tema' => $subTema
                ]);

                foreach ($dataPertanyaan as $pertanyaan => $dataJawaban) {

                    $pertanyaan = Pertanyaan::create([
                        'id_tema' => $temaPertanyaan->id,
                        'pertanyaan' => $pertanyaan
                    ]);

                    foreach ($dataJawaban as $jawaban) {

                        Jawaban::create([
                            'id_pertanyaan' => $pertanyaan->id,
                            'jawaban' => $jawaban
                        ]);
                    }
                }
            }
        }

        //
    }
}
