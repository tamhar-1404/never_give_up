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
        'kategori' => 'artikel',
        'icon' => 'book.jpg'
      ]);
      Kategori::create([
        'kategori' => 'pantun',
        'icon' => 'book.jpg'
      ]);
      Kategori::create([
        'kategori' => 'puisi',
        'icon' => 'book.jpg'
      ]);
      Kategori::create([
        'kategori' => 'potografi',
        'icon' => 'book.jpg'
      ]);
      Kategori::create([
        'kategori' => 'diari',
        'icon' => 'journal.jpg'
      ]);
      Kategori::create([
        'kategori' => 'makalah',
        'icon' => 'book.jpg'
      ]);
      Kategori::create([
        'kategori' => 'ilustrasi',
        'icon' => 'book.jpg'
      ]);
      Kategori::create([
        'kategori' => 'skripsi',
        'icon' => 'book.jpg'
      ]);
      Kategori::create([
        'kategori' => 'esai',
        'icon' => 'book.jpg'
      ]);
      Kategori::create([
        'kategori' => 'Karya ilmiah',
        'icon' => 'book.jpg'
      ]);
      Kategori::create([
        'kategori' => 'lainnya',
        'icon' => 'book.jpg'
      ]);
    }
}
