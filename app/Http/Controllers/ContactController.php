<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index () {
        //charge la contact.blad.php
        return view('contact');
    }
    
}
