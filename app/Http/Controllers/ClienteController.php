<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //

    public function index(){

        //echo "OOOOOlieee";

        // Crie um array com 5 registros de clientes]

        $clientes = Cliente::all();
        return view(
            "projeto-php.clientes.listar_cliente",
            compact(['clientes'


                    ])
        );

    /*$clientes = [
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
        );*/

    }

    public function store(Request $request){

        //dd($request->all());

        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->sobrenome = $request->input('sobrenome');


        $cliente->cpf = $request->input('cpf');
        $cliente->cep = $request->input('cep');
        $cliente->logradouro = $request->input('logradouro');
        $cliente->cod_cidade = $request->input('cod_cidade');
        $cliente->descr_cidade = $request->input('descr_cidade');
        $cliente->ddd_cel = $request->input('ddd_cel');
        $cliente->tel_cel = $request->input('tel_cel');
        $cliente->e_mail = $request->input('e_mail');

        // Salva o novo cliente no banco de dados
        $cliente->save();

    // Redireciona para alguma rota ou página de sucesso
    return redirect()->route('cliente.index')->with('success', 'Cliente cadastrado com sucesso!');
    }
    public function edit(Cliente $cliente)
    {
        return view('projeto-php.clientes.editar_cliente', compact('cliente'));
    }
    public function cadastro(Cliente $cliente = null)
    {
        //dd("aquiiiii");
        //dd($cliente);
        return view('projeto-php.clientes.cadastro_cliente', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente = null){

       //dd("atualizar dados do cliente");
        $cliente->update($request->all());
        return redirect()->route('cliente.index')->with('success', 'Cliente atualizado com sucesso!');
    }
}
