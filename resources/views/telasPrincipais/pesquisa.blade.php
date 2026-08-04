@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body corLight">
                    <form action="{{ route('pesquisa') }}" method="GET">
                        <div class="mb-3">
                            <input type="text" name="busca" class="form-control" placeholder="Pesquisar tarefa..." value="{{ request('busca') }}">
                        </div>
                        <div class="d-flex gap-2">
                            <select name="categoria" class="form-select" onchange="this.form.submit()">
                                <option value="">Categoria</option>
                                <option value="1" {{ request('categoria') == 1 ? 'selected' : '' }}>Trabalho</option>
                                <option value="2" {{ request('categoria') == 2 ? 'selected' : '' }}>Estudos</option>
                                <option value="3" {{ request('categoria') == 3 ? 'selected' : '' }}>Pessoal & Lazer</option>
                                <option value="4" {{ request('categoria') == 4 ? 'selected' : '' }}>Saúde</option>
                                <option value="5" {{ request('categoria') == 5 ? 'selected' : '' }}>Finanças</option>
                                <option value="6" {{ request('categoria') == 6 ? 'selected' : '' }}>Casa</option>
                                <option value="7" {{ request('categoria') == 7 ? 'selected' : '' }}>Compras</option>
                                <option value="8" {{ request('categoria') == 8 ? 'selected' : '' }}>Família</option>
                            </select>
                            <select name="prioridade" class="form-select" onchange="this.form.submit()">
                                <option value="">Prioridade</option>
                                <option value="baixa" {{ request('prioridade') == 'baixa' ? 'selected' : '' }}>Baixa</option>
                                <option value="media" {{ request('prioridade') == 'media' ? 'selected' : '' }}>Média</option>
                                <option value="alta"  {{ request('prioridade') == 'alta'  ? 'selected' : '' }}>Alta</option>
                            </select>
                            <select name="status" class="form-select" onchange="this.form.submit()">
                                <option value="">Status</option>
                                <option value="pendente"  {{ request('status') == 'pendente'  ? 'selected' : '' }}>Pendente</option>
                                <option value="concluida" {{ request('status') == 'concluida' ? 'selected' : '' }}>Concluída</option>
                            </select>
                            <button type="submit" class="btn corDark text-white">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-9">
            @forelse($tarefas as $tarefa)
                @include('partes.partesTarefas.cardTarefasHome', ['tarefa' => $tarefa])
            @empty
                @if(request()->anyFilled(['busca', 'categoria', 'prioridade', 'status']))
                    <p class="text-center text-muted mt-4">Nenhuma tarefa encontrada.</p>
                @else
                    <p class="text-center text-muted mt-4">Use os filtros acima para buscar suas tarefas.</p>
                @endif
            @endforelse
        </div>
    </div>

@endsection