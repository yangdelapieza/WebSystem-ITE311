public function up()
{
    $this->forge->addField([
        'id'          => [
            'type'           => 'INT',
            'constraint'     => 11,
            'unsigned'       => true,
            'auto_increment' => true,
        ],
        'username'    => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
        ],
        'email'       => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
        ],
        'password'    => [
            'type'       => 'VARCHAR',
            'constraint' => '255',
        ],
        'role'        => [
            'type'       => 'ENUM',
            'constraint' => ['student', 'instructor', 'admin'],
            'default'    => 'student',
        ],
        'created_at'  => [
            'type' => 'DATETIME',
