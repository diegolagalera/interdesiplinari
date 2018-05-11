<?php

namespace App\Http\Controllers;
use App\User;
use App\ofertes;
use DB;
use App\productes;
use Illuminate\Http\Request;
use Mail;


class HomeController extends Controller
{
  public function __construct() {
      $this->middleware(['auth', 'clearance'])->except(['index','mapa','contactar']);
  }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ofertes = ofertes::where([['ofertes.data_inici','<',date('Y-m-j H:i:s')],['ofertes.data_final','>',date('Y-m-j H:i:s')]])
        ->orderBy('data_final','ASC')->take(3)->get();
        $productes = productes::all();
        return view('home',["ofertes"=>$ofertes,"productes"=>$productes]);
    }

    public function show($id)
    {
         $user = User::find($id);
         return view("users.show",["user"=>$user]);
    }
    public function mapa()
    {
         return view("mapa");
    }
    public function contactar(Request $request )
    {
      $data['name']=$request->name;
      $data['apellido']=$request->apellido;
      $data['email']=$request->email;
      $data['comentario']=$request->comentario;
      $data['email_admin']="proves201801@gmail.com";

      Mail::send('mails.contactar',['data'=>$data],function($mail) use($data){
        $mail->subject('Contactar del usuario'.$data['email']);
        $mail->to($data['email_admin'],$data['name']);
      });


        return redirect('/');

    }
}
