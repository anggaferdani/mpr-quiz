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
                    'Rumusan Pasal 23B Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 menyebutkan macam dan harga mata uang ditetapkan dengan undang-undang. Mata uang Republik Indonesia adalah rupiah. Bentuk rupiah bisa dalam koin dan uang kertas. Uang Kertas Rupiah sudah ada sejak tahun 1946. Sebutkan hewan-hewan yang pernah diabadikan pada gambar depan dan gambar belakang uang Kertas Republik Indonesia dari tahun 1946-sekarang!' => [
                        "Orang Utan",
                        "Rusa Jawa",
                        "Badak Jawa",
                        "Buaya",
                        "Tupai",
                        "Harimau Sumatera",
                        "Gajah",
                        "Komodo",
                        "Banteng",
                        "Kijang Timor",
                        "Kakatua",
                        "Kuntul Besar",
                        "Elang Laut",
                        "Burung Madu Pengantin",
                        "Rangkong Badak",
                        "Burung Cendrawasih",
                        "Kuau Raja",
                        "Ayam Hutan Hijau",




                    ],
                    'MPR merupakan lembaga negara yang di konseptualisasikan sebagai penjelmaan dari rakyat. Pada perkembangannya MPR menjadi rumah kebangsaan dan pilar kedaulatan rakyat Indonesia. Dalam sejarahnya MPRS/MPR mempunyai pimpinan MPRS/MPR. Sebutkan nama-nama ketua MPRS/MPR!' => [
                        "Chaerul Saleh",
                        "Wilujo Puspojudo",
                        "Abdul Haris Nasution",
                        "Idham Chalid",
                        "Adam Malik",
                        "Daryatmo",
                        "Amir Machmud",
                        "Kharis Suhud",
                        "Wahono",
                        "Harmoko",
                        "Amien Rais",
                        "Hidayat Nur Wahid",
                        "Taufiq Kiemas",
                        "Sidarto Danusubroto",
                        "Zulkifli Hasan",
                        "Bambang Soesatyo",
                        "Ahmad Muzani",


                    ],

                    'Reformasi yang terjadi pada tahun 1998, salah satu tuntutannya ialah adanya desakan mahasiswa untuk melakukan amandemen Undang-Undang Dasar Negara Republik Indonesia Tahun 1945. Akhirnya MPR melakukan amandemen Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 pada tahun 1999, 2000, 2001, dan 2002. Sebutkan pasal-pasal yang diamandemen oleh MPR yang dilakukan pada tahun 2000!' => [
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
                    'Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 dilakukan amandemen oleh MPR pada tahun 1999, 2000, 2001, dan 2002. Sebutkan pasal-pasal yang diamandemen oleh MPR pada tahun 2002!' => [
                        "Pasal 2 ayat (1)",
                        "Pasal 6A ayat (4)",
                        "Pasal 8 ayat (3)",
                        "Pasal 11 ayat (1)",
                        "Pasal 16",
                        "Pasal 23B",
                        "Pasal 23D",
                        "Pasal 24 Ayat (3)",
                        "BAB XIII",
                        "Pasal 31 Ayat (1), (2), (3), (4), dan (5)",
                        "Pasal 32 ayat (1) dan (2)",
                        "BAB XIV",
                        "Pasal 33 ayat (4) dan (5)",
                        "Pasal 34 ayat (1), (2), (3), dan (4)",
                        "Pasal 37 Ayat (1), (2), (3), (4), dan (5)",
                        "Aturan Peralihan Pasal I, II, dan III",
                        "Aturan Tambahan Pasal I dan II",
                    ],
                ],
                'NKRI & Bhinneka Tunggal Ika' => [
                    'Sebutkan kerajaan/kesultanan yang berada di Pulau Sulawesi!' => [
                        "Kerajaan Bantaeng",
                        "Kerajaan Banggai",
                        "Kesultanan Buton",
                        "Kesultanan Bone",
                        "Kesultanan Gowa",
                        "Kesultanan Gorontalo",
                        "Kesultanan Bolango",
                        "Kesultanan Makassar",
                        "Kerajaan Konawe",
                        "Kerajaan Toli-Toli",
                        "Kerajaan Muna",
                        "Kerajaan Buol",
                        "Kerajaan Wajo",
                        "Kedatuan Luwu",
                        "Kerajaan Tallo",
                        "Kerajaan Palu",
                        "Kerajaan Parigi",
                        "Kerajaan Soppeng",
                        "Kerajaan Bungku",
                        "Kerajaan Siang",
                        "Kerajaan Bolaang Mongondow",
                        "Kerajaan Tawaeli",
                        "Kerajaan Balanipa",
                        "Kerajaan Banggae",
                        "Kerajaan Binuang",
                        "Kerajaan Alitta",
                        "Kerajaan Banawa",
                        "Kerajaan Bolangitang",


                    ],
                    'Pahlawan nasional bukan hanya dari kalangan prajurit atau tokoh politik yang berjasa di masa penjajahan. Namun juga ada dari kalangan santri dengan latar belakang pondok pesantren. Sebutkan tokoh-tokoh pergerakan nasional yang berasal dari santri?' => [
                        "KH Hasyim Asy'ari",
                        "KH Wahid Hasyim",
                        "KH Zainul Arifin Pohan",
                        "KH Zainal Mustofa",
                        "H Andi Mappanyukki, Raja Bone",
                        "H Andi Djemma, Raja Luwu",
                        "KH Wahab Chasbullah",
                        "KH As'ad Syamsul Arifin",
                        "KH Idham Chalid",
                        "KH Sam'un",
                        "KH Masjkur",



                    ],
                    'Indonesia adalah negara yang beragam budaya dan suku bangsa seperti yang tertera dalam Undang-Undang Dasar Negara Republik Indonesia Tahun 1945. Sebutkan suku-suku yang terdapat di Pulau Sulawesi!' => [
                        "Suku Bugis",
                        "Suku Mandar",
                        "Suku Toraja",
                        "Suku Makassar",
                        "Suku Buton",
                        "Suku Minahasa",
                        "Suku Talaud",
                        "Suku Balaesang",
                        "Suku Tolaki",
                        "Suku Pattae",
                        "Suku Duri",
                        "Suku Moronene",
                        "Suku Pamona",
                        "Suku Kaili",
                        "Suku Mongondow",
                        "Suku Gorontalo",
                        "Suku Banggai",
                        "Suku Saluan",
                        "Suku Balantak",


                    ],
                    'Salah satu Pilar MPR adalah Bhinneka Tunggal Ika, yang memiliki makna “Berbeda-beda tetapi tetap satu jua”. Ini mengacu pada keberagaman etnis, budaya, agama, dan bahasa di Indonesia yang diakui dalam kerangka negara kesatuan Republik Indonesia. Salah satu provinsi yang ada di Indonesia adalah Sulawesi Utara. Sebutkan tarian-tarian khas dari Sulawesi Utara!' => [
                        "Tari Gunde",
                        "Tari Kabasaran",
                        "Tari Katrili",
                        "Tari Lenso",
                        "Tari Maengket",
                        "Tari Mane’e",
                        "Tari Tumatenden",
                        "Tari Mesalai",
                        "Tari Mokosambe",
                        "Tari Pisok",
                        "Tari Tatengesan",

                    ],
                ],
                'Pengetahuan Umum' => [
                    'Iklim tropis adalah suatu daerah yang terletak di antara garis isoterm pada bumi bagian utara dan bagian selatan. Iklim tropis ini terdapat pada posisi 23,5 derajat lintang utara, dan 23,5 derajat lintang selatan. Sebutkan negara-negara yang yang memiliki iklim tropis!' => [
                        "Indonesia",
                        "Singapura",
                        "Malaysia",
                        "Thailand",
                        "Vietnam",
                        "Filipina",
                        "Brunei Darussalam",
                        "Myanmar",
                        "Laos",
                        "Kamboja",
                        "Timor Leste",
                        "India",
                        "Sri Lanka",
                        "Brasil",
                        "Meksiko",
                        "Ekuador",
                        "Kolombia",
                        "Peru",
                        "Bolivia",
                        "Kenya",
                        "Nigeria",
                        "Tanzania",
                        "Kamerun",



                    ],
                    'Salah satu transportasi publik adalah pesawat terbang. Tempat datang dan terbangnya pesawat adalah bandar udara atau bandara. Sebutkan bandara-bandara di Indonesia yang ditetapkan sebagai Bandara Internasional!' => [
                        "Bandara Sultan Iskandar Muda",
                        "Bandara Kualanamu",
                        "Bandara Minangkabau",
                        "Bandara Sultan Syarif Kasim II",
                        "Bandara Hang Nadim",
                        "Bandara Soekarno-Hatta",
                        "Bandara Halim Perdanakusuma",
                        "Bandara Kertajati",
                        "Bandara Kulonprogo",
                        "Bandara Juanda",
                        "Bandara I Gusti Ngurah Rai",
                        "Bandara Zainuddin Abdul Madjid",
                        "Bandara Sultan Aji Muhammad Sulaiman",
                        "Bandara Sultan Hasanuddin",
                        "Bandara Sam Ratulangi",
                        "Bandara Sentani",
                        "Bandara Komodo",

                    ],
                    'Pulau Sulawesi menjadi tempat bagi banyak hewan yang khas atau endemik. Ada banyak hewan khas pulau Sulawesi, mulai dari burung, primata, hingga mamalia. Sebutkan hewan-hewan endemik yang ada di Sulawesi!' => [
                        "Anoa",
                        "Burung Maleo",
                        "Tarsius",
                        "Monyet Hitam atau Yaki",
                        "Burung Serak",
                        "Kuskus Kerdil",
                        "Burung Srigunting Jambul Rambut",
                        "Babirusa",
                        "Burung Rangkong",
                        "Musang Sulawesi",


                    ],
                    'Repubilk Indonesia yang di proklamirkan oleh Soekarno-Hatta pada tanggal 17 Agustus 1945 menjadikan Indonesia sebagai negara yang Merdeka. Susunan pemerintahan yang dianut oleh Indonesia adalah presidensial yang dikepalai oleh Presien dan Wakil Presiden. Sebutkan nama-nama Wakil Presiden Republik Indonesia dari tahun 1945 sampai sekarang!' => [
                        "Drs. Mohammad Hatta",
                        "Sri Sultan Hamengkubuwono IX",
                        "H. Adam Malik",
                        "Jenderal Umar Wirahadikusumah",
                        "Letjend Sudharmono, S.H.",
                        "Jenderal Try Sutrisno",
                        "Prof. Dr. Ing. Bacharuddin Jusuf Habibie",
                        "Megawati Soekarnoputri",
                        "Prof. Dr. H. Hamzah Haz",
                        "Drs. H. Muhammad Jusuf Kalla",
                        "Prof. Dr. H. Boediono, M.Ec",
                        "Drs. H. Muhammad Jusuf Kalla",
                        "K. H. Ma’ruf Amin",
                        "Gibran Rakabuming Raka",

                    ],
                ],
                'Nasional dan Internasional' => [
                    'Sebelum era Orde Baru, Indonesia telah banyak melalui masa-masa demokrasi yang mempengarahui kebijakan ekonomi. Sebutkan kebijakan-kebijakan ekonomi yang diterapkan di Indonesia Pada masa Demokrasi Liberal sampai masa Demokrasi Terpimpin!' => [
                        "Gerakan Benteng",
                        "Gunting Syafruddin",
                        "Nasionalisasi de Javasche Bank",
                        "Pembentukan Biro Perancang Negara",
                        "Sistem Ekonomi Ali Baba",
                        "Rencana Pembangunan Lima Tahun",
                        "Membentuk Dewan Perancang Nasional",
                        "Devaluasi Mata Uang Rupiah",
                        "Menekan Laju Inflasi",
                        "Deklarasi Ekonomi",
                        "Menghimpun Dana Revolusi",



                    ],
                    'Setiap tanggal 30 September Indonesia selalu diperingati sebagai peristiwa G 30 S/PKI. G 30 S/PKI ini merupakan bagian dari sejarah Indonesia, dan menjadi kenangan kelam bagi bangsa Indonesia. Sebutkan nama-nama pahlawan revolusi akibat pemberontakan G 30 S/PKI!' => [
                        "Jenderal Ahmad Yani",
                        "Letjen Suprapto",
                        "Letjen S. Parman",
                        "Letjen M.T. Haryono",
                        "Mayjen D. I. Panjaitan",
                        "Mayjen Sutoyo Siswomiharjo",
                        "Brigjen Katamso",
                        "Kapten Pierre Tendean",
                        "A.I.P. II K. S. Tubun",
                        "Kolonel Sugiyono",


                    ],
                    'Perang Dunia I berlangsung antara 28 Juli 1914 hingga 11 November 1918. Dua blok utama yang bertempur dalam Perang Dunia I adalah Blok Sekutu dan Blok Sentral. Sebutkan negara-negara yang tergolong ke dalam Blok Sekutu (Triple Entente) perang dunia I!' => [
                        "Inggris",
                        "Perancis",
                        "Amerika Serikat",
                        "Jepang",
                        "Italia",
                        "Rusia",
                        "Belgia",
                        "Serbia",
                        "Portugal",
                        "Montenegro",
                        "Rumania",
                        "Yunani",
                        "Thailand",
                        "China",
                        "Asir",
                        "Nejd",
                        "Hasa",
                        "Hejaz",
                        "Panama",
                        "Kuba",
                        "Brasil",
                        "Armenia",
                        "Luksemburg",
                        "Guatemala",
                        "Nikaragua",
                        "Kosta Rika",
                        "Haiti",
                        "Liberia",
                        "Bolivia",
                        "Ekuador",
                        "Uruguay",
                        "Honduras",


                    ],
                    'Sebutkan negara-negara yang berada di Afrika Barat!' => [
                        "Benin",
                        "Burkina Faso",
                        "Cape Verde",
                        "Côte d'ivoire",
                        "Gambia",
                        "Ghana",
                        "Guinea",
                        "Guinea-Bissau",
                        "Mali",
                        "Mauritania",
                        "Niger",
                        "Nigeria",
                        "Senegal",
                        "Sierra Leone",
                        "Togo",

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
