<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserVerifyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $partner;
    public $email;
    public $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($partner, $email, $password)
    {
        $this->partner = $partner;
        $this->email = $email;
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
                ->subject('Partner Account Activated')
                ->view('notification.user-verify-notification');
    }
}
