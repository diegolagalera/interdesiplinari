{{Form::open(['url'=> '/ofertas/'.$oferta->id,'method' =>'DELETE'])}}
  <input type="submit"  class="btn btn-danger" value="Eliminar">
{{Form::close()}}
