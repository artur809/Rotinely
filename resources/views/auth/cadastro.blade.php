@extends('layouts.auth')
@section('form')
    <div class="corLight card-body login-card-body">
          <p class="login-box-msg">Cadastro de novo usuário</p>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul class="mb-0">
                      @foreach ($errors->all() as $erro)
                          <li>{{ $erro }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form action="{{ url('/register') }}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input name="name" type="text" class="form-control" placeholder="Nome" />
              <div class="input-group-text">
                <span class="bi bi-person-fill"></span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input name="email" type="email" class="form-control" placeholder="Email" />
              <div class="input-group-text">
                <span class="bi bi-envelope-fill"></span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input name="password" type="password" class="form-control" placeholder="Crie sua senha" />
              <div class="input-group-text">
                <span class="bi bi-lock-fill"></span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input name="password_confirmation" type="password" class="form-control" placeholder="Confirme sua senha" />
              <div class="input-group-text">
                <span class="bi bi-lock-fill"></span>
              </div>
            </div>
            <!--begin::Row-->
            <div class="row">
              <div class="col-12">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </form>
        </div>
@endsection