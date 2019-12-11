<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Miprod;
use App\User;
use App\Cart;

class CartController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $user_id = Auth::id();
      $carrito = Cart::join('miprods', 'miprods.id', '=', 'cart.producto_id')
                     ->select(['miprods.id as codigo', 'miprods.*', 'cart.*'])
                     ->where('cart.user_id', '=', $user_id)->get();

      $total = DB::select('SELECT SUM(p.precio) AS total FROM miprods p JOIN cart c ON p.id = c.producto_id WHERE c.user_id = ' . $user_id);
      return view('carrito.index', compact('carrito', 'total'));
    }

    public function add(Request $request, $id){

      // $data = $request->validate([
      //   'cantidad' => ['required']
      // ]);

      Cart::create([
        'cantidad'    => 1,
        'user_id'     => Auth::id(),
        'producto_id' => $id
      ]);

      return redirect()->route('cart.index');
    }

    public function delete($id){
      $carrito = Cart::findOrFail($id);
      $carrito->delete();

      return redirect()->route('cart.index');
    }
}
