<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordChanged extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function build()
    {
        return $this->subject('Password Changed')
                    ->view('email.password_changed');
    }
}
