<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kategori;


class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Kategori::create([
        'kategori' => 'cerpen',
        'icon' => 'book.jpg'
      ]);
      Kategori::create([
        'kategori' => 'artikel'
      ]);
      Kategori::create([
        'kategori' => 'pantun'
      ]);
      Kategori::create([
        'kategori' => 'puisi'
      ]);
      Kategori::create([
        'kategori' => 'potografi'
      ]);
      Kategori::create([
        'kategori' => 'diari',
        'icon' => 'journal.jpg'
      ]);
      Kategori::create([
        'kategori' => 'makalah'
      ]);
      Kategori::create([
        'kategori' => 'ilustrasi'
      ]);
      Kategori::create([
        'kategori' => 'skripsi'
      ]);
      Kategori::create([
        'kategori' => 'esai'
      ]);
      Kategori::create([
        'kategori' => 'Karya ilmiah'
      ]);
    }
}
