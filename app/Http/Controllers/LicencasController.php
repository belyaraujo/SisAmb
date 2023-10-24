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
use App\Models\Condicionantes;
use Carbon\Carbon;



class LicencasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $licencas = Licencas::paginate(5);
        
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
        $licencas->prazo_renovacao = $request->input('prazorenovacao');
        $licencas->validade = $request->input('validade');
        $licencas->data_vencimento = Carbon::parse($request->input('data_concessao'))->addYears($licencas->validade);
        $licencas->observacao = $request->input('observacao');
        $licencas->interessado = $request->input('interessado');
        if ($request->hasFile('arquivo')) {
            $file = $request->file('arquivo');
    
            // Verifique se o arquivo é válido e mova-o para o diretório de destino
            if ($file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $fileName = $this->generateFileName($file, $extension);
                $file->storeAs('public/arquivos/', $fileName); // Altere para o caminho de armazenamento desejado
    
                // Salve o nome do arquivo no banco de dados
                $licencas->arquivo = $fileName;
            } else {
                return redirect()->back()->with('error', 'O arquivo enviado não é válido.');
            }
        $licencas->save();

      
        }

        // $licencas->validade = $request->input('validade');
       
        // $licencas->processo = $request->input('processo');
        // $licencas->id_bacia = $request->input('id_bacia');
        // $licencas->latitude = $request->input('latitude');
        // $licencas->longitude = $request->input('longitude');
        
        return redirect()->route('dashboard')->with('msg','Criado com sucesso!');

    }

    public function generateFileName($file, $extension) {
        $timestamp = date("YmdHis");
        $originalName = $file->getClientOriginalName();

        if($extension == "png") {
            $fileName = "arquivo_".$timestamp.".".$extension;
        } elseif($extension == "zip") {
            $fileName = str_replace(".".$extension, "", $originalName)."_".$timestamp.".".$extension;
        } else {
            $fileName = $originalName;
        }

        return $fileName;
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_ra' => 'required',
            'id_situacao' => 'nullable',
            'id_empreendimento' => 'nullable',
            'id_tipo' => 'required',
            'id_vigencia' => 'nullable',
            'empreendimento' => 'required',
            'processo' => 'nullable',
            'doc_sei' => 'nullable|max:8|regex:/^[0-9]*$/',
            'numero' => 'required',
            'num_processo' => 'nullable|regex:^[0-9-\/]*$',
            'data_concessao' => 'required',
            'data_vencimento' => 'nullable',
            'observacao' => 'nullable',
            'interessado' => 'nullable',
            'validade' => 'nullable|regex:/\d+/|min:1',
            'arquivo' => 'required',
        ]);

        

        // Licencas::create($request->all());

        // return redirect()->route('dashboard')->with('msg','Criado com sucesso!');
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
        $licenca = Licencas::find($id);
        $condicionantes = Condicionantes::where('id_licencas', '=', $id)->paginate(5);
        return view('licencas', ['licencas'=> $licencas, 'condicionantes'=> $condicionantes]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $licencas = Licencas::where('id','=', $id)->get();
        $regiao = Regiao_administrativa::get();
        $bacia = Bacia_hidrografica::get();
        $situacao = Situacao::get();
        $tipo_empre = Tipo_empreendimento::get();
        $tipo = Tipo::get();
        $vigencia = Vigencia::get();

    
        return view('update-licencas', [
            'licencas'=> $licencas,
            'regiao' => $regiao, 
            'bacia' => $bacia,
            'situacao' => $situacao,
            'tipo_empre' => $tipo_empre,
            'tipo' => $tipo,
            'vigencia' => $vigencia,
        
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $licencas = Licencas::find($id);
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
        $licencas->prazo_renovacao = $request->input('prazorenovacao');
        $licencas->validade = $request->input('validade');
        $licencas->data_vencimento = Carbon::parse($request->input('data_concessao'))->addYears($licencas->validade);
        $licencas->observacao = $request->input('observacao');
        $licencas->interessado = $request->input('interessado');
        // $licencas->arquivo = $request->input('arquivo');
        // $licencas->update();
        if ($request->hasFile('arquivo')) {
            $file = $request->file('arquivo');
    
            // Verifique se o arquivo é válido e mova-o para o diretório de destino
            if ($file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $fileName = $this->generateFileName($file, $extension);
                $file->storeAs('public/arquivos/', $fileName); // Altere para o caminho de armazenamento desejado
    
                // Salve o nome do arquivo no banco de dados
                $licencas->arquivo = $fileName;
            } else {
                return redirect()->back()->with('error', 'O arquivo enviado não é válido.');
            }

        }
        $licencas->update();

        return redirect()->route('dashboard')->with('success', 'Editado com sucesso.');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}