<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Models\Employee;
use App\Models\Product;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:administrador.users.index')->only('index');
        $this->middleware('can:administrador.users.create')->only('create','store');
        $this->middleware('can:administrador.users.edit')->only('edit','update');
        $this->middleware('can:administrador.users.destroy')->only('destroy');
    }

    public function index()
    {
        $users = User::where('status','1')->get();
        return view('administrador.users.index', compact('users'));
    }

public function create()
    {
        //$employees =  Employee::pluck('full_name','id');
        $employees = Employee::all();
        $listaRoles = Role::pluck('name','id');
        return view('administrador.users.create',compact('listaRoles','employees'));
    }


    public function store(UserStoreRequest $request)
    {
        try
        {
            $result = Employee::find($request->employee);
            //dd($request->employee);
            $user = User::create([
                'name' => $result->name.' '.$result->lastname,
                'email' => $request->email,
                'status' => '1',
                'password' => bcrypt($request->password),
                'employee_id' => $request->employee
            ]);
            $user->roles()->sync($request->roles);
            Alert::toast('usuario guardado exitosamente', 'success');
            return redirect()->route('administrador.users.index');



        }
        catch(Exception $e)
        {
            return "ha ocurrido un error". $e;
        }
    }


    public function show($id)
    {
        //
    }


    public function edit(User $user)
    {
        $employee = Employee::find($user->employee_id);
        $listaRoles = Role::pluck('name','id');
        return view('administrador.users.edit',compact('user','listaRoles','employee'));
    }


    public function update(Request $request, User $user)
    {
        try
        {
            if($request->password == null)
            {
                $password = $user->password;
            }
            else
            {
                $password = bcrypt($request->password);
            }
            $user->update([
                'email' => $request->email,
                'status' => $user->status,
                'password'=> $password
            ]);
            $user->roles()->sync($request->roles);
            Alert::toast('usuario editado exitosamente', 'success');
            return redirect()->route('administrador.users.index');


        }catch(Exception $e)
        {
            Alert::toast('Ocurrio un error con la actualización', 'error');
            return redirect()->route('administrador.users.index');
        }
    }


    public function destroy(User $user)
    {
        try
        {
            $user->update([
                'status' => '0'
            ]);
            Alert::toast('usuario eliminado exitosamente', 'success');
            return redirect()->route('administrador.users.index');
        }
        catch(Exception $e)
        {
            Alert::toast('Ocurrio un error con la eliminación', 'error');
            return redirect()->route('administrador.users.index');
        }

    }
}
