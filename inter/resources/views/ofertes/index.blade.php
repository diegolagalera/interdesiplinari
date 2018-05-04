@extends('layouts.layout')
@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-tags"></i>&nbsp&nbsp Ofertas</h1>
    @if ($oferta->isEmpty())
      <div class="text-center">
        No hay productos
      </div>
    @else
  <hr>
  <div class="table-responsive">
      <table id="example"  class="table table-bordered table-striped">
      <thead>
        <tr>
          <th class="text-center">Productes</th>
          <th class="text-center">data_inici</th>
          <th class="text-center">data_final</th>
          <th class="text-center">descompte</th>
          <th class="text-center">Opciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($oferta as $ofe)
          <tr>


            <td><img height="70px" width="auto" src="{{$ofe->productes->imatge}}">{{$ofe->productes->nom}}</td>
            <td>{{$ofe->data_inici}}</td>
            <td>{{$ofe->data_final}}</td>
            <td>{{$ofe->descompte}}</td>
            <td class="text-center">@include('ofertes.delete',['oferta'=>$ofe])
              <a href="{{ url('ofertas/'.$ofe->id.'/edit') }}" class="btn btn-success">Editar</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    @endif
    <a href="{{ url('ofertas/create') }}" class="btn btn-success">Agregar producto</a>
    <div class="" style="text-align:center">
    </div>
  </div>
</div>

@endsection
