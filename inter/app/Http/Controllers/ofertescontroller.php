<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productes;
use App\ofertes;
class ofertescontroller extends Controller
{
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
      $oferta = new ofertes($request->all());
      if($oferta->save()){
          return redirect("/ofertas");
      }else{
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
      $oferta = ofertes::find($id);
      $oferta->fill($request->all());
      if($oferta->save()){
          return redirect("/ofertas");
      }else{
          return view("ofertas.edit");
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
      ofertes::destroy($id);

      return redirect('/ofertas');
    }
}
