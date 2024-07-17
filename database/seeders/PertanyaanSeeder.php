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
                'pertanyaan' => 'Berdasarkan pada pasal 23B Undang-undang Dasar Negara Republik Indonesia Tahun 1945 menyebutkan macam dan harga mata uang ditetapkan dengan Undang-undang. Sebutkan mata uang pecahan Rupiah yang dikeluarkan oleh Bank Indonesia pada Tahun Emisi/Keluaran 2022?'
            ], [
                'id_tema' => 1,
                'pertanyaan' => 'Menurut Undang-undang Nomor 4 Tahun 2023 tentang Pengembangan dan Penguatan Sektor Keuangan. Pada undang-undang tersebut mengatur tentang Lembaga Penjamin Simpanan (LPS). Sebutkan nama-nama bank yang masuk menjadi anggota LPS yang berbadan hukum terbuka, namun bukan bank milik daerah?'
            ], [
                'id_tema' => 1,
                'pertanyaan' => 'Berdasarkan Undang-undang Dasar Negara Republik Indonesia 1945 Pasal 33 ayat 2 cabang-cabang produksi yang penting bagi negara dan yang menguasai hajat hidup orang banyak dikuasai oleh negara. Badan Usaha Milik Negara (BUMN) yang dikenal sebagai perusahaan milik negara. Perusahaan apa saja yang termasuk ke dalam BUMN!'
            ],

            /**
             * NKRI & Bhinneka Tunggal Ika.
             */

            [
                'id_tema' => 2,
                'pertanyaan' => 'Negara Kesatuan Republik Indonesia (NKRI) dibagi atas daerah-daerah provinsi. Sepanjang tahun 2022-2023 telah dilantik Penjabat Gubernur. Sebutkan provinsi mana sajakah yang saat ini dijabat oleh Penjabat Gubernur (PJ)?'
            ], [
                'id_tema' => 2,
                'pertanyaan' => 'NKRI dibagi menjadi tiga wilayah berdasarkan zona waktu yakni Waktu Indonesia Barat, Waktu Indonesia Tengah maupun Waktu Indonesia Timur. Sebutkan provinsi yang termasuk dalam Waktu Indonesia Bagian Tengah?'
            ], [
                'id_tema' => 2,
                'pertanyaan' => 'Sebutkan contoh kata serapan dari bahasa sansekerta menjadi bahasa Indonesia yang berawalan dari huruf vokal?'
            ],

            /**
             * Pengetahuan Umum.
             */

            [
                'id_tema' => 3,
                'pertanyaan' => 'Bandar udara sebagai tempat pesawat udara mendarat dan lepas landas. Sebutkan nama Bandar udara yang berada di pulau Jawa!'
            ], [
                'id_tema' => 3,
                'pertanyaan' => 'Taman nasional adalah kawasan pelestarian alam yang mempunyai ekosistem asli. Sebutkan taman nasional apa saja yang berada di pulau Jawa?'
            ], [
                'id_tema' => 3,
                'pertanyaan' => 'Indonesia dibagi menjadi tiga wilayah berdasarkan zona waktu yakni Waktu Indonesia Barat, Waktu Indonesia Tengah maupun Waktu Indonesia Timur. Sebutkan nama-nama kota yang termasuk dalam Waktu Indonesia Barat?'
            ],

            /**
             * Sesi 2
             *
             * NKRI.
             */

            [
                'id_tema' => 4,
                'pertanyaan' => 'Badan Penyelidik Usaha-usaha Persiapan Kemerdekaan atau yang dikenal dengan BPUPKI dibentuk pada masa pendudukan Jepang di Indonesia. Sebutkan tugas-tugas yang diberikan kepada BPUPKI saat melaksanakan persidangan pada tanggal 29 Mei sampai 01 Juni 1945 dan 10 sampai 17 Juli 1945!'
            ], [
                'id_tema' => 4,
                'pertanyaan' => 'Konferensi Meja Bundar adalah sebuah pertemuan yang dilaksanakan di Den Haag, Belanda pada 23 Agustus 1949. Jelaskan hasil dari konferensi tersebut!'
            ], [
                'id_tema' => 4,
                'pertanyaan' => 'Jelaskan makna dari Negara Kesatuan dalam Undang-Undang Dasar 1945!'
            ],
        ];

        foreach ($pertanyaans as $pertanyaan) {
            Pertanyaan::create($pertanyaan);
        }
    }
}
