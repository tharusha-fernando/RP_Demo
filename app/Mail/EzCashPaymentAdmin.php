<?php

namespace App\Mail;

use App\Models\EzCash;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EzCashPaymentAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $User;
    public $Ezcash;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(EzCash $Ezcash)
    {
        $this->User=User::find($Ezcash->user);
        $this->Ezcash=$Ezcash;
        //
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            //from: new Address('thereadingpanel@gmail.com', 'The Reading Panel'),
            subject: 'Ez Cash Payment Admin',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'email.EzCashPaymentAdmin',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
