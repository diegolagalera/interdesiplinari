@extends('layouts.layoutf')
@section('content')
  <h1>Nueva oferta</h1>
  @include('ofertes.form',['product'=>$product, 'oferta'=>$oferta, 'url'=>'/productes', 'method' => 'POST'])
@endsection
