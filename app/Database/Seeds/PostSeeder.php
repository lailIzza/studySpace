<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        // Manual insert
        $dataManual = [
            [
                'user_id'      => 8,
                'subject_id'   => 4,
                'content'      => 'Keanekaragaman kelompok manusia atau kelompok sosial yang tidak hanya dilatarbelakangi oleh perbedaan dan persamaan suku, agama, dan ras, tetapi meliputi berbagai aspek kehidupan manusia, karena adanya ...',
                'type'         => 'text',
                'image'        => 'soal2.jpg',
                'reward_point' => 10,
                'created_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'user_id'      => 10,
                'subject_id'   => 1,
                'content'      => 'Di suatu kandang terdapat 40 ekor ayam, 15 ekor diantaranya jantan. Di antara ayam jantan tersebut, 7 ekor berwarna putih. Jika banyak ayam berwarna putih adalah 22 ekor, maka banyak ayam betina yang tidak berwarna putih adalah …',
                'type'         => 'image',
                'image'        => 'soal1.jpg',
                'reward_point' => 15,
                'created_at'   => date('Y-m-d H:i:s'),
            ]
        ];

        // Insert manual data
        $this->db->table('posts')->insertBatch($dataManual);

        // Faker-generated posts
        for ($i = 0; $i < 10; $i++) {
            $type = $faker->randomElement(['text', 'image']);
            $dataFaker = [
                'user_id'      => $faker->numberBetween(1, 5),
                'subject_id'   => $faker->numberBetween(1, 3),
                'content'      => $faker->paragraph(),
                'type'         => $type,
                'image'        => $type === 'image' ? $faker->imageUrl(640, 480, 'technics', true) : null,
                'reward_point' => $faker->numberBetween(0, 50),
                'created_at'   => $faker->date('Y-m-d H:i:s'),
            ];

            $this->db->table('posts')->insert($dataFaker);
        }
    }
}