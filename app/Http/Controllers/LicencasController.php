<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regiao_administrativa;
use App\Models\Bacia_hidrografica;
use App\Models\Situacao;
use App\Models\Tipo_empreendimento;
use App\Models\Tipo;
use App\Models\Licencas;
use App\Models\Vigencia;


class LicencasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $licencas = Licencas::get();
        return view('dashboard', ['licencas' => $licencas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $licencas = new Licencas();
        $licencas->id_ra = $request->input('id_ra');
        $licencas->id_situacao = $request->input('id_situacao');
        $licencas->id_empreendimento = $request->input('id_empreendimento');
        $licencas->id_tipo = $request->input('id_tipo');
        $licencas->id_vigencia = $request->input('id_vigencia');
        $licencas->empreendimento = $request->input('empreendimento');
        $licencas->num_processo = $request->input('num_processo');
        $licencas->doc_sei = $request->input('doc_sei');
        $licencas->numero = $request->input('numero');
        $licencas->data_concessao = $request->input('dataconcessao');
        $licencas->validade = $request->input('validade');
        $licencas->observacao = $request->input('observacao');
        $licencas->interessado = $request->input('interessado');
        // $licencas->validade = $request->input('validade');
       
        // $licencas->processo = $request->input('processo');
        // $licencas->id_bacia = $request->input('id_bacia');
        // $licencas->latitude = $request->input('latitude');
        // $licencas->longitude = $request->input('longitude');
        $licencas->save();
        return redirect()->route('dashboard')->with('msg','Criado com sucesso!');

    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_ra' => 'required',
            'id_situacao' => 'required',
            'id_empreendimento' => 'required',
            'id_tipo' => 'required',
            'id_vigencia' => 'required',
            'empreendimento' => 'required',
            'processo' => 'required',
            'doc_sei' => 'required',
            'num_processo' => 'required',
            'data_concessao' => 'required',
            'data_vencimento' => 'required',
            'observacao' => 'required',
            'interessado' => 'required',
            
            // 'validade' => 'required',
            // 'id_bacia' => 'required',
            // 'processo' => 'required',
            // 'latitude' => 'required',
            // 'longitude' => 'required',
           
        ]);

        Licencas::create($request->all());

        return redirect()->route('dashboard')->with('msg','Criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $regiao = Regiao_administrativa::get();
        $bacia = Bacia_hidrografica::get();
        $situacao = Situacao::get();
        $tipo_empre = Tipo_empreendimento::get();
        $tipo = Tipo::get();
        $vigencia = Vigencia::get();
       
        return view('cadastro-licencas', [
            'regiao' => $regiao, 
            'bacia' => $bacia,
            'situacao' => $situacao,
            'tipo_empre' => $tipo_empre,
            'tipo' => $tipo,
            'vigencia' => $vigencia,
        ]);
    }

    public function licencas($id){
        $licencas = Licencas::where('id','=', $id)->get();
        //$licencas = Licencas::where('id', $id)->get();
        
        //return view('licencas')->with('licencas', $licencas);
        return view('licencas', ['licencas'=> $licencas]);
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
