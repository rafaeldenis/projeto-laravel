@extends('layouts.app')

@section('content')
<div class="table-responsive">
    <table class="table table-striped tabela-unifesp mt-0">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>RG</th>
                <th>CPF</th>
                <th>Situação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
                @forelse ($clientes as $cliente)
                <tr>
                    <td data-th="Código">{{ $cliente['codigo'] }}</td>
                    <td data-th="nome">{{ $cliente['nome'] }}</td>
                    <td data-th="rg">{{ $cliente['rg'] }}</td>
                    <td data-th="cpf">{{ $cliente['cpf'] }}</td>
                    <td data-th="situacao">{{ $cliente['situacao'] }}</td>
                    <td data-th="Internacional">
                        @if ( $cliente['situacao']  == 'AT')
                            <span class="badge badge-pill badge-primary">ATIVO</span>
                        @else
                            <span class="badge badge-pill badge-secondary">INATIVO</span>
                        @endif
                    </td>

                    <td data-th="Ações">
                        <div class="d-flex">

                                <a href="javascript:void(0)"
                                    class="btn edit-modal"
                                    role="button"
                                    title="Editar"
                                    data-toggle="tooltip"
                                    data-placement="top"
                                    data-id=""
                                    data-urlapishow=""
                                >
                                    <i class="fas fa-edit"></i>
                                </a>




                                    <form
                                        method="POST"
                                        action=""
                                        id=""
                                        >

                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}

                                        <a
                                        class="btn deleteTipoParceria"
                                        href="javascript:void(0)"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        title="Excluir"
                                        data-id=""
                                        data-nome=""
                                        data-status=""
                                        >
                                            <i class="fas fa-trash-alt"></i>
                                        </a>



                        </div>
                    </td>
                </tr>

                @empty
                    <tr>
                        <td data-th="Mensagem" colspan='7'>
                            <div class="alert alert-warning">
                                Nenhum registro encontrado.
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>

    </table>
</div>
@endsection
