<?php

namespace App\Http\Controllers;


use App\Models\cohortes;
use Illuminate\Http\Request;

class cohortescontroller extends Controller
{
    public function cohortes (){
        $selection=cohortes::all;
        return view('create_apprenant',compact('app'));
    }
    
}



