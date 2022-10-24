<?php

namespace App\Http\Controllers;
use App\Models\question;
use Illuminate\Http\Request;
use App\Traits\HelperTrait;

class QuestionController extends Controller
{
    //
    use helperTrait;

    public function index(Request $request){
         return $this -> processQuestion($request); 
    }
    public function store(Request $request){
        return response()->json([ 'error' =>"Nao e possivel adicionar perguntas no Momento....."], status: 403);  
    }
    public function show(Request $request, Question $question){
        return response()->json([ 'error' =>"Nao e possivel mostrar detalhes da Pergunta no momento"], status: 200);  
    }
    public function destroy(Request $request, Question $question){
        return response()->json([ 'error' =>"Nao e possivel remover a pergunta no memomento"], status: 200);  
    }
}
