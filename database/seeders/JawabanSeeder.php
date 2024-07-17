<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jawabans = [

            /**
             * UUD NRI Tahun 1945 dan Ketetapan MPR.
             *
             * Berdasarkan pada pasal 23B Undang-undang Dasar Negara Republik Indonesia Tahun 1945 menyebutkan macam dan harga mata uang ditetapkan dengan Undang-undang.
             * Sebutkan mata uang pecahan Rupiah yang dikeluarkan oleh Bank Indonesia pada Tahun Emisi/Keluaran 2022?
             */

            [
                'id_pertanyaan' => 1,
                'jawaban' => 'Rp 100.000'
            ], [
                'id_pertanyaan' => 1,
                'jawaban' => 'Rp 75.000'
            ], [
                'id_pertanyaan' => 1,
                'jawaban' => 'Rp 50.000'
            ], [
                'id_pertanyaan' => 1,
                'jawaban' => 'Rp 20.000'
            ], [
                'id_pertanyaan' => 1,
                'jawaban' => 'Rp 10.000'
            ], [
                'id_pertanyaan' => 1,
                'jawaban' => 'Rp 5.000'
            ], [
                'id_pertanyaan' => 1,
                'jawaban' => 'Rp 2.000'
            ], [
                'id_pertanyaan' => 1,
                'jawaban' => 'Rp 1.000 (kertas & koin)'
            ], [
                'id_pertanyaan' => 1,
                'jawaban' => 'Rp 500'
            ], [
                'id_pertanyaan' => 1,
                'jawaban' => 'Rp 200'
            ], [
                'id_pertanyaan' => 1,
                'jawaban' => 'Rp 100'
            ],

            /**
             * Menurut Undang-undang Nomor 4 Tahun 2023 tentang Pengembangan dan Penguatan Sektor Keuangan. Pada undang-undang tersebut mengatur tentang Lembaga Penjamin Simpanan (LPS).
             * Sebutkan nama-nama bank yang masuk menjadi anggota LPS yang berbadan hukum terbuka, namun bukan bank milik daerah?
             */

            [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Negara Indonesia (BNI)'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Rakyat Indonesia (BRI)'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Tabungan Negara (BTN)'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Mandiri'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Artha Graha Internasional'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Krom Bank Indonesia'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Bumi Arta'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Central Asia (BCA)'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Cimb Niaga'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Danamon'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank MNC Internasional'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Mayapada Internasional'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Mega'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank OCBC NISP'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Permata'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Raya Indonesia'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank BTPN Syariah'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Woori Saudara Indonesia'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Sinarmas'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Victoria Internasional'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Capital Indonesia'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank China Construction Bank Indonesia'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Syariah Indonesia (BSI)'
            ], [
                'id_pertanyaan' => 2,
                'jawaban' => 'Bank Permata'
            ],

            /**
             * Berdasarkan Undang-undang Dasar Negara Republik Indonesia 1945 Pasal 33 ayat 2 cabang-cabang produksi yang penting bagi negara dan yang menguasai hajat hidup orang banyak dikuasai oleh negara.
             * Badan Usaha Milik Negara (BUMN) yang dikenal sebagai perusahaan milik negara. Perusahaan apa saja yang termasuk ke dalam BUMN!
             */

            [
                'id_pertanyaan' => 3,
                'jawaban' => 'PT Pertamina'
            ], [
                'id_pertanyaan' => 3,
                'jawaban' => 'PT Telekomunikasi Indonesia'
            ], [
                'id_pertanyaan' => 3,
                'jawaban' => 'PT PLN'
            ], [
                'id_pertanyaan' => 3,
                'jawaban' => 'PT Pelni (Pelayaran Nasional Indonesia)'
            ], [
                'id_pertanyaan' => 3,
                'jawaban' => 'PT Peruri (Percetakan Uang Republik Indonesia)'
            ], [
                'id_pertanyaan' => 3,
                'jawaban' => 'PT Garuda Indonesia'
            ], [
                'id_pertanyaan' => 3,
                'jawaban' => 'PT Perusahaan Listrik Negara'
            ], [
                'id_pertanyaan' => 3,
                'jawaban' => 'PT Kereta Api Indonesia'
            ], [
                'id_pertanyaan' => 3,
                'jawaban' => 'PT Jasa Marga'
            ], [
                'id_pertanyaan' => 3,
                'jawaban' => 'PT Semen Indonesia'
            ], [
                'id_pertanyaan' => 3,
                'jawaban' => 'PT Bio Farma'
            ], [
                'id_pertanyaan' => 3,
                'jawaban' => 'PT Krakatau Steel'
            ], [
                'id_pertanyaan' => 3,
                'jawaban' => 'PT Mineral Industri Indonesia'
            ], [
                'id_pertanyaan' => 3,
                'jawaban' => 'PT Pupuk Indonesia'
            ], [
                'id_pertanyaan' => 3,
                'jawaban' => 'PT Taspen'
            ], [
                'id_pertanyaan' => 3,
                'jawaban' => 'Perusahaan Umum Damri'
            ],

            /**
             * NKRI & Bhinneka Tunggal Ika.
             *
             * Negara Kesatuan Republik Indonesia (NKRI) dibagi atas daerah-daerah provinsi. Sepanjang tahun 2022-2023 telah dilantik Penjabat Gubernur. Sebutkan provinsi mana sajakah yang saat ini dijabat oleh Penjabat Gubernur (PJ)?
             */

            [
                'id_pertanyaan' => 4,
                'jawaban' => 'Aceh'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Sumatera Utara'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Sumatera Selatan'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Kepulauan Bangka Belitung'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Banten'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'DKI Jakarta'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Jawa Barat'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Jawa Tengah'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Kalimantan Barat'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Kalimantan Timur'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Sulawesi Barat'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Sulawesi Tenggara'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Bali'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Gorontalo'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Sulawesi Selatan'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Nusa Tenggara Barat'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Nusa Tenggara Timur'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Papua'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Papua Barat Daya'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Papua Barat'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Papua Tengah'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Papua Pegunungan'
            ], [
                'id_pertanyaan' => 4,
                'jawaban' => 'Papua Selatan'
            ],

            /**
             * NKRI dibagi menjadi tiga wilayah berdasarkan zona waktu yakni Waktu Indonesia Barat, Waktu Indonesia Tengah maupun Waktu Indonesia Timur.
             * Sebutkan provinsi yang termasuk dalam Waktu Indonesia Bagian Tengah?.
             */

            [
                'id_pertanyaan' => 5,
                'jawaban' => 'Kalimantan Utara'
            ], [
                'id_pertanyaan' => 5,
                'jawaban' => 'Kalimantan Timur'
            ], [
                'id_pertanyaan' => 5,
                'jawaban' => 'Kalimantan Selatan'
            ], [
                'id_pertanyaan' => 5,
                'jawaban' => 'Bali'
            ], [
                'id_pertanyaan' => 5,
                'jawaban' => 'Nusa Tenggara Timur'
            ], [
                'id_pertanyaan' => 5,
                'jawaban' => 'Nusa Tenggara Barat'
            ], [
                'id_pertanyaan' => 5,
                'jawaban' => 'Sulawesi Barat'
            ], [
                'id_pertanyaan' => 5,
                'jawaban' => 'Sulawesi Tengah'
            ], [
                'id_pertanyaan' => 5,
                'jawaban' => 'Sulawesi Selatan'
            ], [
                'id_pertanyaan' => 5,
                'jawaban' => 'Sulawesi Utara'
            ], [
                'id_pertanyaan' => 5,
                'jawaban' => 'Gorontalo'
            ],

            /**
             * Sebutkan contoh kata serapan dari bahasa sansekerta menjadi bahasa Indonesia yang berawalan dari huruf vokal?.
             */

            [
                'id_pertanyaan' => 6,
                'jawaban' => 'Agama (āgama)'
            ], [
                'id_pertanyaan' => 6,
                'jawaban' => 'Aksara (akṣara)'
            ], [
                'id_pertanyaan' => 6,
                'jawaban' => 'Aneka (aneka)'
            ], [
                'id_pertanyaan' => 6,
                'jawaban' => 'Eka'
            ], [
                'id_pertanyaan' => 6,
                'jawaban' => 'Irama (virama)'
            ], [
                'id_pertanyaan' => 6,
                'jawaban' => 'Istana (āsthāna)'
            ], [
                'id_pertanyaan' => 6,
                'jawaban' => 'Istimewa (āstām eva)'
            ], [
                'id_pertanyaan' => 6,
                'jawaban' => 'Udara (udara)'
            ], [
                'id_pertanyaan' => 6,
                'jawaban' => 'Unta (uṣṭra)'
            ], [
                'id_pertanyaan' => 6,
                'jawaban' => 'Upaya (upāya)'
            ],

            /**
             * Pengetahuan Umum.
             *
             * Bandar udara sebagai tempat pesawat udara mendarat dan lepas landas. Sebutkan nama Bandar udara yang berada di pulau Jawa!
             */

            [
                'id_pertanyaan' => 7,
                'jawaban' => 'Abdulrachman Saleh'
            ], [
                'id_pertanyaan' => 7,
                'jawaban' => 'Adisucipto'
            ], [
                'id_pertanyaan' => 7,
                'jawaban' => 'Ahmad Yani'
            ], [
                'id_pertanyaan' => 7,
                'jawaban' => 'Blimbingsari'
            ], [
                'id_pertanyaan' => 7,
                'jawaban' => 'Halim Perdanakusuma'
            ], [
                'id_pertanyaan' => 7,
                'jawaban' => 'Husein Sastranegara'
            ], [
                'id_pertanyaan' => 7,
                'jawaban' => 'Adisumarmo'
            ], [
                'id_pertanyaan' => 7,
                'jawaban' => 'Juanda'
            ], [
                'id_pertanyaan' => 7,
                'jawaban' => 'Soekarno–Hatta'
            ], [
                'id_pertanyaan' => 7,
                'jawaban' => 'Yogyakarta'
            ], [
                'id_pertanyaan' => 7,
                'jawaban' => 'Pondok Cabe'
            ], [
                'id_pertanyaan' => 7,
                'jawaban' => 'Pulau Panjang'
            ], [
                'id_pertanyaan' => 7,
                'jawaban' => 'Tanjung Lesung'
            ], [
                'id_pertanyaan' => 7,
                'jawaban' => 'Wiriadinata'
            ], [
                'id_pertanyaan' => 7,
                'jawaban' => 'Gading'
            ],

            /**
             * Taman nasional adalah kawasan pelestarian alam yang mempunyai ekosistem asli. Sebutkan taman nasional apa saja yang berada di pulau Jawa?
             */

            [
                'id_pertanyaan' => 8,
                'jawaban' => 'TN Alas purwo'
            ], [
                'id_pertanyaan' => 8,
                'jawaban' => 'TN Baluran'
            ], [
                'id_pertanyaan' => 8,
                'jawaban' => 'TN Bromo tengger semeru'
            ], [
                'id_pertanyaan' => 8,
                'jawaban' => 'TN Gunung ciremai'
            ], [
                'id_pertanyaan' => 8,
                'jawaban' => 'TN Gede pangrango'
            ], [
                'id_pertanyaan' => 8,
                'jawaban' => 'TN Halimun salak'
            ], [
                'id_pertanyaan' => 8,
                'jawaban' => 'TN Gunung merapi'
            ], [
                'id_pertanyaan' => 8,
                'jawaban' => 'TN Gunung merbabu'
            ], [
                'id_pertanyaan' => 8,
                'jawaban' => 'TN Karimun jawa'
            ], [
                'id_pertanyaan' => 8,
                'jawaban' => 'TN Kep. Seribu'
            ], [
                'id_pertanyaan' => 8,
                'jawaban' => 'TN Meru betiri'
            ], [
                'id_pertanyaan' => 8,
                'jawaban' => 'TN Ujung kulon'
            ],

            /**
             * Indonesia dibagi menjadi tiga wilayah berdasarkan zona waktu yakni Waktu Indonesia Barat, Waktu Indonesia Tengah maupun Waktu Indonesia Timur. Sebutkan nama-nama kota yang termasuk dalam Waktu Indonesia Barat?
             */

            [
                'id_pertanyaan' => 9,
                'jawaban' => 'Banda Aceh'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Medan'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Padang'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Pekanbaru'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Tanjung Pinang'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Pangkal Pinang'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Jambi'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Bengkulu'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Palembang'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Bandar Lampung'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Serang'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Jakarta'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Bandung'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Semarang'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Yogyakarta'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Surabaya'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Pontianak'
            ], [
                'id_pertanyaan' => 9,
                'jawaban' => 'Palangkaraya'
            ],

            /**
             * NKRI.
             *
             * Badan Penyelidik Usaha-usaha Persiapan Kemerdekaan atau yang dikenal dengan BPUPKI dibentuk pada masa pendudukan Jepang di Indonesia.
             * Sebutkan tugas-tugas yang diberikan kepada BPUPKI saat melaksanakan persidangan pada tanggal 29 Mei sampai 01 Juni 1945 dan 10 sampai 17 Juli 1945!
             */

            ['id_pertanyaan' => 10,
            'jawaban' => 'Penyelidikan usaha-usaha kemerdekaan Indonesia'],
            ['id_pertanyaan' => 10,
            'jawaban' => 'Mempersiapkan kemerdekaan'],
            ['id_pertanyaan' => 10,
            'jawaban' => 'Merumuskan dasar negara'],
            ['id_pertanyaan' => 10,
            'jawaban' => 'Penyusunan naskah konstitusi'],
            ['id_pertanyaan' => 10,
            'jawaban' => 'Menyelidiki situasi politik dan sosial'],
            ['id_pertanyaan' => 10,
            'jawaban' => 'Merumuskan tujuan dan cita-cita kemerdekaan'],
            ['id_pertanyaan' => 10,
            'jawaban' => 'Konsultasi dengan berbagai pihak'],

            /**
             * Konferensi Meja Bundar adalah sebuah pertemuan yang dilaksanakan di Den Haag, Belanda pada 23 Agustus 1949. Jelaskan hasil dari konferensi tersebut!
             */

            ['id_pertanyaan' => 11,
            'jawaban' => 'Pembentukan Uni Belanda- Republik Indonesia Serikat'],
            ['id_pertanyaan' => 11,
            'jawaban' => 'Soekarno dan Moh. Hatta akan menjabat sebagai Presiden dan Wakil Presiden Republik Indonesia Serikat untuk periode 1949-1950'],
            ['id_pertanyaan' => 11,
            'jawaban' => 'Irian Barat masih dikuasai Belanda dan tidak dimasukkan ke dalam Republik Indonesia Serikat sampai dilakukan perundingan lebih lanjut'],
            ['id_pertanyaan' => 11,
            'jawaban' => 'Pemerintah Indonesia harus menanggung hutang negeri Hindia Belanda sebesar 4,3 Milyar gulden'],
            ['id_pertanyaan' => 11,
            'jawaban' => 'Belanda akan menyerahkan kedaulatan kepada Republik Indonesia Serikat paling lambat tahun 1949'],
            ['id_pertanyaan' => 11,
            'jawaban' => 'Pasukan Tentara Kerajaan Hindia Belanda (KNIL) akan bergabung dalam pasukan Angkatan Perang RIS (APRIS) dan secara bertahap akan mengambil alih penjagaan keamanan di seluruh wilayah RIS'],

            /**
             * Jelaskan makna dari Negara Kesatuan dalam Undang-Undang Dasar 1945!
             */

            ['id_pertanyaan' => 12,
            'jawaban' => 'Negara Indonesia ialah Negara Kesatuan, yang berbentuk Republik'],
            ['id_pertanyaan' => 12,
            'jawaban' => 'Negara Kesatuan Republik Indonesia dibagi atas daerah-daerah provinsi dan daerah provinsi itu dibagi atas kabupaten dan kota, yang tiap-tiap provinsi, kabupaten, dan kota itu mempunyai pemerintahan daerah, yang diatur dengan undang-undang'],
            ['id_pertanyaan' => 12,
            'jawaban' => 'Negara mengakui dan menghormati satuan-satuan pemerintahan daerah yang bersifat khusus atau bersifat istimewa yang diatur dengan undang-undang'],
            ['id_pertanyaan' => 12,
            'jawaban' => 'Negara mengakui dan menghormati kesatuan-kesatuan masyarakat hukum adat beserta hak-hak tradisionalnya sepanjang masih hidup dan sesuai dengan perkembangan masyarakat dan prinsip Negara Kesatuan Republik Indonesia, yang diatur dalam undang-undang'],
            ['id_pertanyaan' => 12,
            'jawaban' => 'Negara Kesatuan Republik Indonesia adalah sebuah negara kepulauan yang berciri Nusantara dengan wilayah yang batas-batas dan hak-haknya ditetapkan dengan undang-undang'],
            ['id_pertanyaan' => 12,
            'jawaban' => 'Khusus mengenai bentuk Negara Kesatuan Republik Indonesia tidak dapat dilakukan perubahan']
        ];

        foreach ($jawabans as $jawaban) {
            Jawaban::create($jawaban);
        }
    }
}
