<form method="GET" action="{{ route('minhas_senhas.index') }}">
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="descricao_sistema">Descrição do Sistema</label>
            <input type="text" class="form-control" id="descricao_sistema" name="descricao_sistema" value="{{ request('descricao_sistema') }}">
        </div>
        <div class="form-group col-md-3">
            <label for="cpf_dono_senha">CPF Dono Senha</label>
            <input type="text" class="form-control" id="cpf_dono_senha" name="cpf_dono_senha" value="{{ request('cpf_dono_senha') }}">
        </div>
        <div class="form-group col-md-3">
            <label for="situacao">Situação</label>
            <select class="form-control" id="situacao" name="situacao">
            <option value="AT" {{ request('situacao') === 'AT' ? 'selected' : '' }}>AT</option>
                <option value="IN" {{ request('situacao') === 'IN' ? 'selected' : '' }}>IN</option>

            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="nome_responsavel">Nome Responsável</label>
            <input type="text" class="form-control" id="nome_responsavel" name="nome_responsavel" value="{{ request('nome_responsavel') }}">
        </div>
        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </div>
    </div>
</form>
