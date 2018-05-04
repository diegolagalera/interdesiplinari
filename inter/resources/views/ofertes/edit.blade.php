@extends('layouts.layoutf')
@section('content')
  <h1>Editar oferta</h1>
  @include('ofertes.form',['product'=>$product, 'oferta'=>$oferta, 'url'=>'/ofertas/'.$oferta->id, 'method' => 'PATCH'])
@endsection
