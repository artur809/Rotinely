<div class="modal fade" id="modalEditarUsuario" tabindex="-1" aria-labelledby="modalEditarUsuarioLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header corDark">
                <h5 class="modal-title text-white" id="modalEditarUsuarioLabel">Editar Usuário</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nome de usuário</label>
                        <input type="text" class="form-control" value="usuario1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" value="usuario1@email.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Tipo</label>
                        <select class="form-select">
                            <option value="usuario">Usuário</option>
                            <option value="admin">Administrador</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn corDark text-white">Salvar</button>
            </div>
        </div>
    </div>
</div>