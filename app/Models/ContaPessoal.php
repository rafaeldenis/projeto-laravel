<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContaPessoal extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'contas_pessoais';

    protected $primaryKey = 'codigo'; // Chave primária em minúsculas

    protected $fillable = [
        'identificador_unico',
        'descricao',
        'saldo_devedor',
        'saldo_pago',
        'qtde_parcelas',
        'qtde_parcelas_pagas',
        'valor_contratado',
        'nivel_prioridade',
        'data_vencimento',
        'tipo_conta',
        'status_conta',
        'notas',
    ];
}
