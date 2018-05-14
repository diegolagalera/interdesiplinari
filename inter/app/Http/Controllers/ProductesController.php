<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productes;
use App\ofertes;
use DB;
class ProductesController extends Controller
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
      $productes = productes::orderBy('id','ASC')->paginate(3);
      return view("productes.index",["products"=>$productes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $product = new productes;
      return view("productes.create",["product"=>$product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $r="images/noimg.png";
    if($request->file('imatge')!=null){
      //IMATGE
      $image = $request->file('imatge');
      $path = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('images');
      $image->move($destinationPath, $path);
      $r=(string)$request->root().'/images/'.''.$path;
      ///IMATGE
    }


      $product = new productes;
      $product->nom=$request->nom;
      $product->descripcio=$request->descripcio;
      $product->caracteristiques=$request->caracteristiques;
      $product->preu=$request->preu;
      $product->imatge=$r;

      if($product->save()){
          return redirect("/productos");
      }else{

          return view("productes.create");
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
        $product=  productes::find($id);
        $ofertes= DB::table('ofertes')->where([['id_producte','=',$id],['ofertes.data_inici','<',date('Y-m-j H:i:s')],['ofertes.data_final','>',date('Y-m-j H:i:s')]])->get()->toArray();

        if(count($ofertes)>0){
          $ofertes = $ofertes[0];
        }

        return view("productes.show",["product"=>$product,"oferta"=>$ofertes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = productes::find($id);
      return view("productes.edit",["product"=>$product]);
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
      $product = productes::find($id);
      $product->nom=$request->nom;
      $product->descripcio=$request->descripcio;
      $product->caracteristiques=$request->caracteristiques;
      $product->preu=$request->preu;
    //IMATGE
    if($request->file('imatge')!=null){
      $image = $request->file('imatge');
      $path = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('images');
      $image->move($destinationPath, $path);
      $r=(string)$request->root().'/images/'.''.$path;
      $product->imatge=$r;
    }
    ///IMATGE

    if($product->save()){
        return redirect("/productos");
    }else{

        return view("products.edit");
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
      $product = productes::find($id);
      productes::destroy($id);

      return redirect('/productos');
    }
}
