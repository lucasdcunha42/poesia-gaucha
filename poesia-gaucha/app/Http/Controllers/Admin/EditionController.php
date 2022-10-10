<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditionsFormRequest;
use App\Models\Edition;
use Illuminate\Http\Request;

class EditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $editions = Edition::query()->orderBy('numero_edicao')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');

        return view('admin.editions.index')
            ->with('editions', $editions) //(nome da variavel na view, valor da variavel)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.editions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */

    public function store(EditionsFormRequest $request)
    {
        $edition = Edition::create($request->all());

        return to_route('admin.editions.index')
        ->with('mensagem.sucesso', "'{$edition->numero_edicao}'º Edição adicionada com sucesso");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  EditionsFormRequest  $request
     * @param  Editions  $edition
     */
    public function edit(EditionsFormRequest $request, Edition $edition)
    {
        $edition->fill($request->all());
        $edition->save();

        return to_route('admin.editions.index')
        ->with('mensagem.sucesso', "'{$edition->titulo}'º Edição atualizada com sucesso");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
