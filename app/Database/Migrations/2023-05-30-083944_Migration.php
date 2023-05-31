<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumns extends Migration
{
    public function up()
    {
        $this->forge->addColumn('post',[
            'views_count'=>[
                'type'=> 'INT',
                'constraint' =>11,
                'default'=>0,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('post','views_count');
    }
}
