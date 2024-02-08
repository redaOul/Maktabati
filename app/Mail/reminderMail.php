<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class reminderMail extends Mailable
{
    use Queueable, SerializesModels;

    private $recieverEmail, $recieverName, $bookName;

    public function __construct($recieverEmail, $recieverName, $bookName) {
        $this->recieverEmail = $recieverEmail;
        $this->recieverName = $recieverName;
        $this->bookName = $bookName;
    }
    public function envelope(): Envelope {
        return new Envelope(
            subject: "Avertissement : Retard dans le retour du livre '{$this->bookName}'",
        );
    }
    public function content(): Content {
        return new Content(
            view: 'emails.mailTest',
            with: [
                'recieverEmail' => $this->recieverEmail,
                'recieverName' => $this->recieverName,
                'bookName' => $this->bookName,
            ],
        );
    }
}
