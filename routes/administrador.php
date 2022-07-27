<?php

use App\Http\Controllers\Administrador\EmployeeController;
use App\Http\Controllers\Administrador\RoleController;
use App\Http\Controllers\Administrador\UserController;
use Illuminate\Support\Facades\Route;

//RUTAS PARA LA FUNCIONALIDAD DE LA GESTIÓN DE USUARIOS
Route::resource('users', UserController::class)->names('administrador.users');
//RUTAS PARA LA FUNCIONALIDAD DE LA GESTIÓN DE ROLES
Route::resource('roles', RoleController::class)->names('administrador.roles');
//RUTAS PARA LA FUNCIONALIDAD DE LA GESTIÓN DE EMPLEADOS
Route::resource('employees', EmployeeController::class)->names('administrador.employees');
