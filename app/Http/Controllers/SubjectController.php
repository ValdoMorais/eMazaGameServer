<?php

namespace App\Http\Controllers;
use App\Models\subject;
use App\Traits\HelperTrait;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    use HelperTrait;
    
    public function index(Request $request){
        return $this -> processSubject($request); 
     }

    public function store(Request $request){
        return response()->json([ 'error' =>"Nao e possivel adicionar a Disciplina no Momento....."], status: 403);  
    }
    public function show(Request $request, subject $question){
        return response()->json([ 'error' =>"Nao e possivel mostrar detalhes da Diciplina no momento"], status: 200);  
    }
    public function destroy(Request $request, Subject $question){
        return response()->json([ 'error' =>"Nao e possivel remover a Disciplina no memomento"], status: 200);  
    }
}
