<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Licencas;
use App\Models\Condicionantes;

class CondicionanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cadastro-condicionantes');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $condicionantes = new Condicionantes();
        $condicionantes->id_licenca = $request->input('id_licenca');
        $condicionantes->condicionante = $request->input('condicionante');
        $condicionantes->prazo_condionante = $request->input('prazo_condionante');
        $condicionantes->save();

        return redirect()->route('licencas-view')->with('msg','Criado com sucesso!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'id_licenca' => 'required',
            'condicionante' => 'required',
            'prazo_condionante' => 'required',
            
        
        ]);

        Condicionantes::create($request->all());

        return redirect()->route('licencas-view')->with('msg','Criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
