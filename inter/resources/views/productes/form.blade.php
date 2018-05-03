{{ Form::open(['url' => $url, 'method' => $method, 'files' => TRUE]) }}
@csrf
<div class="" style="text-align: center;">

    <div class="form-group">
    {{Form::text('nom',$product->nom,['class' =>'form-controller', 'placeholder'=>'Nombre...'])}}</div>
    <div class="form-group">
    {{Form::textarea('descripcio',$product->descripcio,['class' =>'form-controller', 'placeholder'=>'Descripción...'])}}</div>
    <div class="form-group">
    {{Form::textarea('caracteristiques',$product->caracteristiques,['class' =>'form-controller', 'placeholder'=>'Caracteristicas...'])}}</div>
    <div class="form-group">
    {{Form::number('preu',$product->preu,['class' =>'form-controller','step'=>'any', 'placeholder'=>'Precio...'])}}</div>

    <div class="form-group" align="center">
    {{Form::file('imatge',['class' =>'form-controller'])}}</div>
    <div class="form-group">
      <a href="{{url('/productes')}}">Tornar</a>
      <input type="submit" value="Enviar" class="btn btn-primary">
    </div>
</div>
{{ Form::close() }}
