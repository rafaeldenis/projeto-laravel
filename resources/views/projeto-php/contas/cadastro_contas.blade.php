@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastro de Contas Pessoais</div>

                <div class="card-body">
                    <form method="POST" action="{{ isset($conta) ? route('conta_pessoal.update', $conta->codigo) : route('conta_pessoal.store') }}">
                        @csrf
                        @if(isset($conta))
                            @method('PUT')
                        @endif

                        <div class="form-group row">
                            <label for="identificador_unico" class="col-md-2 col-form-label">Identificador Único</label>
                            <div class="col-md-4">
                                <input id="identificador_unico" type="text" class="form-control" name="identificador_unico" value="{{ old('identificador_unico', $conta->identificador_unico ?? '') }}">
                            </div>
                            <label for="descricao" class="col-md-2 col-form-label">Descrição</label>
                            <div class="col-md-4">
                                <input id="descricao" type="text" class="form-control" name="descricao" value="{{ old('descricao', $conta->descricao ?? '') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="saldo_devedor" class="col-md-2 col-form-label">Saldo Devedor</label>
                            <div class="col-md-4">
                                <input id="saldo_devedor" type="text" class="form-control" name="saldo_devedor" value="{{ old('saldo_devedor', $conta->saldo_devedor ?? '') }}">
                            </div>
                            <label for="saldo_pago" class="col-md-2 col-form-label">Saldo Pago</label>
                            <div class="col-md-4">
                                <input id="saldo_pago" type="text" class="form-control" name="saldo_pago" value="{{ old('saldo_pago', $conta->saldo_pago ?? '') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="qtde_parcelas" class="col-md-2 col-form-label">Quantidade de Parcelas</label>
                            <div class="col-md-4">
                                <input id="qtde_parcelas" type="number" class="form-control" name="qtde_parcelas" value="{{ old('qtde_parcelas', $conta->qtde_parcelas ?? '') }}">
                            </div>
                            <label for="qtde_parcelas_pagas" class="col-md-2 col-form-label">Parcelas Pagas</label>
                            <div class="col-md-4">
                                <input id="qtde_parcelas_pagas" type="number" class="form-control" name="qtde_parcelas_pagas" value="{{ old('qtde_parcelas_pagas', $conta->qtde_parcelas_pagas ?? '') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="valor_contratado" class="col-md-2 col-form-label">Valor Contratado</label>
                            <div class="col-md-4">
                                <input id="valor_contratado" type="text" class="form-control" name="valor_contratado" value="{{ old('valor_contratado', $conta->valor_contratado ?? '') }}">
                            </div>
                            <label for="nivel_prioridade" class="col-md-2 col-form-label">Nível de Prioridade</label>
                            <div class="col-md-4">
                                <input id="nivel_prioridade" type="number" class="form-control" name="nivel_prioridade" value="{{ old('nivel_prioridade', $conta->nivel_prioridade ?? '') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data_vencimento" class="col-md-2 col-form-label">Data de Vencimento</label>
                            <div class="col-md-4">
                                <input id="data_vencimento" type="date" class="form-control" name="data_vencimento" value="{{ old('data_vencimento', $conta->data_vencimento ?? '') }}">
                            </div>
                            <label for="tipo_conta" class="col-md-2 col-form-label">Tipo de Conta</label>
                            <div class="col-md-4">
                                <input id="tipo_conta" type="text" class="form-control" name="tipo_conta" value="{{ old('tipo_conta', $conta->tipo_conta ?? '') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status_conta" class="col-md-2 col-form-label">Status da Conta</label>
                            <div class="col-md-4">
                                <input id="status_conta" type="text" class="form-control" name="status_conta" value="{{ old('status_conta', $conta->status_conta ?? '') }}">
                            </div>
                            <label for="notas" class="col-md-2 col-form-label">Notas</label>
                            <div class="col-md-4">
                                <textarea id="notas" class="form-control" name="notas">{{ old('notas', $conta->notas ?? '') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    @if(isset($conta))
                                        EDITAR
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
