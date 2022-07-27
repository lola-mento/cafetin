<?php

namespace App\Http\Livewire\Administrador;

use Livewire\Component;

class EmployeeCreate extends Component
{

    public $name;
    public $lastname;
    public $phone;
    public $salary;
    public $salary_per_day;



    public function calcular_salario()
    {
        $this->salary_per_day = $this->salary / 30;
    }

    public function render()
    {
        return view('livewire.administrador.employee-create');
    }
}
