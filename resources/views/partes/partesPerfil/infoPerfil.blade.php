<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0 text-dark">Meu Perfil</h4>
            </div>
            <div class="card-body">
                <div class="text-center mb-4">
                    <i class="bi bi-person-circle text-dark" style="font-size: 6rem;"></i>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold text-dark" style="font-size: 1.1rem;">Nome de usuário</label>
                    <p class="text-dark" style="font-size: 1.1rem;">{{ $user->name }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold text-dark" style="font-size: 1.1rem;">Email</label>
                    <p class="text-dark" style="font-size: 1.1rem;">{{ $user->email }}</p>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <form action="{{ route('perfil.destroy') }}" method="GET">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza? Essa ação não pode ser desfeita.')">Excluir conta</button>
                    </form>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditarPerfil">Editar perfil</button>
                </div>
            </div>
        </div>
    </div>
</div>