@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastro de Clientes</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('clientes.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nome" class="col-md-2 col-form-label">Nome</label>
                            <div class="col-md-4">
                                <input id="nome" type="text" class="form-control" name="nome" required autofocus>
                            </div>
                            <label for="sobrenome" class="col-md-2 col-form-label">Sobrenome</label>
                            <div class="col-md-4">
                                <input id="sobrenome" type="text" class="form-control" name="sobrenome" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-2 col-form-label">CPF</label>
                            <div class="col-md-4">
                                <input id="cpf" type="text" class="form-control" name="cpf" required>
                            </div>
                            <label for="cep" class="col-md-2 col-form-label">CEP</label>
                            <div class="col-md-4">
                                <input id="cep" type="text" class="form-control" name="cep" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="logradouro" class="col-md-2 col-form-label">Logradouro</label>
                            <div class="col-md-10">
                                <input id="logradouro" type="text" class="form-control" name="logradouro" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cod_cidade" class="col-md-3 col-form-label">Código da Cidade</label>
                            <div class="col-md-3">
                                <input id="cod_cidade" type="text" class="form-control" name="cod_cidade" required>
                            </div>
                            <label for="descr_cidade" class="col-md-3 col-form-label" style="white-space: nowrap;">Descrição da Cidade</label>
                            <div class="col-md-3">
                                <input id="descr_cidade" type="text" class="form-control" name="descr_cidade" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ddd_cel" class="col-md-2 col-form-label">DDD Celular</label>
                            <div class="col-md-2">
                                <input id="ddd_cel" type="text" class="form-control" name="ddd_cel" required data-mask="00">
                            </div>
                            <label for="tel_cel" class="col-md-2 col-form-label" style="white-space: nowrap;">Telefone Celular</label>
                            <div class="col-md-6">
                                <input id="tel_cel" type="text" class="form-control" name="tel_cel" required data-mask="(00) 00000-0000">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="e_mail" class="col-md-2 col-form-label">E-mail</label>
                            <div class="col-md-10">
                                <input id="e_mail" type="email" class="form-control" name="e_mail" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
             // Configuração do Inputmask para CPF
        Inputmask('999.999.999-99').mask('#cpf');

        // Configuração do Inputmask para CEP
        Inputmask('99999-999').mask('#cep');
          // This code will be executed when the document is ready.

        });
    </script>
@endsection







