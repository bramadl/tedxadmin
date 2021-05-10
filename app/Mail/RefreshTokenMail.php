<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RefreshTokenMail extends Mailable
{
    use Queueable, SerializesModels;

    public $status;
    public $payment;
    public $userTicket;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($status, $payment, $userTicket)
    {
        $this->status = $status;
        $this->payment = $payment;
        $this->userTicket = $userTicket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($address = 'technical.tedxbrawijaya@gmail.com', $name = 'TEDxUniversitasBrawijaya2021')
                ->subject('Permintaan Token Ticket TEDxUniversitasBrawijaya2021')
                ->view('notification.refresh-token-notification');
    }
}
