<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //

    public function index(){

        //echo "OOOOOlieee";

        // Crie um array com 5 registros de clientes
    $clientes = [
        [
            'codigo' => 1,
            'nome' => 'João da Silva',
            'cpf' => '111.111.111-11',
            'rg' => '123456789',
            'situacao' => 'AT'
        ],
        [
            'codigo' => 2,
            'nome' => 'Maria Souza',
            'cpf' => '222.222.222-22',
            'rg' => '987654321',
            'situacao' => 'AT'
        ],
        [
            'codigo' => 3,
            'nome' => 'Rafael Souza',
            'cpf' => '222.222.222-22',
            'rg' => '987654321',
            'situacao' => 'IN'
        ]
    // Adicione mais 3 registros de clientes aqui...
        ];
       return view(
            "projeto-php.clientes.listar_cliente",
            compact(['clientes'


                    ])
        );

    }
}
