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
        Schema::create('mensagem_privada', function (Blueprint $table) {
            $table->id();
            $table->string('conteudo');
            $table->unsignedBigInteger('remetente_id');
            $table->unsignedBigInteger('destinatario_id');
            $table->foreign('remetente_id')->references('id')->on('usuarios');
            $table->foreign('destinatario_id')->references('id')->on('usuarios');
            $table->string('data_envio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensagem_privada');
    }
};
