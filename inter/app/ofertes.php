<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ofertes extends Model
{
  protected $fillable = [
      'descripcio','id_producte','data_inici','data_final','descompte','active',
  ];

public function productes()
{
  return $this->belongsTo('App\productes','id_producte','id','porductes');
}
public function productes_comprats()
{
  return $this->hasMany('App/productes_comprats');
}

}
