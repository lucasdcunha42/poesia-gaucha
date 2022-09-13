<?php

namespace App\Http\Controllers;

use App\Models\Poesia;
use Illuminate\Http\Request;

class PoesiaController extends Controller
{
    public function index(Request $request)
    {
        $poesias = Poesia::query()->orderBy('nome')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        return view('poesias.index')
            ->with('poesias', $poesias)
            ->with('mensagemSucesso', $mensagemSucesso);

    }

    public function create()
    {
        return view('poesias.create');
    }

    public function store(Request $request)
    {
        $poesia = Poesia::create($request->all());
        $request->session()->flash('mensagem.sucesso', "Poesia '{$poesia->nome}' adicionada com sucesso");
        return to_route('poesias.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Poesia $poesia, Request $request)
    {
        $poesia->delete();
        $request->session()->flash('mensagem.sucesso', "Poesia '{$poesia->nome}' Removida com sucesso");

        return to_route('poesias.index');
    }
}
