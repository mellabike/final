<?php

namespace App\Http\Controllers;
use App\User;
use App\Persona;
use App\Rol;
use Illuminate\Support\Facades\DB;
use Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{

  //se encarga de saber si está logeado el usuario
  public function __construct(){
    $this->middleware('auth');
  }

  //mostrar listado de usuarios
  public function show(){
    $user = User::join('roles', 'users.id_rol', '=', 'roles.id')
                  ->select(['users.*', 'roles.id as rol_id', 'roles.nombre'])
                  ->get();
    return view('admin.usuarios', compact('user'));
  }

  //mostrar el usuario para editar
  public function edit($id){
    $user = User::findOrFail($id);
    $id_rol = $user->id_rol;
    $rol = Rol::all();

    return view('admin.editUser', compact('user', 'rol', 'id_rol'));
  }

  //se actualiza el usuario
  public function update(Request $request, $id)
    {
      $user = User::findOrFail($id);

      //validacion usuario
      $data = $request->validate([
        'name'            => ['required', 'string', 'max:255'],
        'rut'             => ['required', 'string', 'max:15'],
        'direccion'       => ['required', 'string', 'max:100'],
        'fechaNacimiento' => ['required', 'date'],
        'username'        => 'required|string|unique:users,username,'.$user->id,
        'email'           => 'required|email|unique:users,email,'.$user->id,
        'rol_id'          => ['required']
      ]);

        $user->name            = $data['name'];
        $user->rut             = $data['rut'];
        $user->direccion       = $data['direccion'];
        $user->fechaNacimiento = $data['fechaNacimiento'];
        $user->email           = $data['email'];
        $user->username        = $data['username'];
        $user->email           = $data['email'];
        $user->id_rol          = $data['rol_id'];
        $user->save();

      return redirect()->route('usuarios.edit', ['id' => $user->id])->with('status', 'Se ha modificado el usuario correctamente');
    }

  //cerrar sesion
  public function logout(){
    Auth::logout();
    return redirect()->route('inicio');
  }

}
