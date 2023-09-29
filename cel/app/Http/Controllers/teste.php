<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teste extends Controller
{
    public function accueil(){
        return view('welcome');
    }
    public function apprenant(){
        return view('apprenant');
    }
}
