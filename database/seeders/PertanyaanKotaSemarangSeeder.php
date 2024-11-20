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
                    'Pada Undang-undang Negara Republik Indonesia Nomor 24 Tahun 2009 pada Pasal 2 tentang Bendera, Bahasa, dan Lambang Negara serta Lagu Kebangsaan; Pengaturan bendera, bahasa, dan lambang negara, serta lagu kebangsaan sebagai simbol identitas wujud eksistensi bangsa dan Negara Kesatuan Republik Indonesia dilaksanakan berdasarkan pada asas?' => [
                        "Persatuan",
                        "Kedaulatan",
                        "Kehormatan",
                        "Kebangsaan",
                        "Kebhinnekatunggalikaan",
                        "Ketertiban",
                        "Kepastian Hukum",
                        "Keseimbangan",
                        "Keserasian",
                        "Keselarasan",



                    ],
                    'Hak asasi manusia diatur dalam Pasal 28 A sampai 28 J Undang-Undang Dasar Negara Republik Indonesia Tahun 1945. Sebutkan hak asasi manusia yang diatur dalam pasal-pasal tersebut!' => [
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
                    'Ketetapan MPRS dan MPR RI yang dinyatakan tetap berlaku sampai dengan terbentuknya Undang-Undang sesuai dengan ketentuan Pasal 4 Ketetapan MPR RI Nomor I/MPR/2003 adalah?' => [
                        "TAP MPRS Nomor XXIX/MPRS/1966",
                        "TAP MPR Nomor XI/MPR/1998",
                        "TAP MPR Nomor XV/MPR/ 1998",
                        "TAP MPR Nomor III/MPR/2000",
                        "TAP MPR Nomor V/MPR/2000",
                        "TAP MPR Nomor VI/MPR/2000",
                        "TAP MPR Nomor VII/MPR/2000",
                        "TAP MPR Nomor VI/MPR/2001",
                        "TAP MPR Nomor VII/MPR/2001",
                        "TAP MPR Nomor VIII/MPR/2001",
                        "TAP MPR Nomor IX/MPR/2001",
                    ],
                    '4.	Pemerintah harus selalu mengupdate sistem pendidikan nasional khususnya melalui penyesuaian kurikulum sebagai “jantung” pendidikan dan senantiasa mengikuti perkembangan ilmu pengetahuan dan teknologi sebagai realisasi dari Pasal 31 ayat (5) Undang-Undang Dasar Negara Republik Indonesia tahun 1945. Terkait dengan hal tersebut, sebutkan mata pelajaran SMA kelas X /Fase E pada kurikulum merdeka!' => [
                        "Pendidikan Agama",
                        "Pendidikan Pancasila",
                        "Bahasa Indonesia",
                        "Matematika",
                        "Ilmu Pengetahuan Alam: Fisika, Kimia, Biologi",
                        "Ilmu Pengetahuan Sosial: Sosiologi, Ekonomi, Sejarah, Geografi",
                        "Bahasa Inggris",
                        "Pendidikan Jasmani Olahraga dan Kesehatan",
                        "Informatika",
                        "Seni, Budaya, dan Prakarya",
                        "Muatan Lokal",
                    ],
                ],
                'NKRI & Bhinneka Tunggal Ika' => [
                    'Hasil Sidang PPKI Kedua Tanggal 19 Agustus 1945 salah satunya adalah Pembentukan Dua Belas Departemen dan Empat Menteri Negara. Sebutkan nama-nama departemen tersebut!' => [
                        "Departemen Dalam Negeri",
                        "Departemen Luar Negeri",
                        "Departemen Keuangan",
                        "Departemen Kehakiman",
                        "Departemen Kemakmuran",
                        "Departemen Keamanan Rakyat",
                        "Departemen Pengajaran",
                        "Departemen Penerangan",
                        "Departemen Sosial",
                        "Departemen Kesehatan",
                        "Departemen Pekerja Umum",
                        "Departemen Perhubungan",

                    ],
                    'Berdasarkan ketentuan Pasal 9 ayat (1) Undang-Undang No. 24 Tahun 2009 tentang Bendera, Bahasa, dan Lambang Negara, serta Lagu Kebangsaan, penggunaan Bendera Negara Sang Merah Putih wajib dikibarkan setiap hari. Sebutkan tempat dimana bendera Negara Sang Merah Putih dikibarkan?' => [
                        "Istana Presiden dan Wakil Presiden",
                        "Kantor Lembaga Negara",
                        "Kantor Lembaga Pemerintah",
                        "Kantor Lembaga Pemerintah non Kementerian",
                        "Lembaga Pemerintah Daerah",
                        "Kantor DPRD",
                        "Kantor Perwakilan RI di Luar Negeri",
                        "Halaman Satuan Pendidikan",
                        "Kantor Swasta",
                        "Rumah Jabatan Presiden dan Wakil Presiden",
                        "Rumah Jabatan Pimpinan Lembaga Negara",
                        "Rumah Jabatan Menteri",
                        "Rumah Jabatan Pimpinan Lembaga Pemerintahan non Kementerian",
                        "Rumah Jabatan Gubernur, Bupati, Walikota dan Camat",
                        "Pos Perbatasan dan Pulau-pulau Terluar NKRI Lingkungan TNI dan Kepolisian RI",
                        "Taman Makam Pahlawan Nasional",


                    ],
                    'Ketentuan Pasal 25A Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 meyebutkan bahwa Negara Kesatuan Republik Indonesia adalah sebuah negara kepulauan yang berciri Nusantara dengan wilayah yang batas-batas dan hak-haknya ditetapkan dengan undang-undang. Pertanyannya, sebutkan pulau-pulau yang terdapat di Provinsi Aceh!' => [
                        "Pulau Benggala",
                        "Pulau Breueh",
                        "Pulau Gosong Gulawan",
                        "Kepulauan Banyak",
                        "Pulau Balai",
                        "Pulau Batee",
                        "Pulau Bunta",
                        "Pulau Lekon",
                        "Pulau Lumpat",
                        "Pulau Mincau",
                        "Pulau Reusam",
                        "Pulau Tapah",
                        "Pulau Raya",
                        "Pulau Rondo",
                        "Pulau Klah",
                        "Pulau Rubiah",
                        "Pulau Seulako",
                        "Pulau Simeulue Cut",
                        "Pulau Simeulue",
                        "Pulau Weh",
                    ],
                    'Berdasarkan ketentuan Pasal 32 ayat (1) Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 menyebutkan bahwa Negara memajukan kebudayaan nasional Indonesia di tengah peradaban dunia dengan menjamin kebebasan masyarakat dalam memelihara dan mengembangkan nilai-nilai budayanya. Pertanyannya adalah sebutkan lagu-lagu daerah yang berasal dari Provinsi Aceh!' => [
                        "Aneuk Nanggroe",
                        "Ranub Lampuan",
                        "Meutani",
                        "Tanoh Lon Sayang",
                        "Bungong Seulanga",
                        "Gaseh Han Sampoe",
                        "Seulanga",
                        "Bungong Jeumpa",
                        "Bungong Lawang",
                        "Aceh Membangun",
                        "Publo Bungong",
                        "Bungong Keupula",
                        "Utang",
                        "Garipo",
                        "Dendang Chacharia",
                        "Geremukunah",
                        "Anek Yatim",
                        "Sabang",
                        "Di babah Pinto",
                        "Jambo",

                    ],
                ],
                'Pengetahuan Umum' => [
                    'Pembagian waktu di Indonesia diatur melalui Keputusan Presiden Republik Indonesia Nomor 41 Tahun 1987 yang ditetapkan pada tanggal 26 November 1987 oleh Presiden Soeharto. Indonesia terbagi dalam tiga waktu yaitu Waktu Indonesia Barat (WIB), Waktu Indonesia Tengah (WITA), Waktu Indonesia Timur (WIT). Provinsi Aceh masuk zona Waktu Indonesia Barat. Sebutkan nama-nama Provinsi selain Provinsi Aceh yang masuk di zona Waktu Indonesia Barat!' => [
                        "Sumatera Utara",
                        "Sumatera Barat",
                        "Riau",
                        "Kepulauan Riau",
                        "Kepulauan Bangka Belitung",
                        "Jambi",
                        "Bengkulu",
                        "Sumatera Selatan",
                        "Lampung",
                        "Banten",
                        "DKI Jakarta",
                        "Jawa Barat",
                        "Jawa Tengah",


                    ],
                    'Indonesia merupakan negara kepulauan yang terletak di lingkaran api Pasifik, dikenal memiliki banyak gunung berapi yang tersebar di seluruh wilayahnya. Di antara ribuan gunung tersebut, sebutkan 10 gunung tertinggi di Indonesia!' => [
                        "Gunung Puncak Jaya",
                        "Gunung Mandala",
                        "Gunung Trikora",
                        "Gunung Ngga Pilimsit",
                        "Gunung Kerinci",
                        "Gunung Rinjani",
                        "Gunung Semeru",
                        "Gunung Sanggar",
                        "Gunung Rante Mario",
                        "Gunung Slamet",
                    ],
                    'Pasal 32 ayat (1) Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 menyebutkan bahwa “Negara memajukan kebudayaan nasional Indonesia di tengah peradaban dunia dengan menjamin kebebasan masyarakat dalam memelihara dalam mengembangkan nilai-nilai budayanya”. Sebutkan tarian tradisional dari Provinsi Aceh!' => [
                        "Tari Laweut",
                        "Tari Likok Pulo",
                        "Tari Pho",
                        "Tari Rabbani Wahed",
                        "Tari Ranup lam Puan",
                        "Tari Rapa'i Geleng",
                        "Tari Rateb Meuseukat",
                        "Tari Ratoh Duek",
                        "Tari Seudati",
                        "Tari Tarek Pukat",
                        "Tari Saman",
                        "Tari Bines",
                        "Tari Didong",
                        "Tari Guel",
                        "Tari Munalu",
                        "Tari Turun Ku Aih Aunen",
                        "Tari Mesekat",
                        "Tari Pelabat",
                        "Tari Landok Alun",
                        "Tari Ula-ula Lembing",
                        "Tari Landok Sampot",
                        "Tari Dampeng",
                        "Tari Nandong",

                    ],
                    'Sebutkan gambar pahlawan nasional yang ada di mata uang rupiah Indonesia!' => [
                        "100.000 : Ir. Soekarno dan Drs. Mohammad Hatta",
                        "50.000 : Djuanda Kartawidjaja",
                        "20.000 : Sam Ratulangi",
                        "10.000 : Frans Kaisiepo",
                        "5.000 : Idham Chalid",
                        "2.000 : M.H Thamrin",
                        "1.000 : Tjut Meutia",
                        "1.000 (Logam) : I Ketut Pudja",
                        "500 (Logam) : TB Simatupang",
                        "200 (Logam) : Tjipto Mangunkusumo",
                        "100 (Logam) : Ir. Herman Johannes",
                    ],
                ],
                'Nasional dan Internasional' => [
                    'Perhimpunan Bangsa-Bangsa Asia Tenggara (ASEAN) didirikan pada tahun 1967. Sebutkan anggota negara ASEAN saat ini?' => [
                        "Brunei Darussalam",
                        "Indonesia",
                        "Kamboja",
                        "Laos",
                        "Malaysia",
                        "Myanmar",
                        "Filipina",
                        "Singapura",
                        "Thailand",
                        "Vietnam",
                        "Timor Leste",


                    ],
                    'Pekan Olahraga Nasional 2024 disingkat dengan PON XXI/PON ACEH-SUMUT 2024 penyelenggaraan ke-21 yang merupakan ajang multi-olahraga nasional utama berlangsung dari 8 s.d 20 September 2024 dengan Aceh dan Sumatera Utara sebagai tuan rumah. Sebutkan 10 provinsi teratas yang mendapatkan medali emas terbanyak pada penyelenggaraan PON XXI Aceh-Sumut 2024? ' => [
                        "Jawa Barat",
                        "DKI Jakarta",
                        "Jawa Timur",
                        "Sumatera Utara",
                        "Jawa Tengah",
                        "Aceh",
                        "Bali",
                        "Kalimantan Timur",
                        "DIY",
                        "Lampung",


                    ],
                    'Organisasi Kerja Sama Islam (OKI) didirikan berdasarkan pertemuan tingkat tinggi di Rabat, Maroko, pada 25 September 1969 setelah insiden pembakaran bagian dari Masjid Al-Aqsa pada 21 Agustus 1969. Sebutkan Negara anggota OKI yang berasal di Asia dari tahun 1969-1972!' => [
                        "Yordania",
                        "Afghanistan",
                        "Uni Emirat Arab (UEA)",
                        "Indonesia",
                        "Uzbekistan",
                        "Iran",
                        "Pakistan",
                        "Bahrain",
                        "Arab Saudi",
                        "Suriah",
                        "Oman",
                        "Palestina",
                        "Qatar",
                        "Kuwait",
                        "Lebanon",
                        "Malaysia",
                        "Yaman",


                    ],
                    '4.	Kawasan Asia Tenggara memiliki kerjasama perdagangan bebas yang disebut AFTA (ASEAN Free Trade Area). Sebutkan daftar negara-negara anggota organisasi AFTA!' => [
                        "Yordan",
                        "Indonesia",
                        "Malaysia",
                        "Thailand",
                        "Singapura",
                        "Filipina",
                        "Vietnam",
                        "Laos",
                        "Kamboja",
                        "Myanmar",
                        "Brunei Darussalam",
                        "Timor Leste",
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
