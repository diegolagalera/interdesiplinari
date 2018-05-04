@extends('layouts.layout')
@section('content')
  <h1><i class="fa fa-archive"></i>&nbsp&nbspEditar producto</h1>
  @include('productes.form',['product'=>$product, 'url' => '/productos/'.$product->id, 'method'=> 'PATCH'])
@endsection
