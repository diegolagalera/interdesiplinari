{{ Form::open(['url' => $url, 'method' => $method,]) }}
@csrf
<div class="" >
  <div class="row">

    <div class="col-md-6">
      {{ Form::label('data', 'Descripción') }}<br>
    {{Form::textarea('descripcio',$oferta->descripcio,['class' =>'form-controller', 'placeholder'=>'Descripción...'])}}</div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-8">
          {{ Form::label('producto', 'Producto') }}<br>
          {!! Form::select('id_producte',$product,null,['class'=>'form-control','required']) !!}
        </div>
      </div>
      <div class="row">
        <div class="form-group" >
        {{ Form::label('data', 'Descuento') }}<br>
        {{Form::number('descompte',$oferta->descompte,['class' =>'form-controller', 'placeholder'=>'Descuento...'])}}</div>
      </div>
      <div class="row" style="margin-left: -6%;">
        <div class="col-md-6">
          {{ Form::label('data', 'Data Inicio') }}<br>
          <input id="data_inici" name="data_inici" type="datetime-local" required><br>{{$oferta->data_final}}<br>
        </div>
        <div class="col-md-6">
          {{ Form::label('data', 'Data Final') }}<br>
          <input id="data_final" name="data_final" type="datetime-local" required><br>{{$oferta->data_final}}
        </div>
      </div>
    </div>
  </div>


    <div class="row">
      <div class="col-md-6">
      <a href="{{url('/ofertas')}}"><p style="margin-top: 2%;">Tornar</p></a>
    </div>
    <div class="col-md-6">
      <input style="margin-left: 60%;" type="submit" value="Enviar" class="btn btn-primary">
    </div>
  </div>
</div>

{{ Form::close() }}
