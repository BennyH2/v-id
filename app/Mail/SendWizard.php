<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendWizard extends Mailable
{
    use Queueable, SerializesModels;
    public $data, $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->url = url('/staff/wizard');    }
    
    public function build()
    {
        return $this->from(config('mail.from.address'))
                    ->subject('New Contact Form Submission')
                    ->markdown('emails.send-wizard');
    }
}
