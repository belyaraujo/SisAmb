<?php

namespace App\Http\Controllers;

use App\Models\Licencas;
use Illuminate\Http\Request;

class DownloadArquivoController extends Controller
{

    public function download($id)
    {


    // recupera o arquivo com base no id
    $arquivo = Licencas::find($id);

    // verifique se o arquivo foi encontrado
    if (!$arquivo) {
        abort(404);
    }

    // obter o caminho completo do arquivo
    $caminho_arquivo = storage_path("app/public/" . $arquivo->arquivo);

    // verifique se o arquivo existe
    if (!file_exists($caminho_arquivo)) {
        abort(404);
    }

    // baixar o arquivo
    return response()->download($caminho_arquivo, $arquivo->arquivo);
}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
