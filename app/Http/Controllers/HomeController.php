<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
Use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function quienes(){
      return view('quienes');
    }

    public function sendEmail(Request $request){
      $email = $request->input('email');
      $opcion = $request->input('opcion');
      $consulta = $request->input('consulta');

      $data = array(
        'email' => $email,
        'opcion' => $opcion,
        'consulta' => $consulta
      );

      Mail::send('email.consulta', $data, function($message) use ($data) {
        $message->to('abastcam@gmail.com')
                ->bcc('mellabike@hotmail.com')
                ->subject($data['opcion']);
      });
      return redirect()->route('quienes')->with('status', 'Su correo ha sido enviado satisfactoriamente.');
    }
}
