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
        Schema::create('mensagem', function (Blueprint $table) {
            $table->id();
            $table->string('conteudo');
            $table->string('anexo');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('grupo_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensagem');
    }
};
