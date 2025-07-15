<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class PostSeeder extends Seeder
{
    public function run()
    {
         $faker = Factory::create('id_ID');

        // Manual insert
        $dataManual = [
            [
                'user_id'      => 4,
                'subject_id'   => 4,
                'content'      => 'Keanekaragaman kelompok manusia atau kelompok sosial yang tidak hanya dilatarbelakangi oleh perbedaan dan persamaan suku, agama, dan ras, tetapi meliputi berbagai aspek kehidupan manusia, karena adanya ...',
                'type'         => 'text',
                'image'        => 'soal2.jpg',
                'reward_point' => 10,
                'created_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'user_id'      => 3,
                'subject_id'   => 1,
                'content'      => 'Di suatu kandang terdapat 40 ekor ayam, 15 ekor diantaranya jantan. Di antara ayam jantan tersebut, 7 ekor berwarna putih. Jika banyak ayam berwarna putih adalah 22 ekor, maka banyak ayam betina yang tidak berwarna putih adalah …',
                'type'         => 'image',
                'image'        => 'soal1.jpg',
                'reward_point' => 15,
                'created_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'user_id'      => 2,
                'subject_id'   => 2,
                'content'      => 'Manakah di antara pilihan peralatan berikut yang mengubah energi listrik menjadi energi gerak?',
                'type'         => 'image',
                'image'        => 'soal3.jpg',
                'reward_point' => 15,
                'created_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'user_id'      => 5,
                'subject_id'   => 7,
                'content'      => 'Penelitian etnografi yang memusatkan usahanya untuk menemukan bagaimana berbagai masyarakat mengorganisasikan budaya mereka dalam pikiran mereka dan kemudian menggunakan budaya tersebut dalam kehidupan. Penelitian tersebut termasuk …',
                'type'         => 'image',
                'image'        => 'soal4.jpg',
                'reward_point' => 15,
                'created_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'user_id'      => 13,
                'subject_id'   => 8,
                'content'      => 'Karya seni patung termasuk ke dalam karya seni rupa ...',
                'type'         => 'image',
                'image'        => 'soal5.jpg',
                'reward_point' => 15,
                'created_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'user_id'      => 14,
                'subject_id'   => 12,
                'content'      => 'Hubbah adalah seorang anak dari keluarga miskin, bapaknya pedagang buah di pasar yang penghasilannya hanya dapat mencukupi kebutuhan pokok saja. Keluarga Hubbah termasuk kelompok masyarakat yang kekurangan, tetapi ia termasuk orang yang selalu berusaha berdoa dan mengharapkan anugerah Allah Swt karena dia yakin Allah akan mengabulkan doanya.
                                   Perilaku Hubbah adalah contoh orang sabar dalam menghadapi ujian dan cobaan. Berikut ini adalah keutamaan orang dan balasan orang sabar dalam menghadapi ujian dan cobaan...',
                'type'         => 'image',
                'image'        => 'soal6.jpg',
                'reward_point' => 15,
                'created_at'   => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert manual data
        $this->db->table('posts')->insertBatch($dataManual);

        $faker = Factory::create('id_ID');
        $rewardOptions = [15, 25, 30, 50];

        // Soal dengan subject_id yang akurat
        $soalList = [
            ['content' => 'Berapakah hasil dari 15 × 12?', 'subject_id' => 1],
            ['content' => 'Apa perbedaan bilangan genap dan ganjil?', 'subject_id' => 1],
            ['content' => 'Apa itu sel dan apa fungsinya?', 'subject_id' => 2],
            ['content' => 'Jelaskan proses fotosintesis pada tumbuhan.', 'subject_id' => 2],
            ['content' => 'Apa itu inflasi dan dampaknya bagi masyarakat?', 'subject_id' => 3],
            ['content' => 'Sebutkan kegiatan ekonomi yang dominan di Indonesia.', 'subject_id' => 3],
            ['content' => 'Apa isi sila keempat Pancasila?', 'subject_id' => 4],
            ['content' => 'Mengapa kita harus mematuhi peraturan?', 'subject_id' => 4],
            ['content' => 'Apa penyebab terjadinya Perang Dunia II?', 'subject_id' => 5],
            ['content' => 'Jelaskan dampak penjajahan Belanda di Indonesia.', 'subject_id' => 5],
            ['content' => 'Apa rumus gaya menurut Hukum Newton ke-2?', 'subject_id' => 6],
            ['content' => 'Apa itu percepatan dan contohnya?', 'subject_id' => 6],
            ['content' => 'Apa itu kebudayaan lokal?', 'subject_id' => 7],
            ['content' => 'Sebutkan contoh tradisi unik di Indonesia.', 'subject_id' => 7],
            ['content' => 'Apa itu seni rupa dua dimensi?', 'subject_id' => 8],
            ['content' => 'Apa perbedaan antara seni lukis dan seni patung?', 'subject_id' => 8],
            ['content' => 'Buatlah kalimat dengan kata “menyukai”.', 'subject_id' => 9],
            ['content' => 'Apa struktur dari teks narasi?', 'subject_id' => 9],
            ['content' => 'Translate: "I have a cat."', 'subject_id' => 10],
            ['content' => 'What is the difference between "can" and "could"?', 'subject_id' => 10],
            ['content' => 'Apa bahasa Jepang dari “terima kasih”?', 'subject_id' => 11],
            ['content' => 'Sebutkan 3 kosakata bahasa Korea.', 'subject_id' => 11],
            ['content' => 'Apa pengertian iman kepada malaikat?', 'subject_id' => 12],
            ['content' => 'Sebutkan rukun Islam.', 'subject_id' => 12],
        ];


        // Faker-generated posts
                for ($i = 0; $i < 15; $i++) {
            $soal = $faker->randomElement($soalList);

            $dataFaker = [
                'user_id'      => $faker->numberBetween(5, 14),
                'subject_id'   => $soal['subject_id'],
                'content'      => $soal['content'],
                'type'         => 'text',
                'image'        => null,
                'reward_point' => $faker->randomElement($rewardOptions),
                'created_at'   => $faker->date('Y-m-d') . ' ' . $faker->time('H:i:s'),
            ];

            $this->db->table('posts')->insert($dataFaker);
        }

    }
}