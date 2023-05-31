<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        $data=[];
        for($i=0;$i<5;$i++)
        {
            array_push($data,[
                'title' => 'Post'.$i,
                'poza' => 'assets/img/about-bg.jpg',
            ]);
        }
        $this->db->table('post')->insertBatch($data);
    }
}
