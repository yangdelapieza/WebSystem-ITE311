<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
        [
            'username' => 'student01',
            'email'    => 'student01@example.com',
            'password' => password_hash('password123', PASSWORD_DEFAULT),
        ],
        [
            'username' => 'instructor01',
            'email'    => 'instructor01@example.com',
            'password' => password_hash('password123', PASSWORD_DEFAULT),
        ],
        [
            'username' => 'admin01',
            'email'    => 'admin01@example.com',
            'password' => password_hash('password123', PASSWORD_DEFAULT),
        ],
                ];
        foreach ($data as $user) {
            $this->db->table('users')->insert($user);
        }
    }
}