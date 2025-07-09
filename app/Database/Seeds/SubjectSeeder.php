<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SubjectSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'       => 'Matematika',
            ],
            [
                'name'       => 'Biologi',
            ],
            [
                'name'       => 'Ips'
            ],
            [
                'name'       => 'PPKN',
            ],
            [
                'name'       => 'Sejarah',
            ],
            [
                'name'       => 'Fisika',
            ],
            [
                'name'       => 'Antropologi',
            ],
            [
                'name'       => 'Seni',
            ],
            [
                'name'       => 'Bahasa Indonesia',
            ],
            [
                'name'       => 'Bahasa Inggris',
            ],
            [
                'name'       => 'Bahasa Asing',
            ],
            [
                'name'       => 'PAI',
            ],
        ];
        $this->db->table('subjects')->insertBatch($data);
    }
}
