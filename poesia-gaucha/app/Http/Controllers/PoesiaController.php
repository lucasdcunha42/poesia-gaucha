<?php

namespace App\Http\Controllers;

use App\Http\Requests\PoesiasFormRequest;
use App\Models\Autor;
use App\Models\Poesia;
use Illuminate\Http\Request;

class PoesiaController extends Controller
{
    public function index(Request $request)
    {

        $poesias = Poesia::query()->orderBy('nome')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        return view('poesias.index')
            ->with('poesias', $poesias) //(nome da variavel na view, valor da variavel)
            ->with('mensagemSucesso', $mensagemSucesso);

    }

    public function create()
    {
        return view('poesias.create');
    }

    public function store(PoesiasFormRequest $request)
    {

        $poesia = Poesia::create($request->all());

        /**
         $autor = $poesia
            ->autors()
            ->create(['nome'=> 'autor']);

        $edition = $poesia
            ->edition()
            ->create([
                'numero_edicao' => 'edition',
            ]);
        **/

        return to_route('poesias.index')
            ->with('mensagem.sucesso', "Poesia '{$poesia->nome}' adicionada com sucesso");
    }

    public function show($id)
    {
        //
    }

    public function edit(Poesia $poesia)
    {
        return view('poesias.edit')->with('poesia', $poesia);
    }

    public function update(PoesiasFormRequest $request, Poesia $poesia)
    {
        $poesia->fill($request->all());
        $poesia->save();

        return to_route('poesias.index')
            ->with('mensagem.sucesso' , "Poesia '{$poesia->nome}' atualizada com sucesso");
    }

    public function destroy(Poesia $poesia, Request $request)
    {
        $poesia->delete();
        $request->session()->flash('mensagem.sucesso', "Poesia '{$poesia->nome}' Removida com sucesso");

        return to_route('poesias.index');
    }
}
