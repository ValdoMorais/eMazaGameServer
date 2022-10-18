<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenericController extends Controller
{
    //
    public function lending(Request $r){
       return view ('lending');
    }
}
