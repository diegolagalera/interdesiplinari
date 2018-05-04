@extends('layouts.layout')
@section('content')
  <h1><i class="fa fa-archive"></i>&nbsp&nbspNuevo Prodcto</h1>
  @include('productes.form',['product'=>$product, 'url'=>'/productos', 'method' => 'POST'])
@endsection
