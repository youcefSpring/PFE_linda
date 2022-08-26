<?php
#App\Mail\Upload.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Upload extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data=[])
    {
        $this->data = $data;
    }


    public function build()
    {
        return $this->view('Dashboard/emails/upload')
                ->subject('Fiche de Paie')
                ->attach($this->data['document']->url_pdf,
                [
                    'as' => $this->data['document']->employee->matricule.".pdf",
                    'mime' => 'pdf',
                ]);

    }
}
