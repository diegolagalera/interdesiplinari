{{ Form::open(['url' => $url, 'method' => $method]) }}
<div class="row" style="margin-top:40px">
  <div class="col-md-6" >
        <input id="unidades" type="number" style="width:70px" class="form-control" value="1" placeholder="unid..."name="unidades" required>
  </div>
  <input id="id" type="hidden" style="width:70px" class="form-control" value="{{$product->id}}"name="id">
  @if(count($oferta)==0)
  <input id="id_oferta" type="hidden" style="width:70px" class="form-control" value=""name="id_oferta">
  @else
  <input id="id_oferta" type="hidden" style="width:70px" class="form-control" value="{{$oferta->id}}"name="id_oferta">
  @endif
  <input id="id" type="hidden" style="width:70px" class="form-control" value="{{$product->id}}"name="id_producte">
  <input id="id" type="hidden" style="width:70px" class="form-control" value="{{ Auth::user()->id }}"name="id_user">


  <div class="col-md-6 form-controller" style="margin-bottom:10px">
        <input type="submit"  value="Reservar" class="btn btn-primary btn-sm" >
  </div>

</div>
@csrf
{{ Form::close() }}
