<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        // Hash::check compara a senha digitada com o hash salvo no banco
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'E-mail ou senha inválidos.'], 401);
        }

        // cria o token; o app guarda e manda nas próximas requisições
        $token = $user->createToken('mobile')->plainTextToken;

        return response()->json([
            'token' => $token,
            'data_hora' => now()->toIso8601String(),
            'usuario' => $this->formatarUsuario($user),
        ]);
    }

    public function logout(Request $request)
    {
        // apaga só o token usado nesta requisição
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Sessão encerrada.']);
    }

    public function me(Request $request)
    {
        return response()->json($this->formatarUsuario($request->user()));
    }

    // devolve só o que o app precisa
    private function formatarUsuario(User $user): array
    {
        return [
            'id' => $user->id,
            'nome' => $user->name,
            'email' => $user->email,
            'cadastrado_em' => $user->created_at?->toIso8601String(),
        ];
    }
}