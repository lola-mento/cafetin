<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
         User::create
         ([
            'name' => 'Curso de phph Laravel view',
            'email' => 'ad@ad.com',
            'password' => bcrypt('123')
         ]);
    }
}
