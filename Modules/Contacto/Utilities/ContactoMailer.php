<?php

namespace Modules\Contacto\Utilities;

use Illuminate\Support\Facades\Mail;
use Modules\Contacto\Emails\ContactoFormulario;

class ContactoMailer
{
    protected static $instance = false;

    protected $mail;

    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
        $this->mail = Mail::to('');
    }

    public static function sendMessage(Array $message)
    {
        if (!self::$instance) {
            self::$instance = new ContactoMailer($message);
        }

        self::$instance->proccess();
    }

    public function proccess() 
    {
        try {
            return $this->addRecipients('to')
                 ->addRecipients('cc')
                 ->addRecipients('bcc')
                 ->sendFormulario();
        } catch(\Exception $exception) {
            \Log::info(
                "Fallo al enviar correo de formulario contacto.", 
                [
                    'file'    => $exception->getFile() . PHP_EOL,
                    'line'    => $exception->getline() . PHP_EOL,
                    'message' => $exception->getMessage() . PHP_EOL,
                    'payload' => $this->message,
                    'trace'   => PHP_EOL.$exception->getTraceAsString()
                ]
            );
            return false;
        }
    }

    protected function addRecipients($type) 
    {
        if (!empty($this->message['mails'][$type]) ) {
            $this->mail->$type($this->message['mails'][$type]);
        }

        return $this; 
    }

    protected function sendFormulario() 
    {
        return $this->mail->send(new ContactoFormulario($this->message));
    }


    
}