<?php

namespace App\Http\Controllers;

use App\Models\Poesia;
use Illuminate\Http\Request;

class PoesiaController extends Controller
{
    public function index(Request $request)
    {
        $poesias = [
            'Flor do Campo',
            'Howl',
            'In a Dream of Chivalry',
        ];
        return view('poesias.index')->with('poesias', $poesias);
    }

    public function create()
    {
        return view('poesias.create');
    }

    public function store(Request $request)
    {
        $nomePoesia = $request->input('nome');
        $poesia = new Poesia();
        $poesia->nome = $nomePoesia;
        $poesia->save();

        return redirect("/poesias");

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
