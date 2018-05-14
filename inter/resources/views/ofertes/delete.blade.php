{{Form::open(['url'=> '/ofertas/'.$oferta->id,'method' =>'DELETE'])}}
  <input type="submit"  class="btn btn-danger" value="Cancelar">
{{Form::close()}}
