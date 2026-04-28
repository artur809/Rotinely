@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Pesquisar tarefa...">
                    </div>
                    <div class="d-flex gap-2">
                        <select class="form-select">
                            <option value="">Categoria</option>
                            <option value="1">Trabalho</option>
                            <option value="2">Estudos</option>
                            <option value="3">Pessoal & Lazer</option>
                            <option value="4">Saúde</option>
                            <option value="5">Finanças</option>
                            <option value="6">Casa</option>
                            <option value="7">Compras</option>
                            <option value="8">Família</option>
                        </select>
                        <select class="form-select">
                            <option value="">Prioridade</option>
                            <option value="baixa">Baixa</option>
                            <option value="media">Média</option>
                            <option value="alta">Alta</option>
                        </select>
                        <select class="form-select">
                            <option value="">Status</option>
                            <option value="0">Pendente</option>
                            <option value="1">Concluída</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-9">
            @include('partes.partesTarefas.modalEditarTarefa')
        </div>
    </div>

@endsection