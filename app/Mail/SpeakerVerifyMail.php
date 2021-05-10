<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SpeakerVerifyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $speaker;
    public $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($speaker, $password)
    {
        $this->speaker = $speaker;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($address = 'technical.tedxbrawijaya@gmail.com', $name = 'TEDxUniversitasBrawijaya2021')
                ->subject('Speaker Account Activated')
                ->view('notification.speaker-verify-notification');
    }
}
