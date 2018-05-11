<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cistella;
use App\productes_comprats;
use DB;
use Auth;

class CistellaController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'clearance']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $cistella= DB::table('cistella')->where([['id_usuari','=',$request->id_user],['status','=',1]])->get()->toArray();//seleccionem totes les sistelles del usuari x

      if(count($cistella)>0){ //en cas que no tingue cap cistella creem una cistella nova la primera cistella
        $producte = new productes_comprats;
        $producte->id_cistella=$cistella[0]->id;
        $producte->id_producte=$request->id_producte;
        $producte->id_oferta=$request->id_oferta;
        $producte->quantitat=$request->unidades;
        $producte->save();
        return redirect('/');

        // dd($cistella[0]->id);
        // dd("hola");
      }
      else{
        $cistella= new cistella;
        $cistella->id_usuari=$request->id_user;
        $cistella->data=new \DateTime();
        $cistella->status=1;
        $cistella->save();
        $cistellaa= DB::table('cistella')->where([['id_usuari','=',$request->id_user],['status','=',1]])->get()->toArray();//seleccionem totes les sistelles del usuari x

        $producte = new productes_comprats;
        $producte->id_cistella=$cistellaa[0]->id;
        $producte->id_producte=$request->id_producte;
        $producte->id_oferta=$request->id_oferta;
        $producte->quantitat=$request->unidades;
        $producte->save();
        return redirect('/');

      }

  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $producte=['-1'];
      $cistella= cistella::where([['id_usuari','=',Auth::user()->id],['status','=',1]])->get();
      if(count($cistella)>0){
        $producte= productes_comprats::where('id_cistella','=',$cistella[0]->id)->get();
      }

      return view("cistella.show",["producte"=>$producte,"cistella"=>$cistella]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $producte = productes_comprats::findOrFail($id);
      $producte->delete();

      return redirect('cistella/show');
    }

    public function cancel($id)
    {
      $cistella= productes_comprats::where('id_cistella','=',$id)->delete();
      $cistella= cistella::where([['id_usuari','=',Auth::user()->id],['id','=',$id]])->delete();
      return redirect('/');
    }

    public function finalitzar($id)
    {
      $cistella = cistella::find($id);
      $cistella->status=2;
      $cistella->save();

      return redirect('/');

    }

}
