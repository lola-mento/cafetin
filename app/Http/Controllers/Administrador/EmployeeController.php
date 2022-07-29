<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::all();
        return view('administrador.employees.index',compact('employees'));
    }

    public function create()
    {
        return view('administrador.employees.create');
    }
}
