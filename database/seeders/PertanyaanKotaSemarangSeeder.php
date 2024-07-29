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
                    'Berdasarkan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 Pasal 18 ayat (1) Negara Kesatuan Republik Indonesia dibagi atas daerah-daerah provinsi dan daerah provinsi itu dibagi atas kabupaten dan kota, yang tiap-tiap provinsi, kabupaten, dan kota itu mempunyai pemerintahan daerah, yang diatur dengan undang—undang. Provinsi Sumatera Utara mempunyai 25 kabupaten. Sebutkan nama-nama kabupaten di Sumatera Utara?' => [
                        'Kabupaten Asahan',
                        'Kabupaten Batu Bara',
                        'Kabupaten Dairi',
                        'Kabupaten Deli Serdang',
                        'Kabupaten Humbang Hasundutan',
                        'Kabupaten Karo',
                        'Kabupaten Labuhanbatu',
                        'Kabupaten Labuhanbatu Selatan',
                        'Kabupaten Labuhanbatu Utara',
                        'Kabupaten Langkat',
                        'Kabupaten Mandailing Natal',
                        'Kabupaten Nias',
                        'Kabupaten Nias Barat',
                        'Kabupaten Nias Selatan',
                        'Kabupaten Nias Utara',
                        'Kabupaten Padang Lawas',
                        'Kabupaten Padang Lawas Utara',
                        'Kabupaten Pakpak Bharat',
                        'Kabupaten Samosir',
                        'Kabupaten Serdang Bedagai',
                        'Kabupaten Simalungun',
                        'Kabupaten Tapanuli Selatan',
                        'Kabupaten Tapanuli Tengah',
                        'Kabupaten Tapanuli Utara',
                        'Kabupaten Toba',
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
                    'Sebutkan fraksi dan kelompok yang ada di MPR periode 2019-2024?' => [
                        'PDIP',
                        'Gerindra',
                        'Golkar',
                        'NasDem',
                        'PKB',
                        'Demokrat',
                        'PKS',
                        'PAN',
                        'PPP',
                        'Kelompok DPD',
                    ],
                ],
                'NKRI & Bhinneka Tunggal Ika' => [
                    'Berdasarkan Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 Pasal 18 ayat (4) Gubernur, Bupati, dan Walikota masing-masing sebagai kepala pemerintah daerah provinsi, kabupaten, dan kota dipilih secara demokratis. Sebutkan nama-nama Gubernur Provinsi Sumatera Utara?' => [
                        'Sutan Mohammad Amin Nasution',
                        'Ferdinand Lumban Tobing',
                        'Sarimin Reksodiharjo',
                        'Abdul Hakim',
                        'Radjiman Nasution',
                        'Raja Djundjungan Lubis',
                        'Eny Karim',
                        'Ulung Sitepu',
                        'PR. Telaumbanua',
                        'Marah Halim Harahap',
                        'Edward Waldemar Pahala Tambunan',
                        'Kaharuddin Nasution',
                        'Raja Inal Siregar',
                        'Tengku Rizal Nurdin',
                        'Rudolf Pardede',
                        'Syamsul Arifin',
                        'Gatot Pujo Nugroho',
                        'Tengku Erry Nuradi',
                        'R. Sabrina',
                        'Eko Subowo',
                        'Edy Rahmayadi',
                    ],
                    'Indonesia dibagi menjadi tiga wilayah berdasarkan zona waktu yakni Waktu Indonesia Barat, Waktu Indonesia Tengah maupun Waktu Indonesia Timur. Sebutkan nama-nama provinsi yang termasuk dalam Waktu Indonesia Barat?' => [
                        'Aceh',
                        'Sumatera Utara',
                        'Sumatera Barat',
                        'Riau',
                        'Kepulauan Riau',
                        'Kepulauan Bangka Belitung',
                        'Jambi',
                        'Bengkulu',
                        'Sumatera Selatan',
                        'Lampung',
                        'Banten',
                        'DKI Jakarta',
                        'Jawa Barat',
                        'Jawa Tengah',
                        'Daerah Istimewa Yogyakarta',
                        'Jawa Timur',
                        'Kalimantan Barat',
                        'Kalimantan Tengah',
                    ],
                    'Sebutkan nama-nama Ibukota Provinsi di Pulau Sumatera!' => [
                        'Banda Aceh',
                        'Medan',
                        'Palembang',
                        'Padang',
                        'Bengkulu',
                        'Pekanbaru',
                        'Tanjung Pinang',
                        'Jambi',
                        'Bandar Lampung',
                        'Pangkal Pinang',
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
                    'Sebutkan Kode Plat Nomor Kendaraan di pulau Sumatera!' => [
                        'BA ',
                        'BB',
                        'BD',
                        'BE',
                        'BG',
                        'BH',
                        'BK',
                        'BL',
                        'BM',
                        'BN',
                        'BP',
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
                    'Sebutkan nama-nama gunung yang berada di Sumatera Utara?' => [
                        'Gunung Alang-alang',
                        'Gunung Kulabu',
                        'Gunung Sihabuhabu',
                        'Gunung Hutapanjang',
                        'Gunung Lubuk Raya',
                        'Gunung Pangulubao',
                        'Gunung Sibayak',
                        'Gunung Sibualbuali',
                        'Gunung Sibuatan',
                        'Gunung Sinabung',
                        'Gunung Sorik Marapi',
                        'Gunung Toba',
                    ],
                ],
                'Nasional dan Internasional' => [
                    'Sebutkan daftar negara yang termasuk dalam Persatuan Bangsa-Bangsa (PBB) yang berawalan dari huruf M?' => [
                        'Madagaskar',
                        'Maladewa',
                        'Malawi',
                        'Malaysia',
                        'Mali',
                        'Malta',
                        'Maroko',
                        'Mauritania',
                        'Mauritius',
                        'Mesir',
                        'Mexico',
                        'Mikronesia (Negara Federasi)',
                        'Monako',
                        'Mongolia',
                        'Montenegro',
                        'Mozambik',
                        'Myanmar',
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
                    'Sebutkan mata uang negara ASEAN!' => [
                        'Rupiah',
                        'Ringgit',
                        'Dollar Singapura',
                        'Baht Thailand',
                        'Peso Filipina',
                        'Dolar Brunei',
                        'Donga',
                        'Kip',
                        'Kyat',
                        'Riel',
                        'Kina Timor',
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
