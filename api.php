<?php

use App\Http\Controllers\TarefaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('tarefa' , [TarefaController::class, 'cadastrar']);

Route::get('tarefa' , [TarefaController::class, 'pesquisarPorTitulo']);

Route::get('tarefa/find' , [TarefaController::class,'FindByIdRequest']);

Route::get('tarefa/{id}' , [TarefaController::class,'FindById']);
