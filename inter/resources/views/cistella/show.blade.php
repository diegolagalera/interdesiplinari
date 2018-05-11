@extends('layouts.layoutf')

@section('content')
<div class="container">
  <h2 style="text-align:center">Cesta de reservas</h2>
  </br>
  <table class="table" style="text-align:center;">
    <thead>
      <tr>
        <th>Producto</th>
        <th>Oferta</th>
        <th>Cantidad</th>
        <th>Accion</th>

      </tr>
    </thead>
    <tbody>
      @foreach($producte as $a)
      <tr>
        <td>{{$a->productes->nom}}</td>
        @if($a->id_oferta=="")
        <td>-</td>

        @else
        <td>{{$a->id_oferta}}</td>
        @endif
        <td>{{$a->quantitat}}</td>
        <td>{{$a->productes->preu}}</td>

        <td>

        {!! Form::open(['method' => 'DELETE', 'route' => ['cistella.destroy', $a->id] ]) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="row">
    <div class="">
      <a href="{{ route('cistella.cancel', $cistella[0]->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Cancelar</a>

      
    </div>
  </div>
</div>
@endsection
