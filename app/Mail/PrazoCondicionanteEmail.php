<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PrazoCondicionanteEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $prazo;
    public $licencas;


    public function __construct($user, $prazo, $licencas)
    {
        $this->user = $user;
        $this->prazo = $prazo;
        $this->licencas = $licencas;
    
    }

    public function build()
    {
        return $this->view('prazo-proximo');
    }
}
