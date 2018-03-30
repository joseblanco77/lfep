<?php

namespace Modules\Cajaverde\Mail\Test;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $time;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($time)
    {
        $this->time = $time;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $time = $this->time;

        return $this->subject("Prueba de correo - {$time}")
            ->markdown('cajaverde::mail.test.test')
            ->with(compact('time'));
    }
}
