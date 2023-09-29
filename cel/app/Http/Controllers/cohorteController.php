<?php

namespace App\Http\Controllers;

use App\Models\cohorte;
use App\Models\apprenant;
use Illuminate\Http\Request;

class cohorteController extends Controller
{
    public function cohorte(){
      $selection=cohorte::all();
      return view('create', compact('selection'));
    }
    public function creation(){
      return view('creation');
    }

    public function create(Request $request){
       $sauve= new apprenant();
       $sauve->nom= $request->nom;
       $sauve->prenom= $request->prenom;
       $sauve->cohorte_id= $request->cohorte;
       $sauve->save();
       return redirect()->route('apprenant');
       
    }
}
