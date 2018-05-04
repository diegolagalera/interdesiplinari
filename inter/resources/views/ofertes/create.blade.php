@extends('layouts.layout')
@section('content')
  <h1><i class="fa fa-tags"></i>&nbsp&nbsp Nueva oferta</h1>
  @include('ofertes.form',['product'=>$product, 'oferta'=>$oferta, 'url'=>'/ofertas', 'method' => 'POST'])
@endsection
