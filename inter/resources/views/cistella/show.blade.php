@extends('layouts.layoutf')

@section('content')
<div class="container">
  <h2 style="text-align:center">Cesta de reservas</h2>
  </br>
  @if($producte[0]=='-1')
  <h1 style="text-align:center">La cesta está vacía</h1>
  @else
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
        <td>{{$a->oferta->descompte}}%</td>
        @endif
        <td>{{$a->quantitat}}</td>
        @if($a->id_oferta=="")
        <td>{{$a->productes->preu}}</td>
        @else

        <td><?php  $r= number_format((($a->productes->preu-($a->productes->preu*$a->oferta->descompte/100))*$a->quantitat),2,",",".");
        echo $r;?>
        </td>
        @endif

        <td>
        @if(sizeof($producte)==1)
          {!! Form::open(['method' => 'DELETE', 'route' => ['cistella.destroy', $a->id] ]) !!}
            <input id="id" type="hidden" style="width:70px" class="form-control" value="1"name="valor">
            <input id="id" type="hidden" style="width:70px" class="form-control" value="{{ $cistella[0]->id }}"name="id_cistella">
          {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}       
        @else
          {!! Form::open(['method' => 'DELETE', 'route' => ['cistella.destroy', $a->id] ]) !!}
          {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}
        @endif
        
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="row">
    <div class="col-md-9">
              <a href="{{ route('cistella.cancel', $cistella[0]->id) }}" class="btn btn-danger pull-left" style="margin-right: 3px;">Cancelar</a>


    </div>
    <div class="col-md-3">
      <a href="{{ route('cistella.finalitzar', $cistella[0]->id) }}" class="btn btn-info pull-left" style="margin-left: 27%;">Finalizar</a>
    </div>
  </div>
  @endif

</div>
@endsection
