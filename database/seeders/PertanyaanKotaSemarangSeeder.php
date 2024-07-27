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
                    'Pasal 28 A sampai dengan 28 J tentang hak-hak asasi manusia, sebutkan hak asasi manusia yang diatur dalam Undang-Undang Dasar Negara Republik Indonesia Tahun 1945?' => [
                        'Hak untuk hidup',
                        'Hak untuk membentuk keluarga',
                        'Hak untuk mengembangkan diri',
                        'Hak untuk pengakuan yang sama dihadapan hukum',
                        'Hak untuk kebebasan memeluk agama',
                        'Hak untuk berkomunikasi',
                        'Hak untuk perlindungan diri pribadi',
                        'Hak untuk hidup sejahtera lahir dan batin',
                        'Hak untuk perlindungan terhadap perlakuan diskriminatif, pemajuan, penegakan, dan pemenuhan HAM adalah tanggung jawab negara, terutama pemerintah',
                        'Hak untuk berkewajiban menghargai hak asasi orang lain serta tunduk kepada pembatasan yang ditetapkan Undang-Undang',
                    ],
                    'Pasal 33 ayat (3) perekonomian negara disusun demokrasi ekonomi, sebutkan tokoh-tokoh pendiri bangsa yang terlibat merumuskan sistem perekonomian di Indonesia yang termasuk anggota PPKI?' => [
                        'Ir. Soekarno',
                        'Drs. Moh. Hatta',
                        'Prof. Mr. Dr. Soepomo',
                        'KRT Radjiman Wedyodiningrat',
                        'R. P. Soeroso',
                        'Soetardjo Kartohadikoesoemo',
                        'Kiai Abdoel Wachid Hasjim',
                        'Ki Bagus Hadikusumo',
                        'Otto Iskandardinata',
                        'Abdoel Kadir',
                        'Pangeran Soerjohamidjojo',
                        'Pangeran Poerbojo',
                        'Dr. Mohammad Amir',
                        'Mr. Abdul Abbas',
                        'Teuku Mohammad Hasan',
                        'Dr. GSSJ Ratulangi',
                        'Andi Pangerang',
                        'A.A. Hamidan',
                        'I Goesti Ketoet Poedja',
                        'Mr. Johannes Latuharhary',
                        'Drs. Yap Tjwan Bing',
                    ],
                    'TAP MPRS Nomor XXV/MPRS/1966 tentang Pembubaran Partai Komunis Indonesia. Sebutkan nama-nama pahlawan yang gugur dalam peristiwa G30S/PKI!' => [
                        'Jenderal Ahmad Yani',
                        'Letjen Suprapto ',
                        'Letjen S. Parman',
                        'Letjen M.T. Haryono',
                        'Mayjen D. I. Panjaitan',
                        'Mayjen Sutoyo Siswomiharjo',
                        'Brigjen Katamso',
                        'Kapten Pierre Tendean',
                        'A.I.P. II K. S. Tubun',
                        'Kolonel Sugiyono',
                    ],
                    'Sebutkan nomor dan tahun TAP MPRS/TAP MPR yang dikategorikan dalam pasal 4 Ketetapan MPR Nomor I/MPR/2003 yang dinyatakan tetap berlaku sampai dengan terbentuknya Undang-Undang? ' => [
                        'TAP MPRS Nomor XXIX/MPRS/1966 (Nomor 29 tahun 1966)',
                        'TAP MPR Nomor XI/MPR/1998 (Nomor 11 tahun 1998)',
                        'TAP MPR Nomor XV/MPR/1998 (Nomor 15 tahun 1998)',
                        'TAP MPR Nomor III/MPR/2000 (Nomor 3 tahun 2000)',
                        'TAP MPR Nomor V/MPR/2000 (Nomor 5 tahun 2000)',
                        'TAP MPR Nomor VI/MPR/2000 (Nomor 6 tahun 2000)',
                        'TAP MPR RI Nomor VII/MPR/2000 (Nomor 7 tahun 2000)',
                        'TAP MPR Nomor VI/MPR/2001 (Nomor 6 tahun 2001)',
                        'TAP MPR Nomor VII/MPR/2001 (Nomor 7 tahun 2001)',
                        'Ketetapan MPR Nomor VIII/MPR/2001 (Nomor 8 tahun 2001)',
                        'Ketetapan MPR Nomor IX/MPR/2001 (Nomor 9 tahun 2001)',
                    ],
                ],
                'NKRI & Bhinneka Tunggal Ika' => [
                    'Negara Kesatuan Republik Indonesia (NKRI) dibagi menjadi tiga wilayah berdasarkan zona waktu yakni Waktu Indonesia Barat, Waktu Indonesia Tengah maupun Waktu Indonesia Timur. Sebutkan provinsi yang termasuk dalam Waktu Indonesia Bagian Tengah?' => [
                        'Kalimantan Utara ',
                        'Kalimantan Timur',
                        'Kalimantan Selatan',
                        'Bali',
                        'Nusa Tenggara Timur',
                        'Nusa Tenggara Barat',
                        'Nusa Tenggara Barat',
                        'Sulawesi Barat',
                        'Sulawesi Tengah',
                        'Sulawesi Selatan',
                        'Sulawesi Utara',
                        'Gorontalo',
                    ],
                    'Indonesia dibagi menjadi tiga wilayah berdasarkan zona waktu yakni Waktu Indonesia Barat, Waktu Indonesia Tengah maupun Waktu Indonesia Timur. Sebutkan nama-nama kota yang termasuk dalam Waktu Indonesia Barat?' => [
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
                    'Berdasarkan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 Pasal 32 ayat (2) negara menghormati dan memelihara Bahasa daerah sebagai kekayaan budaya nasional. Sebutkan dialek bahasa yang berada di jawa tengah?' => [
                        'Rumpun dialek Banyumas',
                        'Dialek Pekalongan',
                        'Dialek Banyumas',
                        'Dialek Peranakan',
                        'Dialek Pemalang',
                        'Dialek Tegal',
                        'Dialek Kedu',
                        'Dialek Bagelan',
                        'Dialek Suriname',
                        'Dialek Mataram',
                        'Dialek Blora',
                        'Dialek Pantai Utara',
                        'Dialek Surakarta',
                        'Dialek Semarang',
                    ],
                    'Berdasarkan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 Pasal 32 ayat (1) negara memajukan kebudayaan nasional Indonesia di tengah peradaban dunia dengan menjamin kebebasan masyarakat dalam memelihara dan mengembangkan nilai—nilai budayanya. Sebutkan lagu daerah yang berasal dari Jawa Tengah?' => [
                        'Lir-ilir',
                        'Cublak-cublak Suweng',
                        'Jenang Gulo',
                        'Jangkrik Genggong',
                        'Yen Ing Tawang Ono Lintang',
                        'Turi-Turi Putih, Padang Wulan',
                        'Andhe-Andhe Lumut, Bapak Pucung',
                        'Jamuran',
                        'Tul Jaenak',
                        'Gambang Semarang',
                        'Jaranan',
                        'Gek Kepriye',
                        'Gambang Suling',
                        'Gundhul Pacul',
                        'Dhondong Apa Salak',
                    ],
                ],
                'Pengetahuan Umum' => [
                    'Bandar udara sebagai tempat pesawat udara mendarat dan lepas landas. Sebutkan nama Bandar udara yang berada di pulau Jawa!' => [
                        'Abdulrachman Saleh',
                        'Adisucipto',
                        'Adisumarmo',
                        'Ahmad Yani',
                        'Blimbingsari',
                        'Dhoho',
                        'Halim Perdanakusuma',
                        'Husein Sastranegara',
                        'Jenderal Besar Soedirman',
                        'Juanda',
                        'Kertajati',
                        'Soekarno–Hatta',
                        'Yogyakarta Internasional Airport	',
                        'Pondok Cabe',
                        'Pulau Panjang',
                        'Tanjung Lesung',
                        'Wiriadinata',
                    ],
                    'Sebutkan nama-nama Ketua MPRS/MPR RI?' => [
                        'Chaerul Saleh ',
                        'Wilujo Puspojudo ',
                        'Abdul Haris Nasution ',
                        'Idham Chalid ',
                        'Adam Malik',
                        'Daryatmo',
                        'Amir Machmud',
                        'Kharis Suhud',
                        'Wahono',
                        'Harmoko',
                        'Amien Rais',
                        'Hidayat Nur Wahid',
                        'Taufiq Kiemas',
                        'Sidarto Danusubroto',
                        'Zulkifli Hasan',
                        'Bambang Soesatyo',
                    ],
                    'Sebutkan Wakil Presiden Republik Indonesia Dari tahun 1945!' => [
                        'Drs. Mohammad Hatta',
                        'Sri Sultan Hamengkubuwono IX',
                        'H. Adam Malik',
                        'Jenderal Umar Wirahadikusumah',
                        'Letjend Sudharmono, S.H',
                        'Jenderal Try Sutrisno',
                        'Prof. Dr. Ing. Bacharuddin Jusuf Habibie',
                        'Megawati Soekarnoputri',
                        'Prof. Dr. H. Hamzah Haz',
                        'Drs. H. Muhammad Jusuf Kalla',
                        'Prof. Dr. H. Boediono, M.Ec',
                        'Drs. H. Muhammad Jusuf Kalla',
                        'K. H. Ma’ruf Amin',
                    ],
                    'Sebutkan nama-nama Gubernur Provinsi Jawa Tengah dari tahun 1893 sampai dengan 2024?' => [
                        'Suroso ',
                        'Wongsonegoro',
                        'Budijono',
                        'Mangunegara',
                        'Sukardji Mangunkusumo',
                        'Hadisubeno Sosrowerdojo',
                        'Mokhtar',
                        'Munadi',
                        'Supardjo Rustam',
                        'Muhammad Ismail',
                        'Suwardi Prawiranegara',
                        'Mardiyanto',
                        'Ali Mufiz',
                        'Bibit Waluyo',
                        'Ganjar Pranowo',
                    ],
                ],
                'Nasional & Internasional' => [
                    'Sebutkan negara-negara peserta Konferensi Asia Afrika (KAA) yang diselenggarakan di Bandung pada Tahun 1955?' => [
                        'Afghanistan',
                        'Indonesia',
                        'Pakistan  ',
                        'Birma',
                        'Filipina',
                        'Kamboja',
                        'Irak',
                        'Iran',
                        'Arab Saudi',
                        'Ceylon',
                        'Jepang',
                        'Sudan',
                        'Republik Rakyat Tiongkok',
                        'Yordania',
                        'Suriah',
                        'Laos',
                        'Thailand',
                        'Mesir',
                        'Libanon',
                        'Turki',
                        'Ethiopia',
                        'Liberia',
                        'Vietnam (Utara)',
                        'Vietnam (Selatan)',
                        'Pantai Emas',
                        'Libya',
                        'India',
                        'Nepal',
                        'Yaman',
                    ],
                    'Perhimpunan Bangsa-Bangsa Asia Tenggara (ASEAN) didirikan pada tahun 1967. Sebutkan anggota negara ASEAN saat ini?' => [
                        'Brunei Darussalam',
                        'Indonesia',
                        'Kamboja',
                        'Laos',
                        'Malaysia',
                        'Myanmar',
                        'Filipina',
                        'Singapura',
                        'Thailand',
                        'Vietnam',
                        'Timor Leste',
                    ],
                    'Sebutkan daftar negara yang termasuk dalam Persatuan Bangsa-Bangsa (PBB) yang berawalan dari huruf A?' => [
                        'Afrika Tengah',
                        'Afrika Selatan',
                        'Afghanistan',
                        'Albania',
                        'Aljazair',
                        'Andorra',
                        'Angola',
                        'Antigua dan Barbuda',
                        'Arab Saudi',
                        'Argentina',
                        'Armenia',
                        'Australia',
                        'Austria',
                        'Azerbaijan',
                        'Amerika Serikat',
                    ],
                    'Sebutkan organisasi masyarakat kebangsaan yang berperan mendorong kemerdekaan indonesia?' => [
                        'Budi Utomo',
                        'Sarekat Islam',
                        'Indische Partij',
                        'Perhimpunan Indonesia',
                        'Partai Nasional Indonesia (PNI)',
                        'Gerakan Pemuda',
                        'Muhammadiyah',
                        'Nahdlatul Ulama (NU)',
                        'Gerakan Wanita Indonesia',
                        'Gerakan Rakyat Indonesia (Gerindo)',
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
