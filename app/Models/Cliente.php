<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'clientes';

    protected $fillable = [
        'nome',
        'sobrenome',
        'cpf',
        'cep',
        'logradouro',
        'cod_cidade',
        'descr_cidade',
        'ddd_cel',
        'tel_cel',
        'e_mail',
    ];

}
