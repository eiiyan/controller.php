<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function store(Request $request){

        $cliente = Cliente::create([
            'nome'=> $request->nome,
            'celular'=> $request->celular,
            'cpf'=> $request->cpf,
            'email'=> $request->email,
            'dataNascimento'=> $request->dataNascimento,
            'cidade'=> $request->cidade,
            'estado'=> $request->estado,
            'pais'=> $request->pais,
            'rua'=> $request->rua,
            'numero'=> $request->numero,
            'bairro'=> $request->bairro,
            'cep'=> $request->cep
        ]);

        return response()->json([
        
            'status'=>true,
            'message'=> 'Cliente cadastrado com sucesso',
            'data'=> $cliente

        ]);
   }

   public function pesquisarPorEmail(Request $request){
    $cliente = Cliente::where('email' , '=', $request->email)->get();

    if($cliente->isEmpty()) 
        return response()->json([
            'status'=> false,
            'message'=> 'Sem resultados encontrados'
        ]);
        
         return response()->json([
            'status'=> true,
            'data'=> $cliente
         ]);
   }

   public function pesquisarPorCpf(Request $request){
    $cliente = Cliente::where('cpf' , '=', $request->cpf)->get();

    if($cliente->isEmpty()) 
        return response()->json([
            'status'=> false,
            'message'=> 'Sem resultados encontrados'
        ]);
        
         return response()->json([
            'status'=> true,
            'data'=> $cliente
         ]);
   }

   public function pesquisarPorCidade(Request $request){
    $cliente = Cliente::where('cidade' , '=', $request->cidade)->get();

    if($cliente->isEmpty()) 
        return response()->json([
            'status'=> false,
            'message'=> 'Sem resultados encontrados'
        ]);
        
         return response()->json([
            'status'=> true,
            'data'=> $cliente
         ]);
   }

   public function pesquisarPorEstado(Request $request){
    $cliente = Cliente::where('estado' , '=', $request->estado)->get();

    if($cliente->isEmpty()) 
        return response()->json([
            'status'=> false,
            'message'=> 'Sem resultados encontrados'
        ]);
        
         return response()->json([
            'status'=> true,
            'data'=> $cliente
         ]);
   }

   public function pesquisarPorAno(Request $request){
    $cliente = Cliente::whereYear('dataNascimento' ,'=' , $request->dataNascimento)->get();

    
    if($cliente->isEmpty()) 
        return response()->json([
            'status'=> false,
            'message'=> 'Sem resultados para a pesquisa'
        ]);
        
         return response()->json([
            'status'=> true,
            'data'=> $cliente
         ]);
    
   }

   public function pesquisarPorMes(Request $request){
    $cliente = Cliente::whereMonth('dataNascimento' ,'=' , $request->dataNascimento)->get();

    if($cliente->isEmpty()) 
        return response()->json([
            'status'=> false,
            'message'=> 'Sem resultados para a pesquisa'
        ]);
        
         return response()->json([
            'status'=> true,
            'data'=> $cliente
         ]);
   }

   public function pesquisarPorMesAno(Request $request){
    $cliente = Cliente::where('dataNascimento', 'like', '%' . $request->dataNascimento)->get();

   }



   
}
