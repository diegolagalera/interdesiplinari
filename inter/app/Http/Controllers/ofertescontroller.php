<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productes;
use App\ofertes;
use DB;
class ofertescontroller extends Controller
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
        $oferta = ofertes::all();
        return view("ofertes.index",["oferta"=>$oferta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


      $oferta = new ofertes;
      $product = productes::orderBy('id','ASC')->pluck('nom','id')->toArray();
      return view("ofertes.create",["oferta"=>$oferta, "product"=>$product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $count = ofertes::where([['id_producte','=',$request->id_producte],
    ['data_inici','<',$request->data_inici],['data_final','>',$request->data_inici]])->
    orWhere([['data_inici','<',$request->data_final],['data_final','>',$request->data_final]])->get();

      if($count->isEmpty()){

        $count = DB::table('ofertes')->where('id_producte','=',$request->id_producte)->
        whereBetween('data_inici',[$request->data_inici,$request->data_final])->
        orWhereBetween('data_final',[$request->data_inici,$request->data_final])->get();

        if($count->isEmpty()){

          $oferta = new ofertes($request->all());

          if($oferta->save()){
            return response()->json("1");

          }
        }else{
          return response()->json("<span style='color:red'> * </span> Otra oferta entre mismos tiempos");
        }

      }else{
          return response()->json("<span style='color:red'> * </span> Otra oferta entre mismos tiempos");
            return view("ofertas.create");
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $oferta = ofertes::find($id);
      $product = productes::orderBy('id','ASC')->pluck('nom','id')->toArray();
      return view("ofertes.edit",["oferta"=>$oferta, "product"=>$product]);

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
      $count = ofertes::where([['id_producte','=',$request->id_producte],
      ['data_inici','<',$request->data_inici],['data_final','>',$request->data_final]])->get();

      if($count->isEmpty()){
        $oferta = ofertes::find($id);
        $oferta->fill($request->all());
          if($oferta->save()){
                return response()->json("1");
            }
      }else{
            return response()->json("Fechas incorrectas");
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $oferta = ofertes::find($id);
      $oerta->active=0;
      $oferta->save();
      return redirect('/ofertas');
    }
    public function cancelar($id)
    {
      $oferta = ofertes::find($id);
      $oferta->active=0;
      $oferta->save();
      return redirect('/ofertas');
    }

}
