<?php

namespace App\Mail;
use App\subscribe;
use App\SubscriberMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $message;
    public $email;

    public function __construct(SubscriberMessage $message,subscribe $email)
    {
        $this->message = $message;
        $this->email = $email;
    }

    /**
     * Build the message.category
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.send_message');
    }
}
