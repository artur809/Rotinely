<div class="row">
    <div class="col-12">
        <div class="card mb-2">
            <div class="card-body p-3">
                <div class="d-flex align-items-center">
                    <div class="me-4">
                        <i class="bi bi-file-text fs-1 text-white"></i>
                    </div>
                    <div class="flex-grow-1">
                        <p class="text-white mb-0 tarefa-texto">{{ $tarefa['categoria'] }}</p>
                        <h4 class="mb-1 text-white">{{ $tarefa['titulo'] }}</h4>
                        <p class="text-white mb-0 tarefa-texto">{{ $tarefa['descricao'] }}</p>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <span class="tarefa-texto text-white">{{ $tarefa['prioridade'] }}</span>
                        <input type="checkbox" class="tarefa-checkbox">
                        <button class="btn btn-link btn-editar p-0" data-bs-toggle="modal" data-bs-target="#modalEditarTarefa">
                            <i class="bi bi-pencil fs-4"></i>
                        </button>
                        <button class="btn btn-link btn-excluir p-0">
                            <i class="bi bi-trash fs-4"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>