<?php

namespace App\Http\Controllers;

use App\Models\ContaPessoal;
use Illuminate\Http\Request;

class ContaPessoalController extends Controller
{
    //
    public function index(Request $request){

        $contas = ContaPessoal::all();


        return view('projeto-php.contas.index', compact('contas'));
        //dd("aquiiiii");
    }
    public function create(ContaPessoal $conta = null)
    {
        return view('projeto-php.contas.cadastro_contas', compact('conta'));
    }

    public function store(Request $request){

        //dd("grava dados");
        $request['saldo_devedor'] = str_replace(',', '.', $request['saldo_devedor']);

        ContaPessoal::create($request->all());

        return redirect()->route('conta_pessoal.index')->with('success', 'Conta cadastrada com sucesso!');
    }

    public function edit(){

        return view('projeto-php.contas.cadastro_contas', compact('conta'));
    }

    public function update(){
        dd("ATUALIZA DADOS");
    }
}
