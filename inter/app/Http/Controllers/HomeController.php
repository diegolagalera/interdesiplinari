<?php

namespace App\Http\Controllers;
use App\User;
use App\ofertes;
use DB;
use Illuminate\Http\Request;

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
        // $ofertes = DB::table('ofertes')->join('productes','ofertes.id_producte','=','productes.id')
        // ->where([['ofertes.data_inici','<',date('Y-m-j H:i:s')],['ofertes.data_final','>',date('Y-m-j H:i:s')]]);
        $ofertes = ofertes::where([['ofertes.data_inici','<',date('Y-m-j H:i:s')],['ofertes.data_final','>',date('Y-m-j H:i:s')]])
        ->orderBy('data_final','ASC')->take(3)->get();
        return view('home',["ofertes"=>$ofertes]);
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
}
