@extends('layouts.layoutf')
@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i><h1>Productos</h1>
    @if ($products->isEmpty())
      <div class="text-center">
        No hay productos
      </div>
    @else
  <hr>
  <div class="table-responsive">
      <table id="example"  class="table table-bordered table-striped">
      <thead>
        <tr>
          <th class="text-center">Nombre</th>
          <th class="text-center">Descrpicion</th>
          <th class="text-center">Precio</th>
          <th class="text-center">Imagen</th>
          <th class="text-center">Opciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
          <tr>
            <td>{{$product->nom}}</td>
            <td>{{$product->descripcio}}</td>
            <td>{{$product->preu}}</td>
            <td class="text-center"><img class="imgproduct" height="70px" width="auto" src="{{$product->imatge}}"></td>
            <td class="text-center">@include('productes.delete',['product'=>$product])
              <a href="{{ url('productes/'.$product->id.'/edit') }}" class="btn btn-success">Editar</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    @endif
    <a href="{{ url('productes/create') }}" class="btn btn-success">Agregar producto</a>
    <div class="" style="text-align:center">
      {!! $products->render() !!}
    </div>
  </div>
</div>

@endsection
