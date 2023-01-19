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


class Debts extends Mailable
{
    use Queueable, SerializesModels;

    private Model $_user;
    private Debt $_debt;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Model $user, Debt $debt)
    {
        $this->_user = $user;
        $this->_debt = $debt;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Deudas presentadas por el cliente',
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
            view: 'emails.debtsMail',
            with: [
                'company'       => env("APP_NAME"),
                'name'          => $this->_user->name,
                'email'         => $this->_user->email,
                'bank'          => $this->_debt->bank,
                'type_credit'   => $this->_debt->type_credit,
                'past_due'      => $this->_debt->past_due,
                'amount'        => $this->_debt->amount,
                'product_number'=> $this->_debt->product_number,
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
