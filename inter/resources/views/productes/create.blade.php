@extends('layouts.layoutf')
@section('content')
  <h1>Nuevo Prodcto</h1>
  @include('productes.form',['product'=>$product, 'url'=>'/productes', 'method' => 'POST'])
@endsection
