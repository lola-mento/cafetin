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
            'name' => 'Administrador Leon',
            'email' => 'ad@ad.com',
            'status' => '1',
            'password' => bcrypt('123'),
            'employee_id' => '1'
         ])->assignRole('Administrador');
    }
}
