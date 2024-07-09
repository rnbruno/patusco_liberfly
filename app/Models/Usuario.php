<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public static function getUsuarioPessoa()
    {
        return DB::table('usuario')
            ->join('pessoa', 'usuario.pessoa_id', '=', 'pessoa.pessoa_id')
            ->select(
                'pessoa.nome as nome', 
                'usuario.*',
                DB::raw("CONCAT(pessoa.telefone_1, ' ', pessoa.telefone_2) as telefone"),
                'pessoa.pessoa_id as pessoa_id',
                'pessoa.inativo as pessoa_inativo'
            )
            ->get();
    }
}
