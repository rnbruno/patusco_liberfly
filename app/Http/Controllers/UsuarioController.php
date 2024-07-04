<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all()->map(function($usuarios) {
            return [
                'usuario_id' => $usuarios->usuario_id,
                'pessoa_id' => $usuarios->pessoa_id,
                'usuario' => $usuarios->usuario,
                'inativo' => $usuarios->inativo,
            ];
        });
        
        // dd($usuarios);
        
        return Inertia::render('Usuario/Usuarios', [
            'usuarios' => $usuarios
        ]);
        // return Inertia::render('Usuario/Usuarios',[
        //     'usuarios'=>Usuario::all()->map(function($usuarios){
        //         return [
        //             'usuario_id'=>$usuarios->usuario_id,
        //             'nome'=>$usuarios->nome,
        //         ];
        //     })
        // ]);
    }

    public function usuario_pessoa()
    {
        $results = DB::table('usuario')
            ->join('pessoa','usuario.pessoa_id','=','pessoa.pessoa_id')
            ->select('pessoa.nome as nome', 'usuario.*' , DB::raw("CONCAT(pessoa.telefone_1, '  ', pessoa.telefone_2) as telefone"),'pessoa.pessoa_id as pessoa_id','pessoa.inativo as pessoa_inativo')
            ->get();
        
        // dd($results);
        
        return Inertia::render('Usuario/Usuarios', [
            'usuarios' => $results
        ]); 
        // return Inertia::render('Usuario/Usuarios',[
        //     'usuarios'=>Usuario::all()->map(function($usuarios){
        //         return [
        //             'usuario_id'=>$usuarios->usuario_id,
        //             'nome'=>$usuarios->nome,
        //         ];
        //     })
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
