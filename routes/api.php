<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AmizadeController;
use App\Http\Controllers\Feed_NoticiasController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\Membros_GrupoController;
use App\Http\Controllers\Mensagem_PrivadaController;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\NotificacaoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReacaoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Models\Membros_Grupo;

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */
Route::apiResource('posts', PostController::class);
Route::apiResource('Albums', AlbumController::class);
Route::apiResource('Fotos', FotoController::class);
Route::apiResource('amigos', AmizadeController::class);
Route::apiResource('notificacoes', NotificacaoController::class);
Route::apiResource('membrosgrupo', Membros_GrupoController::class);
Route::apiResource('grupos', GrupoController::class);
Route::apiResource('mensagemprivada',Mensagem_PrivadaController::class);
Route::apiResource('reacao', ReacaoController::class);
Route::apiResource('feed_noticias', Feed_NoticiasController::class);
Route::apiResource('Log', LogController::class);
Route::apiResource('mensagemgrupo', MensagemController::class);
Route::apiResource('usuarios', UsuarioController::class);
