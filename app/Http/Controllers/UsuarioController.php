<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // GET /api/usuarios
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios, 200) ; // Retorna todos os usuários
    }

    // POST /api/usuarios
    public function store(Request $request)
    {
        $usuario = Usuario::create($request->all()); // Cria um novo usuário
        return response()->json($usuario, 201);
    }

    // GET /api/usuarios/{id}
    public function show($id)
    {
        return Usuario::findOrFail($id); // Retorna um usuário específico
    }

    // PUT/PATCH /api/usuarios/{id}
    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all()); // Atualiza o usuário
        return response()->json($usuario, 200);
    }

    // DELETE /api/usuarios/{id}
    public function destroy($id)
    {
        Usuario::findOrFail($id)->delete(); // Exclui o usuário
        return response()->json(null, 204);
    }
}
