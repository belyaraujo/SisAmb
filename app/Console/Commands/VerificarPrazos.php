<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Condicionantes;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\PrazoCondicionanteEmail;

class VerificarPrazos extends Command
{
    protected $signature = 'prazos:verificar';

    protected $description = 'Verifica os prazos das condições e envia e-mails quando necessário';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
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
