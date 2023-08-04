<?php
namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

use App\Models\MinhaSenha;
use Illuminate\Http\Request;


class MinhaSenhaExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection(Request $request)
    {
        // Get the query
        $query = MinhaSenha::query();

        // Apply filters
        if ($request->has('descricao_sistema')) {
            $query->where('descricao_sistema', 'LIKE', '%' . $request->input('descricao_sistema') . '%');
        }

        if ($request->has('cpf_dono_senha')) {
            $query->where('cpf_dono_senha', '=', $request->input('cpf_dono_senha'));
        }

        if ($request->has('situacao')) {
            $query->where('situacao', '=', $request->input('situacao'));
        }

        if ($request->has('nome_responsavel')) {
            $query->where('nome_responsavel', 'LIKE', '%' . $request->input('nome_responsavel') . '%');
        }

        // Order by responsável
        $query->orderBy('nome_responsavel');

        // Get the results
        return $query->get();
    }

    /**
     * @return array
     */
    public function headings()
    {
        return [
            'Código',
            'Descrição do Sistema',
            'CPF Dono Senha',
            'Situação',
            'Nome Responsável',
            'Chave de Acesso',
        ];
    }
}
