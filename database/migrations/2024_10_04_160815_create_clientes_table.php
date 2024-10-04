<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 60)->nullable(false);
            $table->string('celular',60)->nullable(false);
            $table->string('cpf', 60)->nullable(false);
            $table->string('email', 60)->nullable(false);
            $table->date('dataNascimento',60 )->nullable(false);
            $table->string('cidade', 80)->nullable(false);
            $table->string('estado', 80)->nullable(false);
            $table->string('pais', 80)->nullable(false);
            $table->string('rua' , 80)->nullable(false);
            $table->string('numero' , 60)->nullable(false);
            $table->string('bairro', 80)->nullable(false);
            $table->string('cep', 80)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
