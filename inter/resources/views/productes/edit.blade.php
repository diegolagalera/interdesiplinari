@extends('layouts.layoutf')
@section('content')
  <h1>Editar producto</h1>
  @include('productes.form',['product'=>$product, 'url' => '/productes/'.$product->id, 'method'=> 'PATCH'])
@endsection
