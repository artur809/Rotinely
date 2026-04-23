@extends('layouts.auth')
@section('form')
    <div class="corP card-body login-card-body">
          <p class="login-box-msg">Cadastro de novo usuário</p>

          <form action="{{ route('cadastro') }}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input name="name" type="text" class="form-control" placeholder="Nome de usuário" />
              <div class="input-group-text">
                <span style="background-color:" class="bi bi-person-fill"></span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input name="password" type="password" class="form-control" placeholder="Crie sua senha " />
              <div class="input-group-text">
                <span class="bi bi-lock-fill"></span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input name="email" type="email" class="form-control" placeholder="Email" />
              <div class="input-group-text">
                <span class="bi bi-envelope-fill"></span>
              </div>
            </div>
            <!--begin::Row-->
            <div class="row">
              <div class="col-8">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                  <label class="form-check-label" for="flexCheckDefault"> Lembrar de mim </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Login</button>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </form>
        </div>
@endsection