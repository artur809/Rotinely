<div class="modal fade" id="modalEditarPerfil" tabindex="-1" aria-labelledby="modalEditarPerfilLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header corDark">
                <h5 class="modal-title text-white" id="modalEditarPerfilLabel">Editar Perfil</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body corLight">
                <form>
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nome de usuário</label>
                        <input type="text" class="form-control" value="NomeDoUsuario">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" value="email@email.com">
                    </div>
                </form>
            </div>
            <div class="modal-footer corLight">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn corDark text-white">Salvar</button>
            </div>
        </div>
    </div>
</div>