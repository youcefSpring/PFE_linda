<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FichePaieMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    public function __construct($data)
    {
        $this->data=$data;
    }


    public function build()
    {
        return $this->subject('fiche de paie :'.$this->data['date'])
               ->view('Dashboard.emails.upload')
               ->attach($this->data['file']->getRealPath(),[
                   'as'=> $this->data['file']->getClientOriginalName()
               ]) ;

    }
}
