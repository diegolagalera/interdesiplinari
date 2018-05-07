@extends('layouts.layoutf')

@section('content')
<div class="container">
<?php $var = 'active';
$array = array("First slide","Second slide","Third slide",);
$count =0;?>
  @if (!$ofertes->isEmpty())
  <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
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
                  <img style="display: block; padding-left: 25%;" height="200px" width="auto" src="{{$ofe->productes->imatge}}" alt="{{$array[$count]}}">
                  <div class="carousel-caption d-none d-md-block">
                      <h4 style="display: block; padding-left: 16%;color:black">
                          <b> {{$ofe->productes->nom}}</b> <br>Hasta un <b>{{$ofe->descompte}}</b>% descuento
                      </h4>
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
                <h4>{{$product->preu}}</h4>
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
