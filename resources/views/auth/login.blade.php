@extends('layouts.auth')
@section('form')
    <div class="corLight card-body login-card-body">
          <p class="login-box-msg">LOGIN</p>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul class="mb-0">
                      @foreach ($errors->all() as $erro)
                          <li>{{ $erro }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form action="{{ url('/login') }}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input name="email" type="email" class="form-control" placeholder="E-mail" />
              <div class="input-group-text">
                <span class="bi bi-person-fill"></span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input name="password" type="password" class="form-control" placeholder="Senha" />
              <div class="input-group-text">
                <span class="bi bi-lock-fill"></span>
              </div>
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>

          <!-- /.social-auth-links -->
          <p class="mb-0 mt-3">
            <a href="{{ route('cadastro') }}" class="text-center"> Cadastrar-se </a>
          </p>
        </div>
@endsection