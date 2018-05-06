@extends('layouts.layoutf')
@section('content')
<h2><i class="fa fa-user"></i>&nbsp&nbspUsuario</h2>
<div class="row">
  <div class="col-md-4">
    <h3>Nombre</h3>
    <h4>{{$user->name}} </h4><h4>{{$user->cognom}}</h4>
  </div>
</div>
<div class="row">
<div class="col-md-4">
  <h3>DNI</h3>
  <h4>{{$user->dni}}</h4>
</div>
</div>
<div class="row">
  <div class="col-md-4">
    <h3>Contacto</h3>
    <h4>{{$user->tel}}</h4>
    <h4>{{$user->email}}</h4>
  </div>
</div>
  <div class="row">
  <div class="col-md-4">
    <h3>Localidad</h3>
    <h4>{{$user->localitat}}</h4>
  </div>
</div>
<div class="row" style="margin-top: 2%;">
  <div class="col-md-6">
    <a href="{{url('/')}}"><button class="btn btn-primary">Tornar</button></a>
  </div>
</div>

@endsection
