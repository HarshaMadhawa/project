<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserAproved extends Mailable
{
    use Queueable, SerializesModels;
    public $userPassword;
    public function __construct($userPassword)
    {
        $this->userPassword = $userPassword;
    }

    public function build()
    {
        return $this->subject('User Aproved')
                    ->view('email.user_aproved')
                    ->with(['userPassword' => $this->userPassword]);
    }
}
