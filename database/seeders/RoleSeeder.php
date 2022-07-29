<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        //CREAR ROL ADMINISTRATIVO
        $admin = Role::create(['name' => 'ADMINISTRADOR']);

        //PERMISOS PARA EL ROL ADMINISTRATIVO CREACION DE USUARIOS
        Permission::create(['name' => 'administrador.users.index','description' => 'Ver usuarios'])->syncRoles([$admin]);
        Permission::create(['name' => 'administrador.users.create','description' => 'Crear usuarios'])->syncRoles([$admin]);
        Permission::create(['name' => 'administrador.users.edit','description' => 'Editar usuarios'])->syncRoles([$admin]);
        Permission::create(['name' => 'administrador.users.destroy','description' => 'Eliminar usuarios'])->syncRoles([$admin]);



    }
}
