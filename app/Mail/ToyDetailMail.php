<?php

namespace App\Mail;

use App\Models\Toy;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ToyDetailMail extends Mailable
{
    use Queueable, SerializesModels;

    public $toy;
    public $userName;

    public function __construct(Toy $toy, string $userName)
    {
        $this->toy = $toy;
        $this->userName = $userName;
    }

    public function build()
    {
        return $this->subject('Detalles de tu juguete seleccionado')
                    ->view('emails.toy_detail');
    }
}
