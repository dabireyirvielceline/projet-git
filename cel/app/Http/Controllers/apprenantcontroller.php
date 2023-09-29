<?php

namespace App\Http\Controllers;

use App\Models\apprenant;
use Illuminate\Http\Request;
use App\Http\Controllers\test;


class apprenantcontroller extends Controller
{

    public function apprenant(){

        $appre=apprenant::orderBy("nom","asc")->paginate(3);
        return view('apprenant',compact("appre"));
    }


    public function cohorte(){
        return view('creation');
    }

    
    public function accueil(){
        return view('welcome');
    }
    public function destroy($id){
        $appre=apprenant::find($id);
        $appre->delete();
        return redirect()->route('apprenant')->with('statut','donnée supprimée avec succès');
       } 

    public function mod(Request $request){
        
    }
    public function modifier($id){
        $appre=apprenant::find($id);
        return view('modifier', compact('appre'));
    }
    public function update(Request $request,$id){
        $appre=apprenant::find($id);
        $appre->nom=$request->input('nom');
        $appre->prenom=$request->input('prenom');
        $appre->save();
        return redirect()->route('apprenant');
       
}
}
