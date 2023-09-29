<?php

namespace App\Http\Controllers;

use App\Models\apprenant;
use Illuminate\Http\Request;

class apprenantcontroller extends Controller
{

    public function accueil (){
        return view('welcome');
    }

        public function apprenant (){
            $app=apprenant::orderBy("nom","asc")->paginate(5);
            return view('apprenant',compact('app'));
        }
        
        public function create(Request $request){
            $sauve=new apprenant();
            $sauve->nom=$request->nom;
            $sauve->prenom=$request->prenom;
            $sauve->cohorte_id=$request->cohorte;
            $sauve->sauve();
            return redirect ()-> route('cohorte');
                  
               }

          public function destroy($id)
          {
            $appr= Apprenant::find($id);
            $appr->delete();
            return redirect ()-> route('apprenant');
           }
        }