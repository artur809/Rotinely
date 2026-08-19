<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="d-flex justify-content-end mb-3">
            <button class="btn corDark text-white" data-bs-toggle="modal" data-bs-target="#modalCriarUsuario">
                + Adicionar Usuário
            </button>
        </div>

        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nome de usuário</th>
                            <th>Email</th>
                            <th>Tipo</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    @if($usuario->is_admin)
                                        <span class="badge bg-danger">Administrador</span>
                                    @else
                                        <span class="badge bg-secondary">Usuário</span>
                                    @endif
                                </td>
                                <td class="d-flex gap-2">
                                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarUsuario{{ $usuario->id }}">Editar</button>
                                    @if($usuario->id !== auth()->id())
                                        <form action="{{ route('admin.destroy', $usuario->id) }}" method="GET" class="d-inline">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir esse usuário?')">Excluir</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCriarUsuario" tabindex="-1" aria-labelledby="modalCriarUsuarioLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('admin.store') }}" method="POST">
                @csrf
                <div class="modal-header corDark">
                    <h5 class="modal-title text-white" id="modalCriarUsuarioLabel">Adicionar Usuário</h5>
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
                        <label class="form-label fw-bold">Nome de usuário</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Senha</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Tipo</label>
                        <select name="is_admin" class="form-select">
                            <option value="0">Usuário</option>
                            <option value="1">Administrador</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn corDark text-white">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@foreach($usuarios as $usuario)
    @include('partes.partesAdmin.modalEditarUsuario', ['usuario' => $usuario])
@endforeach