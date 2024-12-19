<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SpecialCertificateMail extends Mailable
{
    use Queueable, SerializesModels;


    public $certificateUrl;

    public function __construct($certificateUrl)
    {
        $this->certificateUrl = $certificateUrl;
    }

    public function build()
    {
        return $this->from('rwandicp@gmail.com', 'ICP RWANDA')
                    ->view('emails.SpecialCertificate')
                    ->with([
                        'certificateUrl' => $this->certificateUrl,
                    ]);
    }
}
