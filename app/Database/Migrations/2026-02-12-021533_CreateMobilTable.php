<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMobilTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_mobil' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'merk' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'plat_nomor' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
            'harga_per_hari' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'default'    => 'tersedia',
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
        $this->forge->createTable('mobil');
    }

    public function down()
    {
        $this->forge->dropTable('mobil');
    }
}
