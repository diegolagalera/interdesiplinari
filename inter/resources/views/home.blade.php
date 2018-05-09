@extends('layouts.layoutf')

@section('content')
<div class="container">
<?php $var = 'active';
$array = array("First slide","Second slide","Third slide",);
$count =0;?>
  @if (!$ofertes->isEmpty())
  <div id="carouselExampleIndicators" style="background: radial-gradient(rgb(209,120,178) 1%, rgb(229,179,212) 39% , white 60%);"class="carousel slide"  data-ride="carousel">
      <ol class="carousel-indicators">
          @foreach ($ofertes as $ofes)
          <li data-target="#carouselExampleIndicators" data-slide-to="{{$count}}" class="active"></li>
          <?php $count+=1; ?>
          @endforeach
          <?php $count=0; ?>
      </ol>
      <div class="carousel-inner">
        @foreach ($ofertes as $ofe)
              <div class="carousel-item {{$var}}">
                  <img style="display: block; padding-left: 20%;" height="200px" width="auto" src="{{$ofe->productes->imatge}}" alt="{{$array[$count]}}">
                  <div class="carousel-caption d-none d-md-block">

                    <div class="row">
                      <div class="col-md-4">
                      </div>
                      <div class="col-md-4">
                        <h4 style="display: block; color:purple; padding-left: 15%;">
                            <b> {{$ofe->productes->nom}}</b> <br>Hasta un <b>{{$ofe->descompte}}</b>% descuento
                        </h4>
                        <a href="/productos/{{$ofe->id_producte}}"><button class="btn btn-primary" >Reservar ahora!</button></a>
                      </div>
                      <div class="col-md-4">
                        <h4 style="display: block; padding-left: 15%;color:purple">
                            Desde el <br><b>{{$ofe->data_inici}}</b> <br>Hasta el <br><b>{{$ofe->data_final}}</b>
                        </h4>
                      </div>
                    </div>
                  </div>

              </div>
              <?php $var = '';
              $count+=1; ?>
          @endforeach
          <?php $count=0; ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <i class="material-icons" style="color:purple;">keyboard_arrow_left</i>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <i class="material-icons" style="color:purple;">keyboard_arrow_right</i>
          <span class="sr-only">Next</span>
      </a>
  </div>
  @endif
      <div class="row">
        @foreach($productes as $product)
          <div class="col-md-4" style="margin-top:20px;" >
            <div class="row">
              <img height="200px" style="margin-left: auto;  margin-right: auto;" width="auto" src="{{$product->imatge}}">
            </div>
            <div class="row" style="height:60px;text-align:center;">
              <div class="col-12" >
                <h4>{{$product->nom}}</h4>
              </div>
            </div>
            <div class="row" style="text-align:center;" >
              <div class="col-12">
                <h4 style="color:purple"><b>{{$product->preu}} €</b></h4>
              </div>
            </div>
            <div class="row mt-auto" >
              <a href="/productos/{{$product->id}}" style="margin-left: auto;  margin-right: auto;">
                <button type="button" class="btn btn-primary">Reservar</button>
              </a>
            </div>
          </div>
          <?php
          $count+=1; ?>
          @if ($count==3)
          </div>
          <div class="row">
            <?php
            $count=0; ?>
          @endif
        @endforeach

    </div>
@endsection
