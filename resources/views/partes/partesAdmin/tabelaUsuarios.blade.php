<div class="row justify-content-center">
    <div class="col-md-12">
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
                                    <form action="{{ route('admin.destroy', $usuario->id) }}" method="GET" class="d-inline">
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir esse usuário?')">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@foreach($usuarios as $usuario)
    @include('partes.partesAdmin.modalEditarUsuario', ['usuario' => $usuario])
@endforeach