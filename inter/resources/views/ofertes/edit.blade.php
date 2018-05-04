@extends('layouts.layout')
@section('content')
  <h1><i class="fa fa-tags"></i>&nbsp&nbsp Editar oferta</h1>
  @include('ofertes.form',['product'=>$product, 'oferta'=>$oferta, 'url'=>'/ofertas/'.$oferta->id, 'method' => 'PATCH'])
@endsection
