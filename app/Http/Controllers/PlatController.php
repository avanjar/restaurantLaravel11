<?php

namespace App\Http\Controllers;
use App\Models\produits;

use Illuminate\Http\Request;

class PlatController extends Controller
{
   function index() {
    $produits = Produits::get();
  
    $title ='plats';
    return view('plats',[
        'produits' => $produits,
        'title' => $title,
    ]);
}
    //
}


