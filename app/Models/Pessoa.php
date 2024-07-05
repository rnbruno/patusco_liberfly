<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $table = 'pessoa';

    // Se a tabela não usa as colunas timestamps (created_at e updated_at)
    public $timestamps = false;

    protected $fillable=['pessoa_id','nome'];

    protected $primaryKey = 'pessoa_id';

    protected $attributes = [
        'pessoa_id' => 'pessoa_id',
        'tipo_pessoa_id' => 'tipo_pessoa_id',
        'nome' => 'nome',
        'apelido' => 'apelido',
        'email' => 'email',
        'cpf' => 'cpf',
        'rg' => 'rg',
        'inativo' => 'inativo',
    ];
}
