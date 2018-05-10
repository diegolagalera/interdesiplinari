<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cistellas extends Model
{
  protected $fillable = [
    'id_usuari','data','status',
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
