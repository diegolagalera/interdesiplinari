<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productes_comprats extends Model
{
  protected $fillable = [
    'id_cistella','id_producte','id_oferta','quantitat',
  ];

  public function cistella()
  {
    return $this->belongsTo('App/cistella');
  }
  public function productes()
  {
    return $this->belongsTo('App/productes');
  }
  public function oferta()
  {
    return $this->belongsTo('App/oferta');
  }
}
