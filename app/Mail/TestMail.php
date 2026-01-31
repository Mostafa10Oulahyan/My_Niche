<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $userEmail = $this->data['user_email'] ?? 'Unknown User';

        return $this->view('emailc')
            ->from(env('MAIL_FROM_ADDRESS'), $userEmail) // Use user's email as the Sender Name
            ->replyTo($userEmail)
            ->subject($this->data['subject'])
            ->with([
                'msg' => $this->data['message'],
                'user_email' => $userEmail,
                'subject' => $this->data['subject']
            ]);
    }

    /**
     * Get the message envelope.
     */
    /*
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Test Mail',
        );
    }
    */

    /**
     * Get the message content definition.
     */
    /*
    public function content(): Content
    {
        return new Content(
            view: 'emailc',
        );
    }
    */

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    /*
    public function attachments(): array
    {
        return [];
    }
    */
}
