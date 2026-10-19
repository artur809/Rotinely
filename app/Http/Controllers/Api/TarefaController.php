<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    // todas as tarefas do usuário dono do token, já com as categorias
    public function index(Request $request)
    {
        $tarefas = Tarefa::with('categorias')
            ->where('user_id', $request->user()->id)
            ->get()
            ->map(fn ($tarefa) => $this->formatar($tarefa));

        return response()->json($tarefas);
    }

    // marca ou desmarca como concluída (o app diz qual status quer)
    public function status(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pendente,concluida',
        ]);

        // filtra por user_id: ninguém mexe na tarefa de outro usuário
        $tarefa = Tarefa::with('categorias')
            ->where('user_id', $request->user()->id)
            ->findOrFail($id);

        $tarefa->status = $request->status;
        $tarefa->save();

        return response()->json($this->formatar($tarefa));
    }

    public function categorias()
    {
        return response()->json(Categoria::select('id', 'nome')->get());
    }

    private function formatar(Tarefa $tarefa): array
    {
        return [
            'id' => $tarefa->id,
            'titulo' => $tarefa->titulo,
            'descricao' => $tarefa->descricao,
            'prioridade' => $tarefa->prioridade,
            'status' => $tarefa->status,
            'categorias' => $tarefa->categorias
                ->map(fn ($c) => ['id' => $c->id, 'nome' => $c->nome])
                ->values(),
            'atualizado_em' => $tarefa->updated_at?->toIso8601String(),
        ];
    }
}