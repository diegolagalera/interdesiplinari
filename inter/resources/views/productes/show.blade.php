@extends('layouts.layoutf')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h2>{{$product->nom}}</h2>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <img width="auto" style='margin-top: 40%; margin-left:10%;' height="200px" src="{{$product->imatge}}">
  </div>
  <div class="col-md-8">
    <div class="row">
      <div class="col-md-12">
      <div class="row">
        <div class="col-md-7">
          <h3>Descripción</h3>
          <h5 style="text-align: justify;">{{$product->descripcio}}</h5>
        </div>
        <div class="col-md-5">
          @if(count($oferta)==0)
          <div class="row">
            <div class="col-md-6">
                <h2 style="color:purple"><b>{{$product->preu}}€</b> </h2>
            </div>
            <div class="col-md-6">
              @include('productes.reserva',['product'=>$product,'oferta'=>$oferta, 'url'=>'/cistella', 'method' => 'POST'])
            </div>
          </div>

            @else
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
              <h2 style="color:purple"><b><?php echo number_format(($product->preu-($product->preu*$oferta->descompte/100)),2, ",", ".");?>€</b></h2>
            </div>
            <div class="col-md-6">
              @include('productes.reserva',['product'=>$product,'oferta'=>$oferta,  'url'=>'/cistella', 'method' => 'POST'])
            </div>
          </div>
              <div class="row">
                <div class="col-md-6">
                    <h3 style="text-decoration: line-through">{{$product->preu}} €</h3>
                </div>
                <div class="col-md-6">
                    <h3 style="color:red;">{{$oferta->descompte}} %</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  {{$oferta->descripcio}}
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <b>Inicio </b>{{$oferta->data_inici}}
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                    <b>Final </b>&nbsp{{$oferta->data_final}}
                </div>
              </div>
          </div>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <h3>Características</h3>
          <h5 style="text-align: justify;">{{$product->caracteristiques}}</h5>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
<div class="row" style="margin-top: 2%;">
  <div class="col-md-6">
    <a href="{{url('/')}}"><button class="btn btn-primary">Tornar</button></a>
  </div>
</div>

@endsection
