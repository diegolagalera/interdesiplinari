<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ofertes extends Model
{
  protected $fillable = [
      'descripcio','id_producte','data_inici','data_final','descompte',
  ];

public function productes()
{
  return $this->belongsTo('App/productes');
}
public function productes_comprats()
{
  return $this->hasMany('App/productes_comprats');
}

}
