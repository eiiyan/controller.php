<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('produto' , [ProdutoController::class , 'store']);

Route::get('produto' , [ProdutoController::class , 'index']);

Route::put('produto/{id}' , [ProdutoController::class , 'update']);

Route::delete('produto/{id}' , [ProdutoController::class , 'delete']);

Route::get('produto/{id}' , [ProdutoController::class , 'show']);

Route::get('produto/find/name' , [ProdutoController::class , 'findByName']);

Route::get('produto/find/maior' , [ProdutoController::class , 'pesquisarValorMaiorQue']);

Route::get('produto/find/menor' , [ProdutoController::class , 'pesquisarValorMenorQue']);

Route::get('produto/find/valores' , [ProdutoController::class, 'pesquisarEntreValores']);

Route::get('produto/find/marca' , [ProdutoController::class, 'pesquisarMarca']);

Route::get('produto/find/ano' , [ProdutoController::class, 'pesquisarPorAno']);

Route::get('produto/find/mes' , [ProdutoController::class, 'pesquisarPorMes']);

Route::get('produto/find/dia' , [ProdutoController::class, 'pesquisarPorDia']);

Route::post('cliente' , [ClienteController::class, 'store']);

Route::get('cliente/email' , [ClienteController::class , 'pesquisarPorEmail']);

Route::get('cliente/cpf' , [ClienteController::class ,'pesquisarPorCpf']);

Route::get('cliente/cidade' , [ClienteController::class , 'pesquisarPorCidade']);

Route::get('cliente/estado' , [ClienteController::class , 'pesquisarPorEstado']);

Route::get('cliente/ano' , [ClienteController::class, 'pesquisarPorAno']);

Route::get('cliente/mes' , [ClienteController::class , 'pesquisarPorMes']);

Route::get('cliente/MesAno' , [ClienteController::class ,'pesquisarPorMesAno']);
