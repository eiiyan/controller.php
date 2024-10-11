<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function cadastrar(Request $request){
        $tarefa = Tarefa::create([
            'titulo'=>$request->titulo,
            'descricao'=>$request->descricao,
            
            
        ]);

        return response()->json([
            'status'=>true,
            'message'=> "Tarefa cadastrada",
            'data'=> $tarefa
        ]);

    }

    public function pesquisarPorTitulo(Request $request){
        $tarefa = Tarefa::where('titulo', '=', $request->titulo)->get();

        if($tarefa->isEmpty()){
            return response()->json([
                'status'=>false,
                'message'=>'Tarefa não encontrada'
            ]);
        }

        return response()->json([
            'status'=>true,
            'data'=>$tarefa
        ]);
    }

    public function FindByIdRequest(Request $request){
        $tarefa = Tarefa::find($request->id);

        if($tarefa == null){
            return response()->json([
                'status'=>false,
                'message'=> "Tarefa não encontrada"
            ]);

        }

            return response()->json([
                'status'=>true,
                'message'=> "Tarefa encontrada",
                'data'=> $tarefa
            ]);
    
    }

    public function FindById($id){
        $tarefa = Tarefa::find($id);

        if($tarefa == null){
            return response()->json([
                'status'=>false,
                'message'=> "Tarefa não encontrada"
            ]);

        }

            return response()->json([
                'status'=>true,
                'message'=> "Tarefa encontrada",
                'data'=> $tarefa
            ]);
        }
}
