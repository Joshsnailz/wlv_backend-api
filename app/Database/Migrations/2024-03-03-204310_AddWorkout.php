<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateWorkoutsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'reps'         => [
                'type' => 'INT',
            ],
            'load'         => [
                'type' => 'INT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('workouts');
    }

    public function down()
    {
        $this->forge->dropTable('workouts');
    }
}
