@extends('layouts.app')
@section('content')

    <h2 class="text-center mb-4">Gerenciar Usuários</h2>

    @include('partes.partesAdmin.tabelaUsuarios')
    @include('partes.partesAdmin.modalEditarUsuario')

@endsection