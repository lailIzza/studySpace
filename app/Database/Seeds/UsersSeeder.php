<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class UsersSeeder extends Seeder
{
    public function run()
    {
         $dataManual = [
            [
                'username'     => 'admin',
                'email'        => 'admin@studyspace.com',
                'password'     => password_hash('admin457', PASSWORD_DEFAULT),
                'gender'       => 'male',
                'role'         => 'admin',
                'points'       => 999,
                'avatar_color' => '#000000',
                'created_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'username'     => 'laila',
                'email'        => 'laila@gmail.com',
                'password'     => password_hash('laila1864', PASSWORD_DEFAULT),
                'gender'       => 'female',
                'role'         => 'user',
                'points'       => '450',
                'avatar_color' => '#e91e63',
                'created_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'username'     => 'Kamal01',
                'email'        => 'kamal@gmail.com',
                'password'     => password_hash('01kamal', PASSWORD_DEFAULT),
                'gender'       => 'male',
                'role'         => 'user',
                'points'       => 150,
                'avatar_color' => '#3498db',
                'created_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'username'     => 'Rezaa',
                'email'        => 'reza@gmail.com',
                'password'     => password_hash('rezaa', PASSWORD_DEFAULT),
                'gender'       => 'male',
                'role'         => 'user',
                'points'       => 50,
                'avatar_color' => '#3498db',
                'created_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'username'     => 'Azalia',
                'email'        => 'azalia@gmail.com',
                'password'     => password_hash('azaliaaa', PASSWORD_DEFAULT),
                'gender'       => 'female',
                'role'         => 'user',
                'points'       => 80,
                'avatar_color' => '#e91e63',
                'created_at'   => date('Y-m-d H:i:s'),
            ],
    
        ];

        $this->db->table('users')->insertBatch($dataManual);

        //data random dari faker
        $faker = Factory::create();
        $faker->seed(2025); 
        for ($i = 0; $i < 10; $i++) {
            $gender = $faker->randomElement(['male', 'female']);
            $this->db->table('users')->insert([
                'username'     => $faker->userName,
                'email'        => $faker->unique()->email,
                'password'     => password_hash('65432', PASSWORD_DEFAULT),
                'gender'       => $gender,
                'role'         => 'user',
                'points'       => $faker->numberBetween(0, 200),
                'avatar_color' => $faker->hexColor,
                'created_at'   => $faker->date('Y-m-d H:i:s'),
            ]);
        }
    }
}
