<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreateAccount extends Mailable
{
    use Queueable, SerializesModels;

    public $createAccount;
    public function __construct($createAccount)
    {
        $this->createAccount = $createAccount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.createAccount');
    }
}
