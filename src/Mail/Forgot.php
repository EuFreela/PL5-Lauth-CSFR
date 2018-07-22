<?php

namespace Lameck\Lauth\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Forgot extends Mailable
{
    use Queueable, SerializesModels;
  
    public $name;
    public $token;
    
    public function __construct($name,$token)
    {
        $this->name = $name;
        $this->token = $token;
    }
   
    public function build()
    {
        return $this->from(config('lauth.EMAIL_FROM_FORGOT'))
        ->subject(config('lauth.EMAIL_SUBJECT_FORGOT'))
        ->view(config('lauth.EMAIL_VIEW_FORGOT'));
    }
}
