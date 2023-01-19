<?php

namespace App\Mail;

use App\Models\Debt;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class DebtsMail extends Mailable
{
    use Queueable, SerializesModels;

    private Model $_user;
    private Debt $_debt;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Model $user)
    {
        $this->_user = $user;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Usuario Registrado',
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
            view: 'emails.debts',
            with: [
                'company'       => env("APP_NAME"),
                'user'          => $this->_user,
            ],
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
