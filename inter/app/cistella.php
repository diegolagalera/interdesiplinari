<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cistella extends Model
{
  protected $fillable = [
    'id_usuari','data',
  ];

  public function users()
  {
    return $this->belongsTo('App/users');
  }
  public function productes_comprats()
  {
    return $this->hasMany('App/productes_comprats');
  }
}
