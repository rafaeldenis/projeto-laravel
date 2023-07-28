@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Cadastro de Cliente</h2>
        <form action="" method="post">
            @csrf <!-- Token CSRF para proteção contra ataques Cross-Site Request Forgery -->
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="sobrenome" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
            </div>
            <div class="mb-3">
                <label for="documento" class="form-label">Documento</label>
                <input type="text" class="form-control" id="documento" name="documento" required>
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>
            <div class="mb-3">
                <label for="rg" class="form-label">RG</label>
                <input type="text" class="form-control" id="rg" name="rg" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
