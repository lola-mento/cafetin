<?php

namespace App\Http\Livewire\Administrador;

use App\Models\Employee;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeCreate extends Component
{

    public $name;
    public $lastname;
    public $phone;
    public $salary;
    public $salary_per_day;

    protected $rules = 
    [   
        'name' => 'required',
        'lastname' => 'required',
        'phone' => 'required',
        'salary' => 'required'
    ];

    protected $messages = [
        'name.required' => 'El nombre es requerido.',
        'lastname.required' => 'El apellido es requerido.',
    ];

    public function updatedName()
    {
        $this->validate([
            'name' => 'required',
          ]);
    }

    public function calcular_salario()
    {
        $this->salary_per_day = $this->salary / 30;
    }

    public function store()
    {

        $this->validate($this->rules);

        Employee::create([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'phone' => $this->phone,
            'salary' => $this->salary,
        ]);

        Alert::toast('Empleado guardado correctamente','success');
        return redirect()->route('administrador.employees.index');
    }

    public function render()
    {
        return view('livewire.administrador.employee-create');
    }
}
