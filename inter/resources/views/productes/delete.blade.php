{{Form::open(['url'=> '/productos/'.$product->id,'method' =>'DELETE'])}}
  <input type="submit"  class="btn btn-danger" value="Eliminar">
{{Form::close()}}
