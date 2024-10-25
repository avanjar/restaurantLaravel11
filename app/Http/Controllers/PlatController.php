<?php

namespace App\Http\Controllers;
use App\Models\produits;

use Illuminate\Http\Request;

class PlatController extends Controller
{
   function index() {
    $produits = Produits::get();
  
   
    return view('plats',[
        'produits' => $produits,
       
    ]);
}
    //
}


