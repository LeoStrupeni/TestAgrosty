<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\subject;

class AgrostyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $subject;
    public $fecha;

    public function __construct($details,$subject,$fecha)
    {
        $this->details = $details;
        $this->subject = $subject;
        $this->fecha = $fecha;
    }

    public function build()
    {
        return $this->view('formatoMail');
    }
}
