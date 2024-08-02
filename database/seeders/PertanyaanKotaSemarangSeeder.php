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
                    'BAB II Undang-undang Dasar Negara Republik Indonesia Tahun 1945 mengatur tentang MPR. Sebutkan Ketua MPR RI dari masa ke masa! ' => [
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
                    'Berdasarkan Surat Edaran Gubernur Bali Nomor 7 Tahun 2023, Dispensasi Hari Raya Suci Hindu di Bali Tahun 2024. Sebutkan nama-nama Hari Raya Suci Hindu di Bali berdasarkan SE tersebut?' => [
                        'Siwaratri',
                        'Penampahan Galungan',
                        'Umanis Galungan',
                        'Hari Raya Suci Penampahan Kuningan',
                        'Hari Raya Suci Kuningan',
                        'Hari Raya Suci Tawur Kesanga',
                        'Hari Raya Suci Nyepi Caka 1946',
                        'Hari Raya Suci Ngembak Geni',
                        'Hari Raya Suci Saraswati',
                        'Hari Raya Suci Pagerwesi',

                    ],
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
                    'Sebutkan pasal-pasal pada Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 yang tidak mengalami perubahan?' => [
                        'Pasal 1 ayat (1)',
                        'Pasal 2 ayat (3)',
                        'Pasal 4 ayat (1)',
                        'Pasal 4 ayat (2)',
                        'Pasal 5 ayat (2)',
                        'Pasal 10',
                        'Pasal 12',
                        'Pasal 13 ayat (1)',
                        'Pasal 17 ayat (1)',
                        'Pasal 22 ayat (1)',
                        'Pasal 22 ayat (2)',
                        'Pasal 22 ayat (3)',
                        'Pasal 25',
                        'Pasal 26 ayat (1)',
                        'Pasal 27 ayat (1)',
                        'Pasal 27 ayat (2)',
                        'Pasal 28',
                        'Pasal 29 ayat (1)',
                        'Pasal 29 ayat (2)',
                        'Pasal 33 ayat (1)',
                        'Pasal 33 ayat (2)',
                        'Pasal 33 ayat (3)',
                        'Pasal 35',
                        'Pasal 36',

                    ],
                ],
                'NKRI & Bhinneka Tunggal Ika' => [
                    'Berdasarkan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 Pasal 18 ayat (1) Negara Kesatuan Republik Indonesia dibagi atas daerah-daerah provinsi dan daerah provinsi itu dibagi atas kabupaten dan kota, yang tiap-tiap provinsi, kabupaten, dan kota itu mempunyai pemerintahan daerah, yang diatur dengan undang—undang. Sebutkan kecamatan yang berada di kabupaten Tabanan di Bali?' => [
                        'Baturiti',
                        'Kediri',
                        'Kerambitan',
                        'Marga',
                        'Penebel',
                        'Pupuan',
                        'Selemadeg',
                        'Selemadeg barat',
                        'Selemadeg timur',
                        'Tabanan',

                    ],
                    'Negara Kesatuan Republik Indonesia (NKRI) dibagi menjadi tiga wilayah berdasarkan zona waktu yakni Waktu Indonesia Barat, Waktu Indonesia Tengah maupun Waktu Indonesia Timur. Sebutkan provinsi yang termasuk dalam Waktu Indonesia Bagian Tengah?' => [
                        'Kalimantan Utara',
                        'Kalimantan Timur',
                        'Kalimantan Selatan',
                        'Bali',
                        'Nusa Tenggara Timur',
                        'Nusa Tenggara Barat',
                        'Sulawesi Barat',
                        'Sulawesi Tengah',
                        'Sulawesi Selatan',
                        'Sulawesi Utara',
                        'Gorontalo',

                    ],
                    'Sebutkan nama-nama Gubernur/Penjabat Gubernur Provinsi Bali dari tahun 1950 sampai dengan 2024?' => [
                        'Anak Agung Bagus Sutedja',
                        'I Gusti Bagus Oka',
                        'I Gusti Putu Martha',
                        'Soekarmen',
                        'Ida Bagus Mantra',
                        'Ida Bagus Oka',
                        'Dewa Made Beratha',
                        'I Made Mangku Pastika',
                        'I Wayan Koster',
                        'Ahim Abdurahim',
                        'Hamdani',
                        'Sang Made Mahendra Jaya',

                    ],
                    'Sebutkan nama-nama selat yang ada di Indonesia?' => [
                        'Selat Malaka',
                        'Selat Karimata',
                        'Selat Bangka',
                        'Selat Berhala',
                        'Selat Siberut',
                        'Selat Sunda',
                        'Selat Madura',
                        'Selat Bali',
                        'Selat Badung',
                        'Selat Lombok',
                        'Selat Alas',
                        'Selat Sape',
                        'Selat Flores',
                        'Selat Alor',
                        'Selat Pantar',
                        'Selat Ombai',
                        'Selat Makassar',
                        'Selat Obi',
                        'Selat Jailolo',
                        'Selat Saparua',
                        'Selat Dampir',
                    ],
                ],
                'Pengetahuan Umum' => [
                    'Sebutkan nama-nama kerajaan yang ada di Bali!' => [
                        'Kerajaan Bedahulu',
                        'Kerajaan Buleleng',
                        'Kerajaan Karangasem',
                        'Kerajaan Bali',
                        'Kerajaan Bangli',
                        'Kerajaan Gelgel',
                        'Kerajaan Gianyar',
                        'Kerajaan Jembrana',
                        'Kerajaan Klungkung',
                        'Kerajaan Mengwi',

                    ],
                    'Berdasarkan Peraturan Daerah Provinsi Bali Nomor 4 Tahun 2019 tentang Desa Adat di bali pada Pasal 2, pengaturan desa adat berasaskan?' => [
                        'Kawigunan atau kemanfaatan',
                        'Padumpada atau keadilan',
                        'Manyama braya atau kekeluargaan',
                        'Gilik-saguluk atau kebersamaan',
                        'Parasparo atau musyawarah',
                        'Salunglung sabayantaka atau kegotongroyongan',
                        'Sarwaada atau anekatwa atau keberagaman',
                        'Kesetaraan',
                        'Bali mawacara atau kesatuan Bali',
                        'Kemandirian',
                        'Sareng-sareng atau partisipasi',
                        'Pemberdayaan',
                        'Keberlanjutan',


                    ],
                    'Sebutkan jenis-jenis tanaman asli Indonesia?' => [
                        'Bunga Rafflesia',
                        'Bunga Bangkai',
                        'Kantong Semar',
                        'Anggrek',
                        'Pohon Meranti',
                        'Rotan',
                        'Anggrek Bulan',
                        'Sagu',
                        'Kayu Cendana',
                        'Kayu Eboni',
                        'Sawo Kecik',
                        'Kepuh',
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
                ],
                'Nasional dan Internasional' => [
                    'Beberapa negara dan Uni Eropa menjalin hubungan multilateral lewat sebuah forum bernama Group of Twenty atau G20. Sebutkan negara-negara yang tergabung dalam G20?' => [
                        'Afrika Selatan',
                        'Amerika Serikat',
                        'Arab Saudi',
                        'Argentina',
                        'Australia',
                        'Brasil',
                        'India',
                        'Indonesia',
                        'Inggris',
                        'Italia',
                        'Jepang',
                        'Jerman',
                        'Kanada',
                        'Meksiko',
                        'Korea Selatan',
                        'Rusia',
                        'Perancis',
                        'Tiongkok',
                        'Turki',
                        'Uni Eropa',

                    ],
                    'World Water Forum (WWF) ke-10 diselenggarakan pada tanggal 18-25 Mei 2024 di Nusa Dua, Bali, Indonesia. Sebutkan negara-negara yang hadir dalam acara tersebut?' => [
                        'Arab Saudi',
                        'Australia',
                        'Belanda',
                        'Brazil',
                        'Brunei Darussalam',
                        'Fiji',
                        'Filipina',
                        'Hongaria',
                        'Italia',
                        'Jepang',
                        'Kepulauan Solomon',
                        'Kosta Rika',
                        'Malaysia',
                        'Maroko',
                        'Mesir',
                        'Palau',
                        'Palestina',
                        'Papua Nugini',
                        'Perancis',
                        'Portugal',
                        'Republik Korea',
                        'Republik Rakyat Tiongkok',
                        'Selandia Baru',
                        'Senegal',
                        'Singapura',
                        'Tajikistan',
                        'Thailand',
                        'Timor Leste',
                        'Tunisia',
                        'Uni Emirat Arab',
                        'Vanuatu',
                        'Democratic Republic of the Congo',
                        'Republic of the Congo',

                    ],
                    'Sebutkan daftar negara yang termasuk dalam Persatuan Bangsa-Bangsa (PBB) yang berawalan dari huruf B?' => [
                        'Bahama',
                        'Bahrain',
                        'Bangladesh',
                        'Barbados',
                        'Belanda',
                        'Belarus',
                        'Belgia',
                        'Belize',
                        'Benin',
                        'Bhutan',
                        'Bolivia',
                        'Bosnia dan Herzegovina',
                        'Botswana',
                        'Brasil',
                        'Brunei Darussalam',
                        'Bulgaria',
                        'Burkina Faso',
                        'Burundi',

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
