<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{

    public function run()
    {
        Employee::create
         ([
            'name' => 'Andres',
            'lastname' => 'Leon',
            'phone' => '4509898',
            'salary' => 1000
         ]);
    }
}
