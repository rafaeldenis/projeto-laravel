@extends('layouts.app')

@section('content')

@if(session('success'))
    <div class="alert alert-success"> {{ session('success') }} </div>
@endif

@php

//dd($contas);
@endphp

<div class="alert alert-secondary" role="alert">
  <h4 class="alert-heading">Contas Prioritárias Pessoais!</h4>
  <p>Sistema para listar minhas contas pessoais e prioritárias  e para controle orçamentário do mês</p>
  <hr>
  <p class="mb-0">As contas estão ordenadas por nivel de prioridade</p>
</div>
<div class="table-responsive">
    <table class="table table-striped mt-0">
        <thead>
            <tr>
                <th>Código</th>
                <th>Descrição</th>
                <th>Saldo Devedor</th>
                <th>Saldo Pago</th>
                <th>Quantidade de Parcelas</th>
                <th>Parcelas Pagas</th>
                <th>Valor Contratado</th>
                <th>Nível de Prioridade</th>
                <th>Data de Vencimento</th>
                <th>Tipo de Conta</th>
                <th>Status da Conta</th>

                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @php
            $totalSaldoDevedor = 0; // Inicializa a variável para armazenar o total do saldo devedor
         @endphp
            @forelse($contas as $conta)
                <tr>
                    <td data-th="codigo">{{ $conta->codigo }}</td>
                    <td data-th="Descrição">{{ $conta->descricao }}</td>
                    <td data-th="Saldo Devedor">{{ $conta->saldo_devedor }}</td>
                    <td data-th="Saldo Pago">{{ $conta->saldo_pago }}</td>
                    <td data-th="Quantidade de Parcelas">{{ $conta->qtde_parcelas }}</td>
                    <td data-th="Parcelas Pagas">{{ $conta->qtde_parcelas_pagas }}</td>
                    <td data-th="Valor Contratado">{{ $conta->valor_contratado }}</td>
                    <td data-th="Nível de Prioridade">{{ $conta->nivel_prioridade }}</td>
                    <td data-th="Data de Vencimento">{{ $conta->data_vencimento }}</td>
                    <td data-th="Tipo de Conta">{{ $conta->tipo_conta }}</td>
                    <td data-th="Status da Conta">{{ $conta->status_conta }}</td>


                    <td data-th="Ações">
                        <div class="d-flex">
                            <!-- Adicione links de edição, exclusão, etc. aqui -->
                        </div>
                    </td>
                    @php
                        $totalSaldoDevedor += $conta->saldo_devedor; // Adiciona o valor do saldo devedor ao total
                    @endphp
                </tr>
            @empty
                <tr>
                    <td data-th="Mensagem" colspan='14'>
                        <div class="alert alert-warning">
                            Nenhum registro encontrado.
                        </div>
                    </td>
                </tr>
            @endforelse

                <!-- Linha com o total do saldo devedor -->

             <tr>
                <td colspan="2"></td>
                <td style="background-color: #ff0000; color: white; white-space: nowrap; vertical-align: middle;"><strong>Total:</strong></td>
                <td colspan="7"></td>
                <td style="background-color: #ff0000; color: white; white-space: nowrap; vertical-align: middle;"><strong>R$ {{ number_format($totalSaldoDevedor, 2, ',', '.') }}</strong></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">SOMA DE TODO O SALDO DEVEDOR LOGO ABAIXO!</h4>

        <hr>
        <p class="mb-0">TOTAL : R$ {{ number_format($totalSaldoDevedor, 2, ',', '.') }} </p>
    </div>
</div>

@endsection
