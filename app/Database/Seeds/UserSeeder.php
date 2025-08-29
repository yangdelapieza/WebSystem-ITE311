public function run()
{
    $data = [
        [
            'username' => 'student01',
            'email'    => 'student01@example.com',
            'password' => password_hash('password123', PASSWORD_DEFAULT),
            'role'     => 'student',
        ],
        [
            'username' => 'instructor01',
            'email'    => 'instructor01@example.com',
            'password' => password_hash('password123', PASSWORD_DEFAULT),
            'role'     => 'instructor',
        ],
        [
            'username' => 'admin01',
            'email'    => 'admin01@example.com',
            'password' => password_hash('password123', PASSWORD_DEFAULT),
            'role'     => 'admin',
        ],
    ];
    foreach ($data as $user) {
        $this->db->table('users')->insert($user);
    }
}