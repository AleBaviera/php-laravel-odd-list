<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myOddController extends Controller
{
    public function oddFunction(){
      $oddNumbers=[];
      for ($i=10; $i < 100; $i++) {
        if ($i&1) {
          $oddNumbers[]= $i;
        }
      }
      return view('myHomePage', compact('oddNumbers'));
    }
}
