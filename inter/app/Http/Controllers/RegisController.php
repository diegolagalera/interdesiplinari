<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisController extends Controller
{
  public function registre() {
  //Get all roles and pass it to the view
      $roles = Role::get();
      return view('auth.register');
  }

  public function registre(Request $request){
    dd("hola");

  }
}
