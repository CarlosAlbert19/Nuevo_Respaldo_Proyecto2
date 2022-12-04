<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Paciente;

class FacturaConsulta extends Mailable
{
    use Queueable, SerializesModels;
    public $paciente;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Paciente $paciente)
    {
        $this->paciente = $paciente;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('correos/factura-consulta');
    }
}
