<?php

namespace App\Http\Controllers;

use App\Models\modifier;
use Illuminate\Http\Request;

class modifierController extends Controller
{
    public function modifier(){
        return view('modifier');
    }
}
