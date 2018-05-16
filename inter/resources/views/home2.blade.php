@extends('layouts.layoutf')

@section('content')

<div class="container">
  <nav style="margin-left:10%; ">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="/">Inicio</a></li>
    <li class="page-item"><a class="page-link" href="/categorias/1">Productos</a></li>
    <li class="page-item"><a class="page-link" href="/categorias/2">Peinados / Cortes</a></li>
    <li class="page-item"><a class="page-link" href="/categorias/3">Ofertas</a></li>
  </ul>
</nav>
<?php $var = 'active';
$count =0;?>

      <div class="row">
        @foreach($ofertas as $ofer)
          <div class="col-md-4" style="margin-top:20px;" >
            <div class="row">
              <img height="200px" style="margin-left: auto;  margin-right: auto;" width="auto" src="{{$ofer->productes->imatge}}">
            </div>
            <div class="row" style="height:60px;text-align:center;">
              <div class="col-12" >
                <h4>{{$ofer->productes->nom}}</h4>
              </div>
            </div>
            <div class="row" style="text-align:center;" >
              <div class="col-12">
                <h4 style="color:purple"><b><?php echo number_format(($ofer->productes->preu-($ofer->productes->preu*$ofer->descompte/100)),2, ",", ".");?> €</b><br><strike> {{$ofer->productes->preu}}</strike> €&nbsp&nbsp&nbsp&nbsp  <b>{{$ofer->descompte}} %</b></h4>
              </div>
            </div>
            <div class="row mt-auto" >
              <a href="/productos/{{$ofer->productes->id}}" style="margin-left: auto;  margin-right: auto;">
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
</div>
@endsection
