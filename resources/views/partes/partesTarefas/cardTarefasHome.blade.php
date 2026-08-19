<div class="row">
    <div class="col-12">
        <div class="card mb-2">
            <div class="card-body p-3">
                <div class="d-flex align-items-center">
                    <div class="me-4">
                        <i class="bi bi-file-text fs-1 text-dark"></i>
                    </div>
                    <div class="flex-grow-1">
                        <p class="text-dark mb-0 tarefa-texto">
                            {{ $tarefa->categorias->pluck('nome')->join(', ') }}
                        </p>
                        <h4 class="mb-1 text-dark">{{ $tarefa->titulo }}</h4>
                        <p class="text-dark mb-0 tarefa-texto">{{ $tarefa->descricao }}</p>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <span class="tarefa-texto text-dark">{{ $tarefa->prioridade }}</span>
                        <input type="checkbox" class="tarefa-checkbox" data-id="{{ $tarefa->id }}" {{ $tarefa->status === 'concluida' ? 'checked' : '' }}>
                        <button class="btn btn-link text-primary p-0" data-bs-toggle="modal" data-bs-target="#modalEditarTarefa{{ $tarefa->id }}">
                            <i class="bi bi-pencil fs-4"></i>
                        </button>
                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="GET" class="d-inline">
                            <button type="submit" class="btn btn-link text-danger p-0" onclick="return confirm('Tem certeza que deseja excluir?')">
                                <i class="bi bi-trash fs-4"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEditarTarefa{{ $tarefa->id }}" tabindex="-1" aria-labelledby="modalEditarTarefaLabel{{ $tarefa->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
                @csrf
                <div class="modal-header corDark">
                    <h5 class="modal-title text-white" id="modalEditarTarefaLabel{{ $tarefa->id }}">Editar Tarefa</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $erro)
                                    <li>{{ $erro }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-3">
                        <label class="form-label fw-bold">Título</label>
                        <input type="text" name="titulo" class="form-control" value="{{ $tarefa->titulo }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Descrição</label>
                        <textarea name="descricao" class="form-control">{{ $tarefa->descricao }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Prioridade</label>
                        <select name="prioridade" class="form-select">
                            <option value="baixa" {{ $tarefa->prioridade === 'baixa' ? 'selected' : '' }}>Baixa</option>
                            <option value="media" {{ $tarefa->prioridade === 'media' ? 'selected' : '' }}>Média</option>
                            <option value="alta"  {{ $tarefa->prioridade === 'alta'  ? 'selected' : '' }}>Alta</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Categoria</label>
                        <div id="categoriasEditar{{ $tarefa->id }}">
                            @foreach($tarefa->categorias as $categoriaVinculada)
                                <div class="d-flex gap-2 mb-2">
                                    <select name="categoria[]" class="form-select">
                                        <option value="1" {{ $categoriaVinculada->id == 1 ? 'selected' : '' }}>Trabalho</option>
                                        <option value="2" {{ $categoriaVinculada->id == 2 ? 'selected' : '' }}>Estudos</option>
                                        <option value="3" {{ $categoriaVinculada->id == 3 ? 'selected' : '' }}>Pessoal & Lazer</option>
                                        <option value="4" {{ $categoriaVinculada->id == 4 ? 'selected' : '' }}>Saúde</option>
                                        <option value="5" {{ $categoriaVinculada->id == 5 ? 'selected' : '' }}>Finanças</option>
                                        <option value="6" {{ $categoriaVinculada->id == 6 ? 'selected' : '' }}>Casa</option>
                                        <option value="7" {{ $categoriaVinculada->id == 7 ? 'selected' : '' }}>Compras</option>
                                        <option value="8" {{ $categoriaVinculada->id == 8 ? 'selected' : '' }}>Família</option>
                                    </select>
                                    @if($loop->first)
                                        <button type="button" class="btn corDark text-white btnAdicionarCategoriaEditar" data-alvo="categoriasEditar{{ $tarefa->id }}">+</button>
                                    @else
                                        <button type="button" class="btn btn-danger btn-remover">-</button>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn corDark text-white">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(document).on('click', '.btnAdicionarCategoriaEditar', function () {
            const alvo = '#' + $(this).data('alvo');

            if ($(alvo).children().length >= 3) {
                return;
            }
            const novaCategoria = `
                <div class="d-flex gap-2 mb-2">
                    <select name="categoria[]" class="form-select">
                        <option value="1">Trabalho</option>
                        <option value="2">Estudos</option>
                        <option value="3">Pessoal & Lazer</option>
                        <option value="4">Saúde</option>
                        <option value="5">Finanças</option>
                        <option value="6">Casa</option>
                        <option value="7">Compras</option>
                        <option value="8">Família</option>
                    </select>
                    <button type="button" class="btn btn-danger btn-remover">-</button>
                </div>
            `;
            $(alvo).append(novaCategoria);
        });

        $(document).on('click', '.btn-remover', function () {
            $(this).closest('div').remove();
        });
    });

    $(document).off('change', '.tarefa-checkbox').on('change', '.tarefa-checkbox', function () {
        const id = $(this).data('id');
        $.get('/tarefas/' + id + '/concluir');
    });
</script>