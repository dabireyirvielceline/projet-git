<?php

namespace App\Models;

use App\Models\cohorte;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class apprenant extends Model
{protected $table='apprenants';
    use HasFactory;
    public function cohorte(){
        
        return   $this->belongsTo(cohorte::class);
       }
   /*  public function mofifier(){
        return   $this->belongsTo(cohorte::class);
       }
    */
  


 


}
