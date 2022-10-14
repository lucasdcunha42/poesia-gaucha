<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Edition\UpdateRequest;
use App\Http\Requests\StoreRequest;
use App\Models\Edition;
use Illuminate\Foundation\Http\FormRequest;
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

    public function store(StoreRequest $request)
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
     * @param  Editions  $edition
     */
    public function edit(Edition $edition)
    {
        return view('admin.editions.edit')->with('edition', $edition);

    }

    /**
     * Update the specified resource in storage.
     *
     */

    public function update(UpdateRequest $request, Edition $edition)
    {
        $edition->fill($request->all());
        $edition->save();

        return to_route('admin.editions.index')
            ->with('mensagem.sucesso' , "'{$edition->numero_edicao}'º edição atualizada com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     * @param  Edition  $edition
     */
    public function destroy(Request $request, Edition $edition)
    {
        $edition->delete();
        $request->session()
        ->flash('mensagem.sucesso', "'{$edition->numero_edicao}'º edição removida com sucesso");

        return to_route('admin.editions.index');
    }
}
