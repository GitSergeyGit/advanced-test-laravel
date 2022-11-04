<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

//class WelcomeMail extends Mailable implements ShouldQueue
class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $username;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $username)
    {
        $this->username = $username;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Title subject')->view('mail.welcome');
    }
}
