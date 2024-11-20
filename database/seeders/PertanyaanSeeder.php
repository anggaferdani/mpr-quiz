<?php

namespace Database\Seeders;

use App\Models\Pertanyaan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pertanyaans = [

            /**
             * Sesi 1
             *
             * UUD NRI Tahun 1945 dan Ketetapan MPR.
             */

            [
                'id_tema' => 1,
                'pertanyaan' => 'Pada Undang-undang Negara Republik Indonesia Nomor 24 Tahun 2009 pada Pasal 2 tentang Bendera, Bahasa, dan Lambang Negara serta Lagu Kebangsaan; Pengaturan bendera, bahasa, dan lambang negara, serta lagu kebangsaan sebagai simbol identitas wujud eksistensi bangsa dan Negara Kesatuan Republik Indonesia dilaksanakan berdasarkan pada asas?'
            ], [
                'id_tema' => 1,
                'pertanyaan' => 'Hak asasi manusia diatur dalam Pasal 28 A sampai 28 J Undang-Undang Dasar Negara Republik Indonesia Tahun 1945. Sebutkan hak asasi manusia yang diatur dalam pasal-pasal tersebut!'
            ], [
                'id_tema' => 1,
                'pertanyaan' => 'Ketetapan MPRS dan MPR RI yang dinyatakan tetap berlaku sampai dengan terbentuknya Undang-Undang sesuai dengan ketentuan Pasal 4 Ketetapan MPR RI Nomor I/MPR/2003 adalah?'
            ], [
                'id_tema' => 1,
                'pertanyaan' => 'Pemerintah harus selalu mengupdate sistem pendidikan nasional khususnya melalui penyesuaian kurikulum sebagai “jantung” pendidikan dan senantiasa mengikuti perkembangan ilmu pengetahuan dan teknologi sebagai realisasi dari Pasal 31 ayat (5) Undang-Undang Dasar Negara Republik Indonesia tahun 1945. Terkait dengan hal tersebut, sebutkan mata pelajaran SMA kelas X /Fase E pada kurikulum merdeka!'
            ],

            /**
             * NKRI & Bhinneka Tunggal Ika.
             */

            [
                'id_tema' => 2,
                'pertanyaan' => 'Hasil Sidang PPKI Kedua Tanggal 19 Agustus 1945 salah satunya adalah Pembentukan Dua Belas Departemen dan Empat Menteri Negara. Sebutkan nama-nama departemen tersebut!'
            ], [
                'id_tema' => 2,
                'pertanyaan' => 'Berdasarkan ketentuan Pasal 9 ayat (1) Undang-Undang No. 24 Tahun 2009 tentang Bendera, Bahasa, dan Lambang Negara, serta Lagu Kebangsaan, penggunaan Bendera Negara Sang Merah Putih wajib dikibarkan setiap hari. Sebutkan tempat dimana bendera Negara Sang Merah Putih dikibarkan?'
            ], [
                'id_tema' => 2,
                'pertanyaan' => 'Ketentuan Pasal 25A Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 meyebutkan bahwa Negara Kesatuan Republik Indonesia adalah sebuah negara kepulauan yang berciri Nusantara dengan wilayah yang batas-batas dan hak-haknya ditetapkan dengan undang-undang. Pertanyannya, sebutkan pulau-pulau yang terdapat di Provinsi Aceh!'
            ], [
                'id_tema' => 2,
                'pertanyaan' => 'Berdasarkan ketentuan Pasal 32 ayat (1) Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 menyebutkan bahwa Negara memajukan kebudayaan nasional Indonesia di tengah peradaban dunia dengan menjamin kebebasan masyarakat dalam memelihara dan mengembangkan nilai-nilai budayanya. Pertanyannya adalah sebutkan lagu-lagu daerah yang berasal dari Provinsi Aceh!'
            ],

            /**
             * Pengetahuan Umum.
             */

            [
                'id_tema' => 3,
                'pertanyaan' => 'Pembagian waktu di Indonesia diatur melalui Keputusan Presiden Republik Indonesia Nomor 41 Tahun 1987 yang ditetapkan pada tanggal 26 November 1987 oleh Presiden Soeharto. Indonesia terbagi dalam tiga waktu yaitu Waktu Indonesia Barat (WIB), Waktu Indonesia Tengah (WITA), Waktu Indonesia Timur (WIT). Provinsi Aceh masuk zona Waktu Indonesia Barat. Sebutkan nama-nama Provinsi selain Provinsi Aceh yang masuk di zona Waktu Indonesia Barat!'
            ], [
                'id_tema' => 3,
                'pertanyaan' => 'Indonesia merupakan negara kepulauan yang terletak di lingkaran api Pasifik, dikenal memiliki banyak gunung berapi yang tersebar di seluruh wilayahnya. Di antara ribuan gunung tersebut, sebutkan 10 gunung tertinggi di Indonesia!'
            ], [
                'id_tema' => 3,
                'pertanyaan' => 'Pasal 32 ayat (1) Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 menyebutkan bahwa “Negara memajukan kebudayaan nasional Indonesia di tengah peradaban dunia dengan menjamin kebebasan masyarakat dalam memelihara dalam mengembangkan nilai-nilai budayanya”. Sebutkan tarian tradisional dari Provinsi Aceh!'
            ], [
                'id_tema' => 3,
                'pertanyaan' => 'Sebutkan gambar pahlawan nasional yang ada di mata uang rupiah Indonesia!'
            ],

            /**
             * Sesi 1
             *
             * NASIONAL & INTERNASIONAL.
             */

            [
                'id_tema' => 4,
                'pertanyaan' => 'Perhimpunan Bangsa-Bangsa Asia Tenggara (ASEAN) didirikan pada tahun 1967. Sebutkan anggota negara ASEAN saat ini?'
            ], [
                'id_tema' => 4,
                'pertanyaan' => 'Pekan Olahraga Nasional 2024 disingkat dengan PON XXI/PON ACEH-SUMUT 2024 penyelenggaraan ke-21 yang merupakan ajang multi-olahraga nasional utama berlangsung dari 8 s.d 20 September 2024 dengan Aceh dan Sumatera Utara sebagai tuan rumah. Sebutkan 10 provinsi teratas yang mendapatkan medali emas terbanyak pada penyelenggaraan PON XXI Aceh-Sumut 2024?'
            ], [
                'id_tema' => 4,
                'pertanyaan' => 'Organisasi Kerja Sama Islam (OKI) didirikan berdasarkan pertemuan tingkat tinggi di Rabat, Maroko, pada 25 September 1969 setelah insiden pembakaran bagian dari Masjid Al-Aqsa pada 21 Agustus 1969. Sebutkan Negara anggota OKI yang berasal di Asia dari tahun 1969-1972!'
            ], [
                'id_tema' => 4,
                'pertanyaan' => 'Kawasan Asia Tenggara memiliki kerjasama perdagangan bebas yang disebut AFTA (ASEAN Free Trade Area). Sebutkan daftar negara-negara anggota organisasi AFTA!'
            ],
        ];

        foreach ($pertanyaans as $pertanyaan) {
            Pertanyaan::create($pertanyaan);
        }
    }
}
