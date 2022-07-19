<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Models\Product;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:administrador.users.index');
    }

    public function index()
    {
        $users = User::where('status','1')->get();
        return view('administrador.users.index', compact('users'));
    }

public function create()
    {
        return view('administrador.users.create');
    }


    public function store(UserStoreRequest $request)
    {
        try
        {

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'status' => '1',
                'password' => bcrypt($request->password),
            ]);
            Alert::toast('usuario guardado exitosamente', 'success');
            return redirect()->route('administrador.users.index');

        }
        catch(Exception $e)
        {
            return "ha ocurrido un error";
        }
    }


    public function show($id)
    {
        //
    }


    public function edit(User $user)
    {
        return view('administrador.users.edit',compact('user'));
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
                'name' => $request->name,
                'email' => $request->email,
                'status' => $user->status,
                'password'=> $password
            ]);
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
