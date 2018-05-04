{{ Form::open(['url' => $url, 'method' => $method,]) }}
@csrf
<div class="" style="text-align: center;">

  {{ Form::label('data', 'Descripción') }}<br>
    <div class="form-group">
    {{Form::textarea('descripcio',$oferta->descripcio,['class' =>'form-controller', 'placeholder'=>'Descripción...'])}}</div>
    <div class="form-group">
    {!! Form::select('id_producte',$product,null,['class'=>'form-control','required']) !!}
    <div class="form-group">
    {{ Form::label('data', 'Descuento') }}<br>
    {{Form::number('descompte',$oferta->descompte,['class' =>'form-controller', 'placeholder'=>'Descuento...'])}}</div>
    {{ Form::label('data', 'Data Inicio') }}<br>
    <input id="data_inici" name="data_inici" type="datetime-local" required><br>{{$oferta->data_final}}<br>
    {{ Form::label('data', 'Data Final') }}<br>
    <input id="data_final" name="data_final" type="datetime-local" required><br>{{$oferta->data_final}}
    <div class="form-group"><br>
      <a href="{{url('/ofertas')}}">Tornar</a>
      <input type="submit" value="Enviar" class="btn btn-primary">
    </div>
</div>
{{ Form::close() }}
