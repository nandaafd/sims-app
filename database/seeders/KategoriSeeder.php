<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama_kategori'=>'Alat Olahraga'],
            ['nama_kategori'=>'Alat Musik'],
        ];
        foreach ($data as $key => $value) {
            Kategori::create($value);
        }
    }
}
