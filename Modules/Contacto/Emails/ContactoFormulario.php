<?php

namespace Modules\Contacto\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class ContactoFormulario extends Mailable
{
    use Queueable, SerializesModels;

    protected $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = $this->message;

        return $this->from(env('MAIL_FROM_ADDRESS'))
            ->subject($message['encabezado']['asunto'])
            ->markdown('contacto::mail.contacto')
            ->with(compact('message'));
    }
}
