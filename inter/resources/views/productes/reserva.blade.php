{{ Form::open(['url' => $url, 'method' => $method]) }}
<div class="row" style="margin-top:40px">
  <div class="col-md-6" >
        <input id="unidades" type="number" style="width:70px" class="form-control" placeholder="unid..."name="unidades" required>
  </div>
  <div class="col-md-6 form-controller" style="margin-bottom:10px">
        <input type="submit"  value="Reservar" class="btn btn-primary btn-sm" >
  </div>

</div>
@csrf
{{ Form::close() }}
