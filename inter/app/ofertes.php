<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ofertes extends Model
{
  protected $fillable = [
      'descripcio', 'id_producte',
  ];

public function productes()
{
  return $this->belongsTo('App/productes');
}

}
