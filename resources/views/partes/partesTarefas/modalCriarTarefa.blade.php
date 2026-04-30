<div class="modal fade" id="modalCriarTarefa" tabindex="-1" aria-labelledby="modalCriarTarefaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header corDark">
                <h5 class="modal-title text-white" id="modalCriarTarefaLabel">Nova Tarefa</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Título</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Título da tarefa">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Descrição</label>
                        <textarea name="descricao" class="form-control" placeholder="Descrição da tarefa"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Prioridade</label>
                        <select name="prioridade" class="form-select">
                            <option value="baixa">Baixa</option>
                            <option value="media">Média</option>
                            <option value="alta">Alta</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Categoria</label>
                        <div id="categorias">
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
                                <button type="button" class="btn corDark text-white" id="btnAdicionarCategoria">+</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn corDark text-white">Adicionar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#btnAdicionarCategoria').on('click', function () {
            if ($('#categorias').children().length >= 3) {
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
            $('#categorias').append(novaCategoria);
        });

        $(document).on('click', '.btn-remover', function () {
            $(this).closest('div').remove();
        });
    });
</script>