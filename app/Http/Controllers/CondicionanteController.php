<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Licencas;
use App\Models\Condicionantes;
use App\Models\User;
use Illuminate\Support\Carbon;
use App\Mail\PrazoCondicionanteEmail;
use Illuminate\Support\Facades\Auth;

class CondicionanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $licencas = Licencas::where('id','=', $id)->get();
        return view('cadastro-condicionantes', ['licencas'=> $licencas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = Auth::user();
        $id = Licencas::find($request->id_licenca);
        $licencas = Licencas::find($request->id_licenca);
        $condicionantes = new Condicionantes();
    
        $condicionantes->id_licencas = $request->input('id_licenca');
        $condicionantes->condicionante = $request->input('condicionante');
        $condicionantes->prazo_condicionante = $request->input('prazo_condicionante');
        $condicionantes->save();

        //Mail::to($user)->send(new PrazoCondicionanteEmail($user, $condicionantes));


         return redirect()->route('licencas-view', ['id' => $licencas->id])->with('msg','Criado com sucesso!');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'id_licenca' => 'required',
            'condicionante' => 'required',
            'prazo_condicionante' => 'required',
            
        
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
        $condicionantes = Condicionantes::where('id','=', $id)->get();
        return view('update-condicionantes', [
            'condicionantes'=> $condicionantes,
        
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $condicionantes = Condicionantes::find($id);
        $condicionantes->condicionante = $request->input('condicionante');
        $condicionantes->prazo_condicionante = $request->input('prazo_condicionante');
        $condicionantes->update();

        return redirect()->route('dashboard')->with('success', 'Condicionante editada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function validadecondi()
    {
        $condicionantes = Condicionantes::get();

        foreach ($condicionantes as $condicionante) {
            $prazo = $condicionante->prazo_condicionante;
            $user = Auth::user();

            $dataAtual = now();
            $dataPrazo = Carbon::parse($prazo);
            $diasRestantes = $dataAtual->diffInDays($dataPrazo);

            if ($diasRestantes <= 60) {
                Mail::to($user->email)->send(new PrazoCondicionanteEmail($user, $prazo));
            } elseif ($diasRestantes <= 30) {
                Mail::to($user->email)->send(new PrazoCondicionanteEmail($user, $prazo));
            } elseif ($diasRestantes <= 15) {
                Mail::to($user->email)->send(new PrazoCondicionanteEmail($user, $prazo));
            } elseif ($diasRestantes <= 2) {
                Mail::to($user->email)->send(new PrazoCondicionanteEmail($user, $prazo));
            }
        }
    }
}
