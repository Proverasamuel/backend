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
        Schema::create('reacao', function (Blueprint $table) {
            $table->id();
            $table->string('tipoReacao');
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('post_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('post_id')->references('id')->on('post');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reacao');
    }
};
