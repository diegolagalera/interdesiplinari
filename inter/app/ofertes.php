<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ofertes extends Model
{
  protected $fillable = [
      'descripcio','data', 'id_producte',
  ];

public function productes()
{
  return $this->hasMany('App/productes');
}

}
