<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama_kategori' => 'Teknologi', 'slug_kategori' => 'teknologi'],
            ['nama_kategori' => 'Pendidikan', 'slug_kategori' => 'pendidikan'],
            ['nama_kategori' => 'Gaya Hidup', 'slug_kategori' => 'gaya-hidup'],
            ['nama_kategori' => 'Kuliner', 'slug_kategori' => 'kuliner'],
            ['nama_kategori' => 'Berita', 'slug_kategori' => 'berita'],
        ];

        $this->db->table('kategori')->insertBatch($data);
    }
}
