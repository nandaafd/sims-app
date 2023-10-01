<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama'=>'Nanda Afdlolul Basyar',
                'posisi'=>'Web Programmer',
                'email'=>'nandaafd.info@gmail.com',
                'password'=>bcrypt('nanda123'),
            ]
        ];
        foreach ($data as $key => $value) {
            User::create($value);
        }
    }
}
