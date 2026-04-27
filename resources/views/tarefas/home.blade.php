@extends('layouts.app')
@section('content')

    <h4 class="text-center mb-3">Minhas Tarefas</h4>

    <div class="row">
        <div class="col-12">
            <div class="card mb-2">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <div class="me-4">
                            <i class="bi bi-file-text fs-1"></i>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-0" style="font-size: 1.1rem;">Compras</p>
                            <h4 class="mb-1">Fazer compras</h4>
                            <p class="text-muted mb-0" style="font-size: 1.1rem;">Ir ao mercado</p>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <span style="font-size: 1.1rem;">alta</span>
                            <input type="checkbox" style="width: 25px; height: 25px;">
                            <button class="btn btn-link text-secondary p-0">
                                <i class="bi bi-trash fs-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-primary rounded-circle" 
        data-bs-toggle="modal" data-bs-target="#modalCriarTarefa"
        style="position: fixed; bottom: 30px; right: 30px; width: 55px; height: 55px; font-size: 1.5rem; display: flex; align-items: center; justify-content: center;">
        +
    </button>

    <div class="modal fade" id="modalCriarTarefa" tabindex="-1" aria-labelledby="modalCriarTarefaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCriarTarefaLabel">Nova Tarefa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Título</label>
                            <input type="text" name="titulo" class="form-control" placeholder="Título da tarefa">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <textarea name="descricao" class="form-control" placeholder="Descrição da tarefa"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Prioridade</label>
                            <select name="prioridade" class="form-select">
                                <option value="baixa">Baixa</option>
                                <option value="media">Média</option>
                                <option value="alta">Alta</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Categoria</label>
                            <select name="categoria" class="form-select">
                                <option value="1">Trabalho</option>
                                <option value="2">Estudos</option>
                                <option value="3">Pessoal & Lazer</option>
                                <option value="4">Saúde</option>
                                <option value="5">Finanças</option>
                                <option value="6">Casa</option>
                                <option value="7">Compras</option>
                                <option value="8">Família</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

@endsection