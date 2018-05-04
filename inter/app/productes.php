<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productes extends Model
{
  protected $fillable = [
      'nom', 'preu','descripcio','imatge',
  ];
  public function productes_comprats()
  {
    return $this->hasMany('App/productes_comprats');
  }
}
