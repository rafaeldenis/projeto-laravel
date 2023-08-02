@extends('layouts.app')

@section('content')

@if(session('success'))
    <div class="alert alert-success"> {{ session('success') }} </div>
@endif
<i data-fa-icon="fas fa-trash-alt" class="float-right"></i>
<div class="table-responsive">
    <table class="table table-striped mt-0">
        <thead>
            <tr>
                <th>Código</th>
                <th>CPF</th>
                <th>NOME</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
                @forelse ($clientes as $cliente)
                <tr>
                    <td data-th="Código">{{ $cliente->codigo }}</td>
                    <td data-th="nome">{{ $cliente->cpf}}</td>
                    <td data-th="cpf">{{ $cliente->nome }} {{ $cliente->sobrenome }} </td>


                    <td data-th="Ações">
                        <div class="d-flex">


                        <a href="{{ route('clientes.cadastro', ['cliente' => $cliente->codigo ]) }}"
                            class="btn edit-modal"
                            role="button"
                            title="Editar"
                            data-toggle="tooltip"
                            data-placement="top">
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
