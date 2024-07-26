<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use App\Models\TemaPertanyaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                    'Berdasarkan pada pasal 23B Undang-undang Dasar Negara Republik Indonesia Tahun 1945 menyebutkan macam dan harga mata uang ditetapkan dengan Undang-undang. Sebutkan mata uang pecahan Rupiah yang dikeluarkan oleh Bank Indonesia pada Tahun Emisi/Keluaran 2022?' => [
                        'Rp.100.000',
                        'Rp.  75.000',
                        'Rp.  50.000',
                        'Rp.  20.000',
                        'Rp.  10.000',
                        'Rp.    5.000',
                        'Rp.    2.000',
                        'Rp.    1.000 (kertas & koin)',
                        'Rp.   500',
                        'Rp.   200',
                        'Rp.   100'
                    ],
                    'Menurut Undang-undang Nomor 4 Tahun 2023 tentang Pengembangan dan Penguatan Sektor Keuangan. Pada undang-undang tersebut mengatur tentang Lembaga Penjamin Simpanan (LPS). Sebutkan nama-nama bank yang masuk menjadi anggota LPS yang berbadan hukum terbuka, namun bukan bank milik daerah?' => [
                        'Bank Negara Indonesia (BNI)',
                        'Bank Rakyat Indonesia (BRI)',
                        'Bank Tabungan Negara (BTN)',
                        'Bank Mandiri',
                        'Artha Graha Internasional',
                        'Krom Bank Indonesia',
                        'Bank Bumi Arta',
                        'Bank Central Asia (BCA)',
                        'Bank Cimb Niaga',
                        'Bank Danamon',
                        'Bank MNC Internasional',
                        'Bank Mayapada Internasional',
                        'Bank Mega',
                        'Bank OCBC NISP',
                        'Bank Permata',
                        'Bank Raya Indonesia',
                        'Bank BTPN Syariah',
                        'Bank Woori Saudara Indonesia',
                        'Bank Sinarmas',
                        'Bank Victoria Internasional',
                        'Bank Capital Indonesia',
                        'Bank China Construction Bank Indonesia',
                        'Bank Syariah Indonesia (BSI)',
                        'Bank Permata'
                    ],
                    'Berdasarkan Undang-undang Dasar Negara Republik Indonesia 1945 Pasal 33 ayat 2 cabang-cabang produksi yang penting bagi negara dan yang menguasai hajat hidup orang banyak dikuasai oleh negara. Badan Usaha Milik Negara (BUMN) yang dikenal sebagai perusahaan milik negara. Perusahaan apa saja yang termasuk ke dalam BUMN!' => [
                        'PT Pertamina',
                        'PT Telekomunikasi Indonesia',
                        'PT PLN',
                        'PT Pelni (Pelayaran Nasional Indonesia)',
                        'PT Peruri (Percetakan Uang Republik Indonesia)',
                        'PT Garuda Indonesia',
                        'PT Perusahaan Listrik Negara',
                        'PT Kereta Api Indonesia',
                        'PT Jasa Marga',
                        'PT Semen Indonesia',
                        'PT Bio Farma',
                        'PT Krakatau Steel',
                        'PT Mineral Industri Indonesia',
                        'PT Pupuk Indonesia',
                        'PT Taspen',
                        'Perusahaan Umum Damri'
                    ],
                    'Setiap warga negara berhak mendapatkan pendidikan. Itu adalah bunyi pasal 31 ayat 1 Undang-undang Dasar Negara Republik Indonesia Tahun 1945. Untuk mendapatkan pendidikan disusun pada suatu kurikulum. Sebutkan kelompok mata pelajaran SMA/MA/sederajat jurusan IPA kelas XI pada Kurikulum Merdeka!' => [
                        'Pendidikan Agama dan Budi Pekerti',
                        'Pendidikan Pancasila',
                        'Bahasa Indonesia',
                        'Matematika',
                        'Bahasa Inggris',
                        'Sejarah',
                        'Seni dan Budaya',
                        'Pendidikan Jasmani, Olahraga dan Kesehatan',
                        'Fisika',
                        'Kimia',
                        'Biologi',
                        'Informatika'
                    ],
                    'Sebutkan Ketua MPR RI dari masa ke masa!' => [
                        'Chaerul Saleh',
                        'Wilujo Puspojudo',
                        'Abdul Haris Nasution',
                        'Idham Chalid',
                        'Adam Malik',
                        'Daryatmo',
                        'Amir Machmud',
                        'Kharis Suhud',
                        'Wahono',
                        'Harmoko (1997-1999)',
                        'Amien Rais (1999-2004)',
                        'Hidayat Nur Wahid (2004-2009)',
                        'Taufiq Kiemas (2009-2013)',
                        'Sidarto Danusubroto (2013-2014)',
                        'Zulkifli Hasan (2014-2019)',
                        'Dr. H. Bambang Soesatyo, S.E., S.H., M.B.A. (2019-2024)',
                    ],
                    'Sebutkan Partai politik peserta pemilu pada tahun 2024! (Sesuai dengan hasil keputusan rapat Pleno Terbuka KPU)' => [
                        'Partai Kebangkitan Bangsa (PKB)',
                        'Partai Gerakan Indonesia Raya',
                        'Partai Demokrasi Indonesia Perjuangan',
                        'Partai Golkar',
                        'Partai Nasdem',
                        'Partai Buruh',
                        'Partai Gelombang Rakyat Indonesia',
                        'Partai Keadilan Sejahtera',
                        'Partai Kebangkitan Nusantara',
                        'Partai Hati Nurani Rakyat',
                        'Partai Garda Perubahan Indonesia',
                        'Partai Amanat Nasional',
                        'Partai Bulan Bintang',
                        'Partai Demokrat',
                        'Partai Solidaritas Indonesia',
                        'Partai Perindo',
                        'Partai Persatuan Pembangunan',
                        'Partai Nangroe Aceh',
                        "Partai Generasi Atjeh Beusaboh Tha'at Dan Taqwa",
                        'Partai Darul Aceh',
                        'Partai Aceh',
                        'Partai Adil Sejahtera Aceh',
                        'Partai Soliditas Independent Rakyat Aceh',
                        'Partai Ummat',
                    ],
                    'TAP MPRS Nomor XXV/MPRS/1966 tentang Pembubaran Partai Komunis Indonesia. Sebutkan nama-nama pahlawan yang gugur dalam peristiwa G30S/PKI!' => [
                        'Jenderal Ahmad Yani',
                        'Letjen Suprapto',
                        'Letjen S. Parman',
                        'Letjen M.T. Haryono',
                        'Mayjen D. I. Panjaitan',
                        'Mayjen Sutoyo Siswomiharjo',
                        'Brigjen Katamso',
                        'Kapten Pierre Tendean',
                        'A.I.P. II K. S. Tubun',
                        'Kolonel Sugiyono'
                    ]
                ],
                'NKRI dan Bhinneka Tunggal Ika' => [
                    'Negara Kesatuan Republik Indonesia (NKRI) dibagi atas daerah-daerah provinsi. Sepanjang tahun 2022-2023 telah dilantik Penjabat Gubernur. Sebutkan provinsi mana sajakah yang saat ini dijabat oleh Penjabat Gubernur (PJ)?' => [
                        'Aceh',
                        'Sumatera Utara',
                        'Sumatera Selatan',
                        'Kepulauan Bangka Belitung',
                        'Banten',
                        'DKI Jakarta',
                        'Jawa Barat',
                        'Jawa Tengah',
                        'Kalimantan Barat',
                        'Kalimantan Timur',
                        'Sulawesi Barat',
                        'Sulawesi Tenggara',
                        'Bali',
                        'Gorontalo',
                        'Sulawesi Selatan',
                        'Nusa Tenggara Barat',
                        'Nusa Tenggara Timur',
                        'Papua',
                        'Papua Barat Daya',
                        'Papua Barat',
                        'Papua Tengah',
                        'Papua Pegunungan',
                        'Papua Selatan'
                    ],
                    'NKRI dibagi menjadi tiga wilayah berdasarkan zona waktu yakni Waktu Indonesia Barat, Waktu Indonesia Tengah maupun Waktu Indonesia Timur. Sebutkan provinsi yang termasuk dalam Waktu Indonesia Bagian Tengah?' => [
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
                        'Gorontalo'
                    ],
                    'Sebutkan contoh kata serapan dari bahasa sansekerta menjadi bahasa Indonesia yang berawalan dari huruf vokal?' => [
                        'Agama (āgama)',
                        'Aksara (akṣara)',
                        'Aneka (aneka)',
                        'Eka',
                        'Irama (virama)',
                        'Istana (āsthāna)',
                        'Istimewa (āstām eva)',
                        'Udara (udara)',
                        'Unta (uṣṭra)',
                        'Upaya (upāya)'
                    ],
                    'Berdasarkan Undang-undang Dasar Negara Republik Indonesia Pasal 32 ayat 2 negara menghormati dan memelihara Bahasa daerah sebagai kekayaan budaya nasional. Sebutkan dialek bahasa yang berada di jawa tengah?' => [
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
                        'Dialek Semarang'
                    ],
                    'Berdasarkan Undang-undang Dasar Negara Republik Indonesia Pasal 32 ayat 1 negara memajukan kebudayaan nasional Indonesia di tengah peradaban dunia dengan menjamin kebebasan masyarakat dalam memelihara dan mengembangkan nilai—nilai budayanya. Sebutkan lagu daerah yang berasal dari Jawa Tengah?' => [
                        'Lir-ilir',
                        'Cublak-cublak Suweng',
                        'Jenang Gulo',
                        'Jangkrik Genggong',
                        'Stasiun Balapan',
                        'Yen Ing Tawang Ono Lintang',
                        'Turi-Turi Putih, Padang Wulan',
                        'Andhe-Andhe Lumut, Bapak Pucung',
                        'Jamuran, Tul Jaenak, Sekolah, Gambang Semarang, Jaranan, Gek Kepriye, Gambang Suling, Gundhul Pacul, dan Dhondong Apa Salak'

                    ],
                    'Berdasarkan Undang-undang Dasar Negara Republik Indonesia Pasal 25A Negara Kesatuan Republik Indonesia adalah sebuah negara kepulauan yang berciri Nusantara dengan wilayah yang batas-batas dan hak-haknya ditetapkan dengan undang—undang. Sebutkan nama-nama pulau yang ada di Sumatera Utara?' => [
                        'Pulau Bojo',
                        'Kepulauan Hinako',
                        'Pulau Musala',
                        'Pulau Nias',
                        'Pulau Pangururan',
                        'Pulau Pini',
                        'Pulau Tanabala',
                        'Pulau Tanahmasa',
                        'Pulau Telo',
                        'Pulau Samosir',
                        'Pulau Berhala',
                        'Pulau Pandang',
                        'Pulau Salahnama',
                        'Pulau Situngkus',
                    ],
                    'Berdasarkan Undang-undang Dasar Negara Republik Indonesia Pasal 18 ayat 1 Negara Kesatuan Republik Indonesia dibagi atas daerah-daerah provinsi dan daerah provinsi itu dibagi atas kabupaten dan kota, yang tiap-tiap provinsi, kabupaten, dan kota itu mempunyai pemerintahan daerah, yang diatur dengan undang—undang. Sebutkan kabupaten yang berada di Provinsi Jawa Tengah?' => [
                        'Kabupaten Banjarnegara',
                        'Kabupaten Banyumas',
                        'Kabupaten Batang',
                        'Kabupaten Blora',
                        'Kabupaten Boyolali',
                        'Kabupaten Brebes',
                        'Kabupaten Cilacap',
                        'Kabupaten Demak',
                        'Kabupaten Grobogan',
                        'Kabupaten Jepara',
                        'Kabupaten Karanganyar',
                        'Kabupaten Kebumen',
                        'Kabupaten Kendal',
                        'Kabupaten Klaten',
                        'Kabupaten Kudus',
                        'Kabupaten Magelang',
                        'Kabupaten Pati',
                        'Kabupaten Pekalongan',
                        'Kabupaten Pemalang',
                        'Kabupaten Purbalingga',
                        'Kabupaten Purworejo',
                        'Kabupaten Rembang',
                        'Kabupaten Semarang',
                        'Kabupaten Sragen',
                        'Kabupaten Sukoharjo',
                        'Kabupaten Tegal',
                        'Kabupaten Temanggung',
                        'Kabupaten Wonogiri',
                        'Kabupaten Wonosobo'
                    ]
                ],
                'Pengetahuan Umum' => [
                    'Bandar udara sebagai tempat pesawat udara mendarat dan lepas landas. Sebutkan nama Bandar udara yang berada di pulau Jawa!' => [
                        'Abdulrachman Saleh',
                        'Adisucipto',
                        'Ahmad Yani',
                        'Blimbingsari',
                        'Halim Perdanakusuma',
                        'Husein Sastranegara',
                        'Adisumarmo',
                        'Juanda',
                        'Soekarno–Hatta',
                        'Yogyakarta',
                        'Pondok Cabe',
                        'Pulau Panjang',
                        'Tanjung Lesung',
                        'Wiriadinata',
                        'Gading'
                    ],
                    'Taman nasional adalah kawasan pelestarian alam yang mempunyai ekosistem asli. Sebutkan taman nasional apa saja yang berada di pulau Jawa?' => [
                        'TN Alas purwo',
                        'TN Baluran',
                        'TN Bromo tengger semeru',
                        'TN Gunung ciremai',
                        'TN Gede pangrango',
                        'TN Halimun salak',
                        'TN Gunung merapi',
                        'TN Gunung merbabu',
                        'TN Karimun jawa',
                        'TN Kep. Seribu',
                        'TN Meru betiri',
                        'TN Ujung kulon'
                    ],
                    'Indonesia dibagi menjadi tiga wilayah berdasarkan zona waktu yakni Waktu Indonesia Barat, Waktu Indonesia Tengah maupun Waktu Indonesia Timur. Sebutkan nama-nama kota yang termasuk dalam Waktu Indonesia Barat?' => [
                        'Banda Aceh',
                        'Medan',
                        'Padang',
                        'Pekanbaru',
                        'Tanjung Pinang',
                        'Pangkal Pinang',
                        'Jambi',
                        'Bengkulu',
                        'Palembang',
                        'Bandar Lampung',
                        'Serang',
                        'Jakarta',
                        'Bandung',
                        'Semarang',
                        'Yogyakarta',
                        'Surabaya',
                        'Pontianak',
                        'Palangkaraya'
                    ],
                    'Sebutkan kerajaan-kerajaan pada Masa Hindu-Buddha!' => [
                        'Kerajaan Kutai',
                        'Kerajaan Tarumanegara',
                        'Kerajaan Kalingga',
                        'Kerajaan Sriwijaya',
                        'Kerajaan Mataram Kuno',
                        'Kerajaan Kediri',
                        'Kerajaan Singasari',
                        'Kerajaan Majapahit',
                        'Kerajaan Buleleng dan Kerajaan Dinasti Warmadewa di Bali',
                        'Kerajaan Tulang Bawang',
                        'Kerajaan Kota Kapur'
                    ],
                    'Sebutkan Wakil Presiden Republik Indonesia Dari tahun 1945!' => [
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
                        "K. H. Ma’ruf Amin"
                    ],
                    'Siapakah tokoh yang termasuk susunan awal anggota PPKI!' => [
                        'Prof. Mr. Dr. Soepomo',
                        'KRT Radjiman Wedyodiningrat',
                        'R. P. Soeroso',
                        'Soetardjo Kartohadikoesoemo',
                        'Abdoel Wachid Hasjim',
                        'Ki Bagus Hadikusumo',
                        'Otto Iskandardinata',
                        'Abdoel Kadir',
                        'Pangeran Soerjohamidjojo',
                        'Bandoro Pangeran Hario Poeroebojo',
                        'Dr. Amir',
                        'Abdoellah Abbas',
                        'Mr. T . Mohammad Hasan',
                        'Sam Ratulangi',
                        'Andi Pangerang',
                        'A.A. Hamidhan',
                        'I Gusti Ketut Pudja',
                        'Mr. Johannes Latuharhary',
                        'Yap Tjwan Bing'
                    ],
                    'Sebutkan nama-nama Gubernur Provinsi Jawa Tengah dari tahun 1893 sampai dengan 2024?' => [
                        'Suroso',
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
                        'Heru Sudjatmoko',
                        'Syarifuddin',
                        'Nana Sudjana'
                    ]
                ],
                'Nasional dan Internasional' => [
                    'Sebutkan negara-negara peserta Konferensi Asia Afrika (KAA) yang diselenggarakan di Bandung pada Tahun 1955?' => [
                        'Afghanistan',
                        'Indonesia',
                        'Pakistan',
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
                        'Yaman'
                    ],
                    'Sebutkan negara - negara yang menghadiri KTT (Konferensi Tingkat Tinggi) Pertama Pada tahun 1961 di Beograd, Yugoslavia adalah?' => [
                        'Afghanistan',
                        'Aljazair',
                        'Burma (Myanmar)',
                        'Kamboja',
                        'Ceylon (Sri Lanka)',
                        'Kongo-Leopoldville (DRC)',
                        'Kuba',
                        'Siprus',
                        'Mesir',
                        'Ethiopia',
                        'Ghana',
                        'Guinea',
                        'India',
                        'Irak',
                        'Lebanon',
                        'Mali',
                        'Maroko',
                        'Nepal',
                        'Arab Saudi',
                        'Somalia',
                        'Sudan',
                        'Tunisia',
                        'Yaman',
                        'Yugoslavia'
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
                        'Timor Leste'
                    ],
                    'Sebutkan cabang-cabang olahraga yang dipertandingkan pada gelaran Asian Games 2018 di Jakarta?' => [
                        'Akuatik',
                        'Panahan',
                        'Atletik',
                        'Bulutangkis',
                        'Baseball/Softball',
                        'Basket',
                        'Bowling',
                        'Tinju',
                        'Bridge',
                        'Kanoe/Kayak',
                        'Sepeda',
                        'Equestrian',
                        'Anggar',
                        'Sepak bola',
                        'Golf',
                        'Senam',
                        'Bola tangan',
                        'Hoki',
                        'Jet Ski',
                        'Judo',
                        'Kabaddi',
                        'Karate',
                        'Bela diri',
                        'Pentathlon',
                        'Paralayang',
                        'Dayung',
                        'Rugby',
                        'Berlayar',
                        'Sepak Takraw',
                        'Menembak',
                        'Climbing',
                        'Squash',
                        'Tenis Meja',
                        'Taekwondo',
                        'Tenis',
                        'Triathlon',
                        'Voli',
                        'Angkat Berat',
                        'Gulat'
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
                        'Azerbaijan'
                    ],
                    'Sebutkan daftar negara yang termasuk dalam Persatuan Bangsa-Bangsa (PBB) yang berawalan dari huruf B?' => [
                        'Bahama',
                        'Bahrain',
                        'Bangladesh',
                        'Barbados',
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
                        'Burundi'
                    ],
                    'Sebutkan daftar negara yang termasuk dalam Persatuan Bangsa-Bangsa (PBB) yang berawalan dari huruf K?' => [
                        'Kamboja',
                        'Kamerun',
                        'Kanada',
                        'Kazakhstan',
                        'Kenya',
                        'Kiribati',
                        'Kolombia',
                        'Komoro',
                        'Kongo',
                        'Korea Utara',
                        'Kosta Rika',
                        'Kroasia',
                        'Kuba',
                        'Kuwait',
                        'Kyrgyzstan'
                    ]
                ]
            ],
            2 => [
                'NKRI' => [
                    'Badan Penyelidik Usaha-usaha Persiapan Kemerdekaan atau yang dikenal dengan BPUPKI dibentuk pada masa pendudukan Jepang di Indonesia. Sebutkan tugas-tugas yang diberikan kepada BPUPKI saat melaksanakan persidangan pada tanggal 29 Mei sampai 01 Juni 1945 dan 10 sampai 17 Juli 1945!' => [
                        'Penyelidikan usaha-usaha kemerdekaan Indonesia',
                        'Mempersiapkan kemerdekaan',
                        'Merumuskan dasar negara',
                        'Penyusunan naskah konstitusi',
                        'Menyelidiki situasi politik dan sosial',
                        'Merumuskan tujuan dan cita-cita kemerdekaan',
                        'Konsultasi dengan berbagai pihak'
                    ],
                    'Konferensi Meja Bundar adalah sebuah pertemuan yang dilaksanakan di Den Haag, Belanda pada 23 Agustus 1949. Jelaskan hasil dari konferensi tersebut!' => [
                        'Pembentukan Uni Belanda- Republik Indonesia Serikat',
                        'Soekarno dan Moh. Hatta akan menjabat sebagai Presiden dan Wakil Presiden Republik Indonesia Serikat untuk periode 1949-1950',
                        'Irian Barat masih dikuasai Belanda dan tidak dimasukkan ke dalam Republik Indonesia Serikat sampai dilakukan perundingan lebih lanjut',
                        'Pemerintah Indonesia harus menanggung hutang negeri Hindia Belanda sebesar 4,3 Milyar gulden',
                        'Belanda akan menyerahkan kedaulatan kepada Republik Indonesia Serikat paling lambat tahun 1949',
                        'Pasukan Tentara Kerajaan Hindia Belanda (KNIL) akan bergabung dalam pasukan Angkatan Perang RIS (APRIS) dan secara bertahap akan mengambil alih penjagaan keamanan di seluruh wilayah RIS'
                    ],
                    'Jelaskan makna dari Negara Kesatuan dalam Undang-Undang Dasar 1945!' => [
                        'Negara Indonesia ialah Negara Kesatuan, yang berbentuk Republik',
                        'Negara Kesatuan Republik Indonesia dibagi atas daerah-daerah provinsi dan daerah provinsi itu dibagi atas kabupaten dan kota, yang tiap-tiap provinsi, kabupaten, dan kota itu mempunyai pemerintahan daerah, yang diatur dengan undang-undang',
                        'Negara mengakui dan menghormati satuan-satuan pemerintahan daerah yang bersifat khusus atau bersifat istimewa yang diatur dengan undang-undang',
                        'Negara mengakui dan menghormati kesatuan-kesatuan masyarakat hukum adat beserta hak-hak tradisionalnya sepanjang masih hidup dan sesuai dengan perkembangan masyarakat dan prinsip Negara Kesatuan Republik Indonesia, yang diatur dalam undang-undang',
                        'Negara Kesatuan Republik Indonesia adalah sebuah negara kepulauan yang berciri Nusantara dengan wilayah yang batas-batas dan hak-haknya ditetapkan dengan undang-undang',
                        'Khusus mengenai bentuk Negara Kesatuan Republik Indonesia tidak dapat dilakukan perubahan'
                    ],
                    'Jelaskan aspek Geografi, Demografi, Kekayaan Alam dan Idelogi Negara Kesatuan Republik Indonesia harus menjadi wadah yang menyatukan seluruh aspek kehidupan nasional!' => [
                        'Aspek geografi, dari segi lokasi dan posisi geografisnya, wilayah Indonesia merupakan negara kepulauan yang terdiri dari perairan dan daratan. Wilayah Indonesia juga memiliki keragaman dari segi geografis, alam dan hayati.',
                        'Aspek demografi, peran sekelompok manusia pada jumlah populasi, komposisi, persebaran dan kualitas penduduk dalam mengupayakan penyelenggaraan ketertiban, keamanan, dan pembangunan',
                        'Aspek sumber kekayaan alam, kekayaan alam Indonesia dibedakan menjadi 8 golongan, yakni: flora, fauna, mineral, tanah, atmosfer, dirgantara, energi alam, air dan laut.',
                        'Aspek ideologi, suatu falsafah dan merupakan pelaksanaan dari sistem falsafah itu sendiri. Bagi bangsa Indonesia, pancasila merupakan ideologi yang bersifat final, dan tidak dapat diubah lagi posisinya sebagai konsep dasar tentang kehidupan yang dicita-citakan.'
                    ],
                    'Indonesia sebagai negara kepulauan di dunia Internasional. Jelaskan pernyataan tersebut!' => [
                        'Batas laut teritorial Indonesia hanya 3 mil laut terhitung dari garis pantai pasang surut terendah',
                        'Tanggal 13 desember 1957 pemerintah Indonesia mengeluarkan Deklarasi Juanda menganut konsep negara kepulauan',
                        'Peraturan Pemerintah Pengganti Undang-Undang Nomor 4/PRP/1960 tentang perairan Indonesia',
                        'Undang-Undang Nomor 17 Tahun 1985 tentang UNCLOS (United Nations Convention on the Law of the sea)',
                        'Pasal 25A BAB IXA tentang Wilayah Negara'
                    ],
                    'Sebutkan dan jelaskan pasal-pasal UUD yang berkatan dengan sila pertama! (Ketuhanan Yang Maha Esa)' => [
                        'Pasal 28E setiap orang bebas memeluk agama dan beribadat menurut agamanya, memilih pendidikan dan pengajaran, memilih pekerjaan, memilih kewarganegaraan, memilih tempat tinggal di wilayah negara dan meninggalkannya, serta berhak kembali',
                        '(2) Setiap orang berhak atas kebebasan meyakini kepercayaan, menyatakan pikiran dan sikap, sesuai dengan hati nuraninya',
                        '"Setiap orang bebas dari perlakuan yang bersifat diskriminatif atas dasar apapun dan berhak mendapatkan perlindungan terhadap perlakuan yang bersifat diskriminatif itu."',
                        'Setiap orang berhak atas kebebasan berserikat, berkumpul dan mengeluarkan pendapat',
                        'Pasal 29, negara berdasar atas Ketuhanan Yang Maha Esa',
                        'Negara menjamin kemerdekaan tiap-tiap penduduk untuk memeluk agamanya masing-masing dan untuk beribadat menurut agamanya dan kepercayaannya itu'
                    ],
                    'Pancasila memiliki kedudukan sangat penting bagi Indonesia, salah satunya sebagai dasar negara. Oleh karena itu, sebutkan dan jelaskan kedudukan Pancasila tersebut di Indonesia!' => [
                        'Sumber dari segala sumber hukum di Indonesia',
                        'Mencakup suasana kebatinan Undang-undang Dasar Tahun 1945',
                        'Mewujudkan cita-cita hukum bagi hukum dasar negara',
                        'Menjadi sumber semangat bagi Undang-undang Dasar Tahun 1945',
                        'Mengandung norma-norma yang mengharuskan Undang-undang Dasar Tahun 1945 mewajibkan perintah maupun penyelenggara negara lain untuk memelihara budi pekerti luhur',
                        'Seluruh warga negara Indonesia memiliki kesadaran hukum'
                    ],
                    'Pada sila ketiga Pancasila yakni Persatuan Indonesia, sebutkan dan jelaskan makna sila tersebut!' => [
                        'Nasionalisme',
                        'Cinta bangsa dan tanah air',
                        'Menggalang persatuan dan kesatuan bangsa',
                        'Menghilangkan penonjolan kekuatan atau kekuasaan, keturunan dan perbedaan warna kulit',
                        'Menumbuhkan rasa senasib dan sepenanggulangan'
                    ],
                    'Peringatan hari lahir pancasila pada tanggal 1 Juni 1945 mengacu kepada sejarah dicetuskannya Pancasila oleh Ir. Soekarno pada saat sidang pertama BPUPKI. Sebutkan dan jelaskan 5 usulan dasar negara tersebut!' => [
                        'Kebangsaan Indonesia, cara pandang mengenai diri dan tanah airnya dengan mengutamakan persatuan dan kesatuan wilayah dalam penyelenggaraan kehidupan.',
                        'Internasionalisme atau peri-kemanusiaan, solidaritas antarbangsa yang diwarnai oleh rasa kemanusiaan.',
                        'Mufakat atau demokrasi, mengutamakan musyawarah mufakat dalam mengambil setiap keputusan demi terciptanya demokrasi indonesia yang bersih, aman dan damai.',
                        'Kesejahteraan sosial, suatu kondisi yang diwujudkan bagi seluruh warga negara di dalam pemenuhan kebutuhan material, spiritual, dan sosial agar dapat hidup layak dan mampu mengembangkan diri, sehingga dapat melaksanakan fungsi sosialnya.',
                        'Ketuhanan yang Maha Esa, pada dasarnya memuat pengakuan eksplisit akan eksistensi Tuhan sebagai Sang Pencipta. Nilai ketuhanan dalam Pancasila menunjukkan bahwa eksistensi negara, bangsa, dan manusia Indonesia berelasi dengan Tuhan yang diyakini sebagai sumber segala kebaikan.'
                    ],
                    'Sebutkan pokok-pokok moralitas dan haluan kebangsaan-kenegaraan menurut alam Pancasila!' => [
                        'Alam pemikiran pancasila, nilai-nilai ketuhanan (religiusitas) sebagai sumber etika dan spiritualitas',
                        'Alam pemikiran pancasila, nilai-nilai kemanusiaan universal yang bersumber dari hukum Tuhan, hukum alam dan sifat-sifat sosial manusia (yang bersifat horizontal)',
                        'Alam pemikiran pancasila, nilai-nilai etis kemanusiaan itu terlebih dahulu harus mengakar kuat dalam lingkungan pergaulan kebangsaan yang lebih dekat',
                        'Alam pemikiran pancasila, nilai ketuhanan, nilai kemanusiaan, dan nilai serta cita-cita kebangsaan itu dalam aktualisasinya harus menjunjung tinggi kedaulatan rakyat dalam aktualisasinya harus menjunjung tinggi kedaulatan rakyat dalam semangat permusyawaratan',
                        'Alam pemikiran pancasila, nilai ketuhanan, nilai kemanusiaan, nilai dan cita kebangsaan, serta demokrasi permusyawaratan itu memperoleh kepenuhan'
                    ],
                    'Bhinneka Tunggal Ika menggambarkan pentingnya persatuan di tengah keberagaman yang ada di Indonesia. Jelaskan keanekaragaman Bhinneka Tunggal Ika sebagai Semboyan Negara tersebut!' => [
                        'Bangsa yang majemuk memiliki jumlah penduduk yang cukup besar',
                        'Memiliki bahasa daerah yang berbeda-beda',
                        'Mempunyai suku bangsa yang beragam',
                        'Mempunyai agama yang berbeda',
                        'Warna kulit yang bermacam-macam',
                        'Adat istiadat',
                        'Banyak lagi perbedaan'
                    ],
                    'Generasi muda dapat menerapkan nilai-nilai Bhinneka Tunggal Ika dalam kehidupan sehari-hari. Berikan contoh sikap atau perilaku generasi muda dalam menerapkan nilai-nilai tersebut!' => [
                        'Mengembangkan sikap terbuka',
                        'Toleransi antar umat beragama ketika perayaan hari besar',
                        'Menghargai keberagaman dalam interaksi sehari-hari',
                        'Memahami sejarah dan nilai-nilai nasional',
                        'Saling tolong menolong antar sesama',
                        'Menerima dan menghormati keyakinan agama orang lain tanpa membedakan.',
                        'Menjalin tali silaturahmi yang baik dalam lingkungan bermasyarakat.',
                        'Tidak menjelek-jelekkan suku, agama, ras, maupun adat tertentu hanya karena berbeda.'
                    ],
                    'Kemajuan IPTEK salah satunya ditandai dengan adanya kemajuan ilmu pengetahuan dan teknologi yang bersifat positif dan dapat diserap dalam budaya kehidupan. Sebutkan contoh penerapan kemajuan IPTEK pada nilai kebhinekaan!' => [
                        'Terbuka terhadap inovasi dan perubahan',
                        'Berorientasi pada masa depan daripada masa lampau',
                        'Dapat memanfaatkan kegunaan iptek',
                        'Menghargai pekerjaan sesuai dengan prestasi',
                        'Menggunakan potensi lingkungan secara tepat untuk pembangunan berkelanjutan',
                        'Menghargai dan menghormati hak-hak asasi manusia'
                    ],
                    'Dalam mengembangkan sikap menghormati terhadap keragaman suku bangsa, dapat terlihat dari sifat dan sikap dalam kehidupan sehari-hari. Berikan contoh sikap tersebut!' => [
                        'Kehidupan bermasyarakat tercipta kerukunan seperti halnya dalam sebuah keluarga',
                        'Antara warga masyarakat terdapat semangat tolong menolong',
                        'Kerjasama untuk menyelesaikan suatu masalah',
                        'Kerjasama untuk memenuhi kebutuhan hidupnya',
                        'Dalam menyelesaikan urusan bersama selalu diusahakan dengan melalui musyawarah',
                        'Terdapat kesadaran dan sikap yang mengutamakan kepentingan bersama di atas kepentingan pribadi dan golongan'
                    ],
                    'Fungsi mendasar Bhinneka Tunggal Ika adalah sebagai landasan persatuan dan kesatuan. Peran dan semboyan negara untuk membentuk dan menanamkan pada masyarakat tentang keberagaman. Sebutkan dan jelaskan peranan tersebut pada sekelompok atau masyarakat dalam mengimplementasikan semboyan negara tersebut!' => [
                        'Kasih sayang dan rela berkorban, terciptanya kepedulian dan persatuan',
                        'Toleran terhadap perbedaan, menumbuhkan rasa saling menghormati, menyebarkan kerukunan dan menyuburkan toleransi pada setiap orang',
                        'Mengembangkan musyawarah, untuk mencapai mufakat perlu dibudayakan dalam membahas keputusan bersama dan mencari solusi dari permasalahan bersama secara damai',
                        'Sikap inklusif, yang saling memupuk rasa persaudaraan, tidak memaksakan kehendak, serta menjunjung tinggi persamaan martabat dan harkat manusia',
                        'Bersikap konvergen, perbedaan yang ada seharusnya tidak menjadi suatu hal yang harus dibesar-besarkan ataupun dipertentangkan',
                        'Kerjasama, semangat kerjasama dengan orang dan kelompok yang berbeda diperlukan sebagai konsekuensi hidup di tengah keberagaman'
                    ],
                    'Pada awal era reformasi, berkembang dan populer di masyarakat banyaknya tuntutan reformasi yang didesakkan oleh berbagai komponen bangsa, termasuk mahasiswa dan pemuda. Sebutkan komponen-komponen bangsa pada awal era reformasi!' => [
                        'Amandemen Undang-Undang Dasar Negara Republik Indonesia Tahun 1945',
                        'Penghapusan doktrin dwi fungsi Angkatan Bersenjata Republik Indonesia (ABRI)',
                        'Penegakan supremasi hukum',
                        'Penghormatan hak asasi manusia (HAM)',
                        'Pemberantasan korupsi, kolusi dan nepotisme (KKN)',
                        'Desentralisasi dan hubungan yang adil antara pusat dan daerah (otonomi daerah)',
                        'Mewujudkan kebebasan pers',
                        'Mewujudkan kehidupan demokrasi'
                    ],
                    'Ketetapan MPR RI Nomor VIII/MPR/2001 tentang Rekomendasi Arah Kebijakan Pemberantasan dan Pencegahan Korupsi, Kolusi dan Nepotisme. Sebutkan dan jelaskan arah kebijakan tersebut!' => [
                        'Mempercepat proses hukum terhadap aparatur pemerintah',
                        'Melakukan penindakan hukum yang bersungguh-sungguh terhadap kasus korupsi',
                        'Mendorong partisipasi masyarakat luas dalam mengawasi dan melaporkan kepada pihak yang berwenang berbagai dugaan praktek korupsi, kolusi dan nepotisme',
                        'Mencabut, mengubah, atau mengganti semua peraturan perundang-undangan serta keputusan-keputusan penyelenggara negara yang terindikasi memungkinkan terjadinya melindungi atau korupsi, kolusi, dan nepotisme',
                        'Merevisi semua peraturan perundang-undangan yang berkenaan dengan korupsi sehingga sinkron dan konsisten satu dengan yang lainnya',
                        'Membentuk Undang-undang beserta peraturan pelaksanaannya untuk membantu percepatan dan efektivitas pelaksanaan pemberantasan dan pencegahan korupsi',
                        'Perlu segera membentuk Undang-undang guna mencegah terjadinya perbuatan-perbuatan kolusi sedan/atau nepotisme yang dapat mengakibatkan terjadinya tindak pidana korupsi'
                    ],
                    'Sebutkan pembentukan peraturan perundang-undangan harus dilakukan berdasarkan asas pembentukan peraturan perundang-undangan yang baik!' => [
                        'Kejelasan tujuan',
                        'Kelembagaan atau pejabat pembentuk yang tepat',
                        'Kesesuaian antara jenis, hierarki, dan materi muatan',
                        'Dapat dilaksanakan',
                        'Kedayagunaan dan kehasilgunaan',
                        'Kejelasan rumusan',
                        'Keterbukaan'
                    ],
                    'Sumber hukum tertulis dapat dilihat pada tata urutan perundang-undangan yang diatur dalam Pasal 7 ayat (1) Undang-Undang Nomor 12 Tahun 2011 yang telah diubah dengan Undang-Undang Nomor 13 Tahun 2022. Sebutkan sumber hukum tertulis di Indonesia!' => [
                        'UUD NRI Tahun 1945',
                        'Ketetapan MPR',
                        'Undang-undang',
                        'Peraturan Pemerintah Pengganti Undang-undang',
                        'Peraturan Pemerintah',
                        'Peraturan Presiden',
                        'Peraturan Daerah Provinsi',
                        'Peraturan Daerah Kota/Kabupaten'
                    ],
                    'Sebutkan nama Lembaga Negara yang tercantum pada UUD Negara Republik Indonesia Tahun 1945!' => [
                        'Majelis Permusyawaratan Rakyat (MPR)',
                        'Dewan Perwakilan Rakyat (DPR)',
                        'Dewan Perwakilan Daerah (DPD)',
                        'Presiden',
                        'Mahkamah Agung',
                        'Mahkamah Konstitusi',
                        'Komisi Yudisial',
                        'Badan Pemeriksa Keuangan'
                    ]
                ]
            ]
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
