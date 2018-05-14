<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcepcionsController extends Controller
{
    public function index(){
      echo 'You\'re here :D';
    }
    public function ofertatime(Request $request) {
      $asd ="asd";
      return  response()->json('hola');
    }

  }
