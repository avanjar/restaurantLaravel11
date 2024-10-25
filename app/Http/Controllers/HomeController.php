<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $actu = Actu::find(1);
      
        $title ='Accueil';
        return view('home',[
            'actu' => $actu,
            'title' => $title,
        ]);
    }
    //
}
