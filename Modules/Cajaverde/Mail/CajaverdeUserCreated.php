<?php

namespace Modules\Cajaverde\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CajaverdeUserCreated extends Mailable
{
    use Queueable, SerializesModels;

    protected $loggeduser;

    protected $usuario;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($loggeduser, $usuario)
    {
        $this->loggeduser = $loggeduser;
        $this->usuario    = $usuario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $loggeduser = $this->loggeduser;
        $usuario    = $this->usuario;
        
        return $this->subject('Usuario de cajaverde creado - '.getFechaLatina(null, 'd-m-Y H:i:s'))
            ->markdown('cajaverde::mail.usuarios.created')
            ->with(compact('loggeduser', 'usuario'));
    }
}
