<div class="modal fade" id="modalEditarUsuario{{ $usuario->id }}" tabindex="-1" aria-labelledby="modalEditarUsuarioLabel{{ $usuario->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.update', $usuario->id) }}" method="POST">
                @csrf
                <div class="modal-header corDark">
                    <h5 class="modal-title text-white" id="modalEditarUsuarioLabel{{ $usuario->id }}">Editar Usuário</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nome de usuário</label>
                        <input type="text" name="name" class="form-control" value="{{ $usuario->name }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $usuario->email }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Tipo</label>
                        <select name="is_admin" class="form-select">
                            <option value="0" {{ !$usuario->is_admin ? 'selected' : '' }}>Usuário</option>
                            <option value="1" {{ $usuario->is_admin ? 'selected' : '' }}>Administrador</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn corDark text-white">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div><div class="modal fade" id="modalEditarUsuario{{ $usuario->id }}" tabindex="-1" aria-labelledby="modalEditarUsuarioLabel{{ $usuario->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.update', $usuario->id) }}" method="POST">
                @csrf
                <div class="modal-header corDark">
                    <h5 class="modal-title text-white" id="modalEditarUsuarioLabel{{ $usuario->id }}">Editar Usuário</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nome de usuário</label>
                        <input type="text" name="name" class="form-control" value="{{ $usuario->name }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $usuario->email }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Tipo</label>
                        <select name="is_admin" class="form-select">
                            <option value="0" {{ !$usuario->is_admin ? 'selected' : '' }}>Usuário</option>
                            <option value="1" {{ $usuario->is_admin ? 'selected' : '' }}>Administrador</option>
                        </select>
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