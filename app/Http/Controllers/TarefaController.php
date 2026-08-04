<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::where('user_id', auth()->id())->get();
        return view('telasPrincipais.home', compact('tarefas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'prioridade' => 'required|in:baixa,media,alta',
            'categoria' => 'required|array|min:1',
            'categoria.*' => 'exists:categorias,id|distinct',
        ]);

        try {
            $tarefa = new Tarefa();
            $tarefa->titulo = $request->titulo;
            $tarefa->descricao = $request->descricao;
            $tarefa->prioridade = $request->prioridade;
            $tarefa->status = 'pendente';
            $tarefa->user_id = auth()->id();
            $tarefa->save();
            $tarefa->categorias()->attach($request->categoria);

            session()->flash('msg', 'Tarefa criada com sucesso!');
            return redirect()->route('home');

        } catch (\Exception $e) {
            session()->flash('erro', 'Erro ao criar tarefa: ' . $e->getMessage());
            return redirect()->route('home');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'prioridade' => 'required|in:baixa,media,alta',
            'categoria' => 'required|array|min:1',
            'categoria.*' => 'exists:categorias,id|distinct',
        ]);
        try {
            $tarefa = Tarefa::where('user_id', auth()->id())->findOrFail($id);

            $tarefa->titulo = $request->titulo;
            $tarefa->descricao = $request->descricao;
            $tarefa->prioridade = $request->prioridade;
            $tarefa->save();
            $tarefa->categorias()->sync($request->categoria);

            session()->flash('msg', 'Tarefa atualizada com sucesso!');
            return redirect()->route('home');

        } catch (\Exception $e) {
        session()->flash('erro', 'Erro ao atualizar tarefa: ' . $e->getMessage());
        return redirect()->route('home');
        }
    }

    public function destroy($id)
    {
        try {
            $tarefa = Tarefa::where('user_id', auth()->id())->findOrFail($id);
            $tarefa->delete();

            session()->flash('msg', 'Tarefa excluída com sucesso!');
            return redirect()->route('home');

        } catch (\Exception $e) {
            session()->flash('erro', 'Erro ao excluir tarefa: ' . $e->getMessage());
            return redirect()->route('home');
        }
    }

    public function concluir($id)
    {
        try {
            $tarefa = Tarefa::where('user_id', auth()->id())->findOrFail($id);
            $tarefa->status = $tarefa->status === 'concluida' ? 'pendente' : 'concluida';
            $tarefa->save();

            return redirect()->route('home');

        } catch (\Exception $e) {
            session()->flash('erro', 'Erro ao atualizar status: ' . $e->getMessage());
            return redirect()->route('home');
        }
    }

    public function pesquisa(Request $request)
    {
        $tarefas = collect();

        if ($request->filled('busca') || $request->filled('categoria') || $request->filled('prioridade') || $request->filled('status')) {

            $query = Tarefa::where('user_id', auth()->id());

            if ($request->filled('busca')) {
                $query->where('titulo', 'like', '%' . $request->busca . '%');
            }
            if ($request->filled('categoria')) {
                $query->whereHas('categorias', function ($q) use ($request) {
                $q->where('categorias.id', $request->categoria);
                });
            }
            if ($request->filled('prioridade')) {
                $query->where('prioridade', $request->prioridade);
            }
            if ($request->filled('status')) {
                $query->where('status', $request->status);
            }
            
            $tarefas = $query->get();
        }
        return view('telasPrincipais.pesquisa', compact('tarefas'));
    }
}