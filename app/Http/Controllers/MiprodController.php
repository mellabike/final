<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Miprod;

class MiprodController extends Controller
{

  //se encarga de saber si está logeado el usuario
  public function __construct(){
    $this->middleware('auth');
  }

  public function create(){
    return view('productos.create');
  }

  public function save(Request $request){

    //recoger los datos
    $nombre = $request->input('nombre');
    $precio = $request->input('precio');
    $email = $request->input('email');
    $descripcion = $request->input('description');
    $image_path = $request->file('image_path');

    //asignar valores a los objetos
    $user = \Auth::user();
    $productos = new Miprod();
    $productos->user_id = $user->id;
    $productos->descripcion = $descripcion;
    $productos->nombre = $nombre;
    $productos->precio = $precio;
    $productos->correo = $email;

    //subir fichero
    if($image_path){
      $imagen = date('Y-m-d').'_'.$image_path->getClientOriginalName();
      Storage::disk('images')->put($imagen, File::get($image_path));
      $productos->foto = $imagen;
    }

    //guardar datos en bd
    $productos->save();

    return redirect()->route('producto.create')->with('status', 'producto creado');
  }

  public function showProductos($search = null){
    //aqui se pueden ordenar de manera que quieran, pero lo que hace en este caso es sacar todos los
    //productos de la bd para mostrarlos
    if (!empty($search)) {
      $productos = Miprod::where('nombre','LIKE', '%'.$search.'%')
                  ->orWhere('precio','LIKE', '%'.$search.'%')
                  ->orderBy('id', 'DESC')
                  ->paginate(6);
    }else{
      $productos = Miprod::orderBy('id', 'DESC')->paginate(6);
    }
    return view('productos.show', compact('productos'));
  }

  public function detalle($id){
    //$producto = Miprod::joinfindOrFail($id);
    $producto = Miprod::join('users', 'miprods.user_id', '=', 'users.id')
                      ->select(['miprods.*', 'users.id as user_id', 'users.name', 'users.rut', 'users.direccion', 'users.email', 'users.id_rol'])
                      ->findOrFail($id);

    return view('productos.detalle', compact('producto'));
  }

  public function edit($id){
    $producto = Miprod::findOrFail($id);
    return view('productos.edit', compact('producto'));
  }

  public function update(Request $request, $id){
    $nombre      = $request->input('nombre');
    $precio      = $request->input('precio');
    $email       = $request->input('email');
    $descripcion = $request->input('description');
    $image_path  = $request->file('image_path');

    $producto = Miprod::findOrFail($id);

    //subir fichero
    if($image_path){
      $imagen = date('Y-m-d').'_'.$image_path->getClientOriginalName();
      Storage::disk('images')->put($imagen, File::get($image_path));
      $producto->foto = $imagen;
    }

    $producto->nombre       = $nombre;
    $producto->precio       = $precio;
    $producto->correo       = $email;
    $producto->descripcion = $descripcion;
    $producto->update();

    return redirect()->route('producto.detalle', ['id' => $producto->id])
                     ->with('status', 'Publicación actualizada con éxito!');
  }

  public function delete($id){
    $producto = Miprod::findOrFail($id);

    Storage::disk('images')->delete($producto->foto);
    //eliminar registro de la imagen
    $producto->delete();

    return redirect()->route('producto.show')->with('status', 'Se ha eliminado el producto con éxito!');
  }

  public function getImage($filename){
    //esta funcion busca en la carpeta storage la subcarpeta que creamos para guardar las imagenes y mostrarlas
    $file = Storage::disk('images')->get($filename);
    return new response($file,200);
  }
}
