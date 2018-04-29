<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productes extends Model
{
  protected $fillable = [
      'nom', 'preu','descripcio',
  ];

public function ofertes()
{
  return $this->belongsTo('App\ofertes');
}
}
