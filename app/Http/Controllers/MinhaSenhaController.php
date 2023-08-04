<?php

namespace App\Http\Controllers;

use App\Models\MinhaSenha;
use Illuminate\Http\Request;

class MinhaSenhaController extends Controller
{
    //
    public function index(Request $request)
    {

        $query = MinhaSenha::query();
        if ($request->has('descricao_sistema')) {
            $query->where('descricao_sistema', 'LIKE', '%' . $request->input('descricao_sistema') . '%');
        }

        if ($request->has('cpf_dono_senha')) {
            $query->where('cpf_dono_senha', 'LIKE', '%' . $request->input('cpf_dono_senha') . '%');
        }

        if ($request->has('situacao')) {
            $query->where('situacao', $request->input('situacao'));
        }

        if ($request->has('nome_responsavel')) {
            $query->where('nome_responsavel', 'LIKE', '%' . $request->input('nome_responsavel') . '%');
        }

        // Order by responsável
        $query->orderBy('nome_responsavel');

        // Get the results
        $senhas = $query->get();


        //dd($senhas);
        return view('projeto-php.minhas-senhas..index', compact('senhas'));
    }

    public function create(MinhaSenha $senha = null)
    {
        return view('projeto-php.minhas-senhas.cadastro_minhas_senhas', compact('senha'));
    }

    public function store(Request $request)
    {
        // Valide os dados do formulário conforme necessário

        MinhaSenha::create($request->all());

        return redirect()->route('minhas_senhas.index')->with('success', 'Senha cadastrada com sucesso!');
    }

    public function edit(MinhaSenha $senha)
    {
        return view('minhas_senhas.form', compact('senha'));
    }

    public function update(Request $request, MinhaSenha $senha)
    {
        // Valide os dados do formulário conforme necessário

        $senha->update($request->all());

        return redirect()->route('minhas_senhas.index')->with('success', 'Senha atualizada com sucesso!');
    }

    public function destroy(MinhaSenha $senha)
    {
        $senha->delete();
        return redirect()->route('minhas_senhas.index')->with('success', 'Senha excluída com sucesso!');
    }
}
