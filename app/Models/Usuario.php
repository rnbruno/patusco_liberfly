<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';

    // Se a tabela não usa as colunas timestamps (created_at e updated_at)
    public $timestamps = false;

    protected $fillable=['usuario_id','usuario','senha'];

    protected $primaryKey = 'usuario_id';

    protected $attributes = [
        'usuario_id' => 'usuario_id',
        'usuario' => 'usuario',
        'pessoa_id' => 'pessoa_id',
        'senha' => 'senha',
        'inativo' => 'inativo',
    ];
}
