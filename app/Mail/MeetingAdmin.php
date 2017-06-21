<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MeetingAdmin extends Mailable
{

    public $name;
    public $email;
    public $text;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $text)
    {

        $this->name = $name;
        $this->email = $email;
        $this->text = $text;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
          return $this->from('forms@svarovskyjiri.cz')->subject('Zájem o schůzku')->view('mail.meeting_admin');
    }
}
