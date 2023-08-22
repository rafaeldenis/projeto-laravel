@extends('layouts.app')

@section('content')

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@include('projeto-php.minhas-senhas._filtro')

<div class="table-responsive">
    <table class="table table-striped mt-0">
        <thead>
            <tr>
                <th>Código</th>
                <th>Descrição do Sistema</th>
                <th>CPF Dono Senha</th>
                <th>Situação</th>
                <th>Nome Responsável</th>
                <th>Chave de Acesso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($senhas as $senha)
                <tr>
                    <td>{{ $senha->codigo }}</td>
                    <td>{{ $senha->descricao_sistema }}</td>
                    <td>{{ $senha->cpf_dono_senha }}</td>
                    <td>{{ $senha->situacao }}</td>
                    <td>{{ $senha->nome_responsavel }}</td>
                    <td>{{ base64_encode($senha->chave_acesso) }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('minhas_senhas.edit', ['senha' => $senha->codigo]) }}"
                                class="btn edit-modal"
                                role="button"
                                title="Editar"
                                data-toggle="tooltip"
                                data-placement="top">
                                <i class="fas fa-edit"></i>
                            </a>


                            <button class="btn copy-chave-acesso" data-chave="{{ $senha->chave_acesso }}" data-toggle="tooltip" data-placement="top" title="Copiar Chave">
                                <i class="fas fa-copy"></i>
                            </button>


                            <form method="POST" action="{{ route('minhas_senhas.destroy', ['senha' => $senha->codigo]) }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn deleteTipoParceria" data-toggle="tooltip" data-placement="top" title="Excluir">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">
                        <div class="alert alert-warning">
                            Nenhum registro encontrado.
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <br>
    <a href="{{ route('export') }}" class="btn btn-primary">Exportar para Excel</a><br>
</div><br>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.copy-chave-acesso').on('click', function() {
            const chave = $(this).data('chave');
            copyToClipboard(chave);
            alert('Chave de acesso copiada para a área de transferência');
            });

            function copyToClipboard(text) {
                const $tempInput = $('<input>');
                $('body').append($tempInput);
                $tempInput.val(text).select();
                document.execCommand('copy');
                $tempInput.remove();
            }

        });
    </script>
@endsection

