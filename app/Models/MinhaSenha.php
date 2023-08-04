<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinhaSenha extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'minhas_senhas';
    protected $primaryKey = 'codigo';

    protected $fillable = [
        'descricao_sistema',
        'cpf_dono_senha',
        'situacao',
        'nome_responsavel',
        'chave_acesso',
    ];
}
