<?php
namespace App\Http\Controllers;

use App\Models\MinhaSenha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\Session;
use NumberFormatter;

class ExcelExportController extends Controller implements WithEvents
{
    public function export()
    {
        $senhas = MinhaSenha::all();

        $fileName = 'senhas_' . now()->format('YmdHis') . '.xlsx';

        Session::flash('success', 'Arquivo Excel exportado com sucesso!');

        return Excel::download(new SenhasExport($senhas), $fileName);
    }

    public function registerEvents(): array
    {
        return [
            BeforeExport::class => function(BeforeExport $event) {
                $event->writer->getProperties()->setTitle('Senhas Exportadas');
            }
        ];
    }
}

class SenhasExport implements FromArray
{
    protected $senhas;

    public function __construct($senhas)
    {
        $this->senhas = $senhas;
    }

    public function array(): array
    {
        $data = [
            [
                'Código',
                'Descrição do Sistema',
                'CPF Dono Senha',
                'Situação',
                'Nome Responsável',
                'Chave de Acesso',
            ],
        ];

        foreach ($this->senhas as $senha) {
            $data[] = [
                $senha->codigo,
                $senha->descricao_sistema,
                $senha->cpf_dono_senha,
                $senha->situacao,
                $senha->nome_responsavel,
                $senha->chave_acesso,
            ];
        }

        return $data;
    }
}
