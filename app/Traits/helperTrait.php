<?php

namespace App\Traits;

use App\Models\subject;
use App\Models\question;
use App\Models\User;
use Illuminate\Http\Request;

trait HelperTrait
{
    public function processSubject(Request $request){

        $OrderDirection = $request->query(key:'direction', default: 'desc');
        $OrderColumn = $request -> query ('column', 'id');
        $TotalPerPage = $request -> query('per_page', 3);

        // $subjets = subject::all();
        $subjets = subject::orderBy($OrderColumn, $OrderDirection)-> paginate($TotalPerPage);

        //$subjets = subject::orderBy('updated_at', 'asc')-> paginate();
        return response()->json([ 'success' =>$subjets], status: 200);  

    }

    public function processQuestion(Request $request){

        $OrderDirection = $request->query(key:'direction', default: 'desc');
        $OrderColumn = $request -> query ('column', 'id');
        $TotalPerPage = $request -> query('per_page', 3);

        // $subjets = subject::all();
        $questions = question::orderBy($OrderColumn, $OrderDirection)-> paginate($TotalPerPage);

        //$subjets = subject::orderBy('updated_at', 'asc')-> paginate();
        return response()->json([ 'success' =>$questions], status: 200);  

    }
    
}
