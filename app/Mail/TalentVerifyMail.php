<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TalentVerifyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $talent;
    public $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($talent, $password)
    {
        $this->talent = $talent;
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
                ->subject('Talent Account Activated')
                ->view('notification.talent-verify-notification');
    }
}
