<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Tarefa;

class PerfilController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $totalTarefas = Tarefa::where('user_id', $user->id)->count();
        $tarefasConcluidas = Tarefa::where('user_id', $user->id)->where('status', 'concluida')->count();
        $tarefasPendentes = Tarefa::where('user_id', $user->id)->where('status', 'pendente')->count();

        return view('telasPrincipais.perfil', compact('user', 'totalTarefas', 'tarefasConcluidas', 'tarefasPendentes'));
    }
    public function update(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id)],
        ]);
        try {
            $user->name  = $request->name;
            $user->email = $request->email;
            $user->save();

            session()->flash('msg', 'Perfil atualizado com sucesso!');
            return redirect()->route('perfil');

        } catch (\Exception $e) {
            session()->flash('erro', 'Erro ao atualizar perfil: ' . $e->getMessage());
            return redirect()->route('perfil');
        }
    }
    public function destroy(Request $request)
    {
        try {
            $user = auth()->user();

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            $user->delete();

            return redirect()->route('login');

        } catch (\Exception $e) {
            session()->flash('erro', 'Erro ao excluir conta: ' . $e->getMessage());
            return redirect()->route('perfil');
        }
    }
}