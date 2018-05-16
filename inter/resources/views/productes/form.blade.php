{{ Form::open(['url' => $url, 'method' => $method, 'files' => TRUE]) }}
@csrf
<div class="row">

    <div class="col-md-6">
      {{Form::label('nombre', 'Nombre')}}<br>
      {{Form::text('nom',$product->nom,[ 'placeholder'=>'Nombre...','required' => 'required'])}}</div>

    <div class="col-md-6">
      {{Form::label('Tipo', 'Tipo')}}<br>
      {{Form::select('tipo', ['1'=>'Producto', '2'=>'cortado'],null,['class'=>'from-control','required' => 'required'])}}</div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
      {{Form::label('desc', 'Descripción')}}<br>
    {{Form::textarea('descripcio',$product->descripcio,['class' =>'form-controller', 'placeholder'=>'Descripción...','required' => 'required'])}}</div>
    <div class="col-md-6">
      {{Form::label('Características', 'Características')}}<br>
    {{Form::textarea('caracteristiques',$product->caracteristiques,['class' =>'form-controller', 'placeholder'=>'Características...','required' => 'required'])}}</div>
  </div>
  <div class="row">
    <div class="col-md-6">
      {{Form::label('Precio', 'Precio')}}<br>
    {{Form::number('preu',$product->preu,['class' =>'form-controller','step'=>'any', 'placeholder'=>'Precio...','required' => 'required'])}}</div>
    <div class="col-md-6">
      {{Form::label('imagen', 'Imagen')}}<br>
    {{Form::file('imatge',['class' =>'form-controller'])}}</div>
</div>
    <div class="row">
      <div class="col-md-6">
        <a href="{{url('/productos')}}"><p style="margin-top: 2%;">Volver</p></a>
      </div>
      <div  class="col-md-6 "  >
      <input style="margin-left: 60%;" type="submit" value="Enviar" class="btn btn-primary" >
      </div>
    </div>
</div>
{{ Form::close() }}
