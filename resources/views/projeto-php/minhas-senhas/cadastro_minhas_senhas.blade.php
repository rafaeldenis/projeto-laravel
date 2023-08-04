@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastro de Senhas</div>

                <div class="card-body">
                    <form method="POST" action="{{ isset($senha) ? route('senhas.update', $senha->codigo) : route('minhas_senhas.store') }}">
                        @csrf
                        @if(isset($senha))
                            @method('PUT')
                        @endif

                        <div class="form-group row">
                            <label for="descricao_sistema" class="col-md-2 col-form-label">Descrição do Sistema</label>
                            <div class="col-md-10">
                                <input id="descricao_sistema" type="text" class="form-control" name="descricao_sistema" value="{{ old('descricao_sistema', $senha->descricao_sistema ?? '' )}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf_dono_senha" class="col-md-2 col-form-label">CPF do Dono da Senha</label>
                            <div class="col-md-4">
                                <input id="cpf_dono_senha" type="text" class="form-control" name="cpf_dono_senha" required value="{{ old('cpf_dono_senha', $senha->cpf_dono_senha ?? '' )}}">
                            </div>
                            <label for="situacao" class="col-md-2 col-form-label">Situação</label>
                            <div class="col-md-4">
                                <select id="situacao" name="situacao" class="form-control" required>
                                <option value="" >SELECIONE....</option>
                                <option value="AT" {{ old('situacao', $senha->situacao ?? '') === 'AT' ? 'selected' : '' }}>AT</option>
                                <option value="IN" {{ old('situacao', $senha->situacao ?? '') === 'IN' ? 'selected' : '' }}>IN</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nome_responsavel" class="col-md-2 col-form-label">Nome do Responsável</label>
                            <div class="col-md-10">
                                <input id="nome_responsavel" type="text" class="form-control" name="nome_responsavel" required value="{{ old('nome_responsavel', $senha->nome_responsavel ?? '' )}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="chave_acesso" class="col-md-2 col-form-label">Chave de Acesso</label>
                            <div class="col-md-10">
                                <input id="chave_acesso" type="text" class="form-control" name="chave_acesso" required value="{{ old('chave_acesso', $senha->chave_acesso ?? '' )}}">
                            </div>
                        </div>

                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    @if(isset($senha))
                                        Editar
                                    @else
                                        Cadastrar
                                    @endif
                                </button>
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
        });
    </script>
@endsection
