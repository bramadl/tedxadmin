<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $payment;
    public $ticket;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $payment, $ticket)
    {
        $this->user = $user;
        $this->payment = $payment;
        $this->ticket = $ticket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($address = 'technical.tedxbrawijaya@gmail.com', $name = 'TEDxUniversitasBrawijaya2021')
                ->subject('Verifikasi Pembelian Ticket TEDxUniversitasBrawijaya2021')
                ->view('notification.invoice-notification');
    }
}
