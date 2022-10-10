<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PoesiasFormRequest;
use App\Http\Controllers\Controller;
use App\Models\Autor;
use App\Models\Edition;
use App\Models\Poesia;
use Illuminate\Http\Request;

class PoesiaController extends Controller
{
    public function index(Request $request)
    {
        $poesias = Poesia::query()->orderBy('titulo')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        return view('admin.poesias.index')
            ->with('poesias', $poesias) //(nome da variavel na view, valor da variavel)
            ->with('mensagemSucesso', $mensagemSucesso);

    }

    public function create()
    {
        $editions = Edition::all();
        return view('admin.poesias.create')
            ->with('editions',$editions);
    }

    public function store(PoesiasFormRequest $request)
    {
        $poesia = Poesia::create($request->all());

        return to_route('admin.poesias.index')
            ->with('mensagem.sucesso', "Poesia '{$poesia->titulo}' adicionada com sucesso");
    }

    public function show($id)
    {
        //
    }

    public function edit(Poesia $poesia)
    {
        return view('admin.poesias.edit')->with('poesia', $poesia);
    }

    public function update(PoesiasFormRequest $request, Poesia $poesia)
    {
        $poesia->fill($request->all());
        $poesia->save();

        return to_route('admin.poesias.index')
            ->with('mensagem.sucesso' , "Poesia '{$poesia->titulo}' atualizada com sucesso");
    }

    public function destroy(Poesia $poesia, Request $request)
    {
        $poesia->delete();
        $request->session()->flash('mensagem.sucesso', "Poesia '{$poesia->titulo}' Removida com sucesso");

        return to_route('admin.poesias.index');
    }
}
